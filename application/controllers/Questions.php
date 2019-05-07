<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	function __construct() {
		parent:: __construct();
		isUser();
		$this->load->model("question_management_model");
	}

	public function accessManage() {
		if (isAdmin()) {
			$data['css'] = array(
				'vendor/perfect-scrollbar',
				'vendor/select2.min',
				'vendor/select2-bootstrap.min',
				'dore/main'
			);
			$data['vendorJS'] = array(
				'perfect-scrollbar.min',
				'select2.full'
			);
			$data["js"] = array(
				'user'
			);
			$data['mainMenu'] = "user_menu";
			$data['subMenu'] = "access_management";

			$this->load->model("user_model");
			$info = $this->user_model->getUserInfo();
			$user['info'] = $info;

			$surveys = $this->question_management_model->getPageNames();
			$data["surveys"] = $surveys;

			$this->load->view('template/dore/header', $data);
			$this->load->view('template/dore/topbar', $user);
			$this->load->view('template/dore/sidebar');
			$this->load->view('admin/accessSurvey', $data);
			$this->load->view('template/dore/footer');
			$this->load->view('template/dore/link', $data);
		}
	}

	public function getAccess() {
		$result = $this->question_management_model->getAccess();
		exit( json_encode($result) );
	}

	public function setAccess() {
		$result = array();
		if (isAdmin()) {
			$free = $this->input->post("free");
			$freemium = $this->input->post("freemium");
			$paid = $this->input->post("paid");
			
			$result = $this->question_management_model->setAccess($free, $freemium, $paid);
			exit( json_encode($result) );
		}
	}

	public function management() {
		if (isAdmin()) {
			$checkCustomizeQuestions = $this->question_management_model->checkCustomizeQuestions();
			$data['css'] = array('index');
			$data['js']  = array('survey/editor');
			$data['checkCustomizeQuestions'] = $checkCustomizeQuestions;
			$data['mainMenu'] = "question_menu";
			$data['subMenu'] = "question_management";
			$data["title"] = "SurveyJS Editor";
			$data["flag"] = "editor";
			$this->load->view('template/header', $data);
			$this->load->view('questions');
			$this->load->view('template/link', $data);
		}
	}

	public function customQuestion() {
		if (isAdmin()) {
			$json = $this->input->post("json");
			$page = $this->input->post("page");
			$result = $this->question_management_model->setCustomQuestions($json, $page);
			exit( json_encode($result) );
		}
	}

	public function survey() {
		$pageName = $this->input->get("page");
		$pageNumber = 0;
		if ($pageName) {
			$pageNumber = $this->question_management_model->getPageNumberByPageName($pageName);
		}
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$user['info'] = $info;
		$data['js'] = array("user");
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'vendor/owl.carousel.min',
			'dore/main'
		);
		$data['mainMenu'] = "result";
		$data['subMenu'] = "result";
		$data['vendorJS'] = array(
			'Chart.bundle.min',
			'perfect-scrollbar.min',
			'owl.carousel.min',
			"progressbar.min"
		);

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('user/survey', array("pageNumber" => $pageNumber));
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function iframe() {
		$data[] = array();
		$data['title'] = "Survey";
		$data['flag'] = "result";

		$json = $this->question_management_model->getJsonByRole();
		$data['json'] = json_encode($json);
		$survey = $this->question_management_model->getSurveyByUser();
		$data["result"] = $survey;

		$this->load->view('template/header', $data);
		$this->load->view('user/iframe', $data);
		$this->load->view('template/footer');
	}

	public function complete() {
		$result = $this->input->post("surveyResult");
		$this->question_management_model->CompleteSurvey($result);
	}
	
	public function getSurveyResult() {
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$values = $this->question_management_model->getSurveyResult();

		$user['info'] = $info;
		$data['js'] = array("user");
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'vendor/owl.carousel.min',
			'dore/main'
		);
		$data['mainMenu'] = "result";
		$data['subMenu'] = "result";
		$data['vendorJS'] = array(
			'Chart.bundle.min',
			'perfect-scrollbar.min',
			'owl.carousel.min',
			"progressbar.min"
		);

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('user/completeSurvey', $values);
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function todoList() {
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$values = $this->question_management_model->getSurveyResult();

		$user['info'] = $info;
		$data['js'] = array("user");
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'vendor/owl.carousel.min',
			'dore/main'
		);
		$data['mainMenu'] = "question_menu";
		$data['subMenu'] = "todo";
		$data['vendorJS'] = array(
			'Chart.bundle.min',
			'perfect-scrollbar.min',
			'owl.carousel.min',
			"progressbar.min"
		);

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('user/todo', $values);
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function doubleCheck() {
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$values = $this->question_management_model->getSurveyResult();

		$user['info'] = $info;
		$data['js'] = array("user");
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'dore/main'
		);
		$data['mainMenu'] = "question_menu";
		$data['subMenu'] = "double_check";
		$data['vendorJS'] = array(
			'perfect-scrollbar.min'
		);

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('user/doubleCheck', $values);
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function saveSurvey() {
		$pageNumber = $this->input->post("pageNumber");
		$result = $this->input->post("result");
		$ret = $this->question_management_model->saveMidSurvey($pageNumber, $result);
		exit($ret);
	}
}
