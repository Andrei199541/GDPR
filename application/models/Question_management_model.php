<?php

class Question_management_model extends Base_model {

    protected $table = "question_management";
    protected $_access_table = "question_access_setting";
    protected $_answer_table = "answers_list";

    function __construct() {
        parent::__construct();
        // $this->index();
        $this->checkSettingTable();
        $this->getResultTableName();
    }

    public function index() {
        if ( $this->ifNotExistsTable($this->table) ) {
            $query = " CREATE TABLE `" . $this->table . "` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `questions` text NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->db->query($query);
        }
    }

    public function getSurveyByUser() {
        $result = "";
        $this->load->model("user_model");
        $user = $this->user_model->getUserInfo();
        $survey = $this->db->get_where($this->_answer_table, array("client_id" => $user->id))->row();
        if ($survey) {
            $result = $survey->result;
        }
        return $result;
    }

    public function getQuestions() {
        return $this->db->get($this->table)->result();
    }

    public function saveNewQuestions($new) {
        $row = $this->db->get_where($this->table, array('questions' => $new))->row();
        if ($row) {
            return "exists";
        } else {
            $this->db->insert($this->table, array('questions' => $new));
            return $this->db->insert_id();
        }
        return '0';
    }

    public function deleteQuestions($id) {
        $this->db->where(array('id' => $id));
        return $this->db->delete($this->table);
    }

    public function getPageNames(){
        $jsonFile = './data.json';
        $jsonData = json_decode(file_get_contents($jsonFile));
        $i = 1;
        $res = array();
        foreach ($jsonData->pages as $jsonRow) {
            if (isset($jsonRow->name)) {
                $res[] = $jsonRow->name;
            } else {
                $res[] = "Page" . $i;
            }
        }
        return $res;
    }

    public function getAccess() {
        return $this->db->get($this->_access_table)->row();
    }

    public function setAccess($fr, $fm, $pd) {
        $this->load->model("user_model");
        $user = $this->user_model->getUserInfo();
        $this->db->empty_table($this->_access_table);
        $this->db->insert($this->_access_table, array("free" => $fr,"freemium" => implode(",", $fm),"paid" => implode(",", $pd)));
        if ($this->db->insert_id()) {
            return "OK";
        }
        return "Failed";
    }

    public function setCustomQuestions($json, $page) {
        $json = json_decode($json);
        foreach ($json->pages as $jsonRow) {
            if ($jsonRow->name == $page) {
                //new custome json
                $customJsonFile = './custom.json';
                file_put_contents($customJsonFile, json_encode($jsonRow->elements));
                
                return "OK";
            }
        }
        return "Failed";
    }

    public function checkCustomizeQuestions() {
        $customJsonFile = './custom.json';
        $jsonData = json_decode(file_get_contents($customJsonFile));
        return $jsonData ? true : false;
    }

    public function getJsonByRole($role = false) {
        if (!$role)
            $role = $this->session->userdata("role");
        $row = $this->db->get($this->_access_table)->row_array();
        $cols = array("free", "freemium", "paid");
        $jsonFile = './data.json';
        $jsonContent = json_decode(file_get_contents($jsonFile));
        if ($role != 1) {
            $new = array();
            $pages = explode(",", $row[$cols[$role - 2]]);
            foreach ($jsonContent->pages as $jsonRow) {
                if (in_array($jsonRow->name, $pages)) {
                    $new["pages"][] = $jsonRow;
                }
            }
            $jsonContent = $new;
            $jsonContent = json_decode(json_encode($jsonContent));
        }
        return $jsonContent;
    }

    public function CompleteSurvey($result) {
        $this->load->model("user_model");
        $user = $this->user_model->getUserInfo();
        $saveAry = array(
            "client_id" => $user->id,
            "result" => $result,
            "idate" => date("Y-m-d H:i:s")
        );
        $check = $this->db->get_where($this->_answer_table, array("client_id" => $user->id))->row();
        if ($check) {
            $this->db->where(array("client_id" => $user->id));
            $this->db->update($this->_answer_table, $saveAry);
        } else {
            $this->db->insert($this->_answer_table, $saveAry);
        }

        echo '<script> window.top.location.href="' . site_url("questions/getSurveyResult") . '" </script>';
    }

    public function getSurveyResult() {
        $this->load->model("user_model");
        $user = $this->user_model->getUserInfo();
        $survey = $this->db->get_where($this->_answer_table, array("client_id" => $user->id))->row();
        $questions = $this->getJsonByRole();
        
        $yesList    = array();
        $noList     = array();
        $applyList  = array();
        $pageNumber = array();
        $totalPage  = array("count" => 0, "reply" => 0);
        $last       = "";
        if ($questions && isset($questions->pages) && count($questions->pages)) {
            foreach ($questions->pages as $pages) {
                $totalPage["count"] ++;
                $yesList[$pages->name]    = array();
                $noList[$pages->name]     = array();
                $applyList[$pages->name]  = array();
                $pageNumber[$pages->name] = 0;
                $reply = false;
                if (isset($pages->elements) && count($pages->elements) && $survey) {
                    $result = json_decode( $survey->result );
                    foreach ($pages->elements as $element) {
                        if ($element->type == "radiogroup") {
                            foreach ($result as $questionName => $answer) {
                                foreach ($element->choices as $choice) {
                                    if ($choice->value == $answer && ($choice->text == "DA" || $choice->text == "YES")) {
                                        $yesList[$pages->name][] = $element->title;
                                        $pageNumber[$pages->name] ++;
                                        $reply = true;
                                    } else if ($choice->value == $answer && ($choice->text == "NU" || $choice->text == "NO")) {
                                        $noList[$pages->name][] = $element->title;
                                        $pageNumber[$pages->name] ++;
                                        $reply = true;
                                    } else if ($choice->value == $answer) {
                                        $applyList[$pages->name][] = $element->title;
                                        $reply = true;
                                    }
                                }
                            }
                        }
                    }
                }
                if ($reply) {
                    $totalPage["reply"] ++;
                }
            }
            if ($survey) {
                $last = $survey->idate;
            }
        }
        $todoList = $this->todoList();
        $doubleCheck = $this->DoubleCheck();
        return array(
            "yes"               => $yesList,
            "no"                => $noList,
            "apply"             => $applyList,
            "questionsByPage"   => $pageNumber,
            "last"              => $last,
            "totalPage"         => $totalPage,
            "todoList"          => $todoList,
            "double"            => $doubleCheck
        );
    }

    public function todoList() {
        $this->load->model("user_model");
        $user = $this->user_model->getUserInfo();
        $survey = $this->db->get_where($this->_answer_table, array("client_id" => $user->id))->row();
        $questions = $this->getJsonByRole();
        
        $todoList = array();
        if ($questions && isset($questions->pages) && count($questions->pages) && $survey) {
            $result = json_decode( $survey->result );
            foreach ($questions->pages as $pages) {
                $todoList[$pages->name] = array();
                foreach ($result as $questionName => $answer) {
                    if (isset($pages->elements) && count($pages->elements)) {
                        $choiceValue = "";
                        foreach ($pages->elements as $element) {
                            if ($element->type == "radiogroup") {
                                foreach ($element->choices as $choice) {
                                    if ($choice->value == $answer && ($choice->text == "NU" || $choice->text == "NO")) {
                                        if (!isset($todoList[$pages->name][$answer])) {
                                            $todoList[$pages->name][$answer] = array();
                                        }
                                        $todoList[$pages->name][$answer]["title"] = $element->title;
                                        $choiceValue = $answer;
                                    } 
                                }
                            }
                            if ($element->type == "html" && isset($element->visibleIf) && $choiceValue && strpos($element->visibleIf, $choiceValue)) {
                                $todoList[$pages->name][$choiceValue]["val"] =  $element->html;
                            }
                        }
                    }
                }
            }
        }
        return $todoList;
    }
    
    public function DoubleCheck() {
        $this->load->model("user_model");
        $user = $this->user_model->getUserInfo();
        $survey = $this->db->get_where($this->_answer_table, array("client_id" => $user->id))->row();
        $questions = $this->getJsonByRole();
        
        $doubleCheck = array();
        if ($questions && isset($questions->pages) && count($questions->pages) && $survey) {
            $result = json_decode( $survey->result );
            foreach ($questions->pages as $pages) {
                $doubleCheck[$pages->name] = array();
                foreach ($result as $questionName => $answer) {
                    if (isset($pages->elements) && count($pages->elements)) {
                        $choiceValue = "";
                        foreach ($pages->elements as $element) {
                            if ($element->type == "radiogroup") {
                                foreach ($element->choices as $choice) {
                                    if ($choice->value == $answer && ($choice->text == "NU MI SE APLICĂ" || $choice->text == "IT DOES NOT APPLY TO ME")) {
                                        if (!isset($doubleCheck[$pages->name][$answer])) {
                                            $doubleCheck[$pages->name][$answer] = array();
                                        }
                                        $doubleCheck[$pages->name][$answer]["title"] = $element->title;
                                        $choiceValue = $answer;
                                    } 
                                }
                            }
                            if ($element->type == "html" && isset($element->visibleIf) && $choiceValue && strpos($element->visibleIf, $choiceValue)) {
                                $doubleCheck[$pages->name][$choiceValue]["val"] =  $element->html;
                            }
                        }
                    }
                }
            }
        }
        return $doubleCheck;
    }    
    
    public function getAuthoritys() {
        $this->load->model("user_model");
        $user = $this->user_model->getUserInfo();
        $survey = $this->db->get_where($this->_answer_table, array("client_id" => $user->id))->row();
        $questions = $this->getJsonByRole();
        
        $authors = array();
        if ($questions && isset($questions->pages) && count($questions->pages) && $survey) {
            $result = json_decode( $survey->result );
            foreach ($questions->pages as $pages) {
                $authors[$pages->name] = array();
                foreach ($result as $questionName => $answer) {
                    if (isset($pages->elements) && count($pages->elements)) {
                        $choiceValue = "";
                        foreach ($pages->elements as $element) {
                            if ($element->type == "radiogroup") {
                                foreach ($element->choices as $choice) {
                                    if ($choice->value == $answer && ($answer == $element->correctAnswer)) {
                                        if (!isset($authors[$pages->name][$answer])) {
                                            $authors[$pages->name][$answer] = array();
                                        }
                                        $authors[$pages->name][$answer]["title"] = $element->title;
                                        $choiceValue = $answer;
                                    } 
                                }
                            }
                            if ($element->type == "html" && isset($element->visibleIf) && $choiceValue && strpos($element->visibleIf, $choiceValue)) {
                                $authors[$pages->name][$choiceValue]["val"] =  $element->html;
                            }
                        }
                    }
                }
            }
        }
        return $authors;
    }

    public function saveMidSurvey($pageNumber, $result) {
        $questions = $this->getJsonByRole();
        $list = "";
        $return = "failed";
        if (isset($questions->pages) && count($questions->pages)) {
			$index = 0;
			$replyAnswerList = array();
			$list = '{';
            foreach ($questions->pages as $pageCount => $page) {
                if (isset($result)) {
					// print_r($result);exit;
                    foreach ($result as $answer) {
                        if ($pageCount <= $pageNumber) {
                            foreach ($page->elements as $element) {
								$reply = "";
                                if ($element->name == $answer["name"]) {
									if (!is_array($answer["reply"])) {
										$reply = $answer["reply"];
									}
								}
								if ($reply) {
									if (!in_array($answer["name"], $replyAnswerList)) {
										$replyAnswerList[] = $answer["name"];
										if ($index == 0) {
											$list .= '"' . $answer["name"] . '":"' . $reply . '"';
										} else {
											$list .= ',"' . $answer["name"] . '":"' . $reply . '"';
										}
										$index ++;
									}
								}
                            }
                        }
                    }
                }
            }
			$list .= '}';
            if ($list) {
                $this->CompleteSurvey($list);
                $return = "ok";
            }
        }
        return $return;
    }

    public function getPageNumberByPageName($pageName) {
        $questions = $this->getJsonByRole();
        if ($questions) {
            if (isset($questions->pages)) {
                foreach ($questions->pages as $pageno => $page) {
                    if ($page->name == $pageName) {
                        return $pageno;
                    }
                }
            }
        }
        return 0;
    }

    public function changeQuestions($data) {
        $row = $this->db->get($this->table)->row();
        if ($row) {
            $this->db->update($this->table, array("questions" => $data));
        } else {
            $this->db->insert($this->table, array("questions" => $data));
        }
    }
    
    private function checkSettingTable() {
        if ( $this->ifNotExistsTable($this->_access_table) ) {
            $query = " CREATE TABLE `" . $this->_access_table . "` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `free` varchar(30) NOT NULL,
                `freemium` text NOT NULL,
                `paid` text NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->db->query($query);
        }
    }

    private function getResultTableName() {
        if ( $this->ifNotExistsTable($this->_answer_table) ) {
            $query = " CREATE TABLE `" . $this->_answer_table . "` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `client_id` int(11) NOT NULL,
                `result` text NOT NULL,
                `idate` datetime NOT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->db->query($query);
        }
    }
}
?>