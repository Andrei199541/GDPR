<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangeJson extends CI_Controller {

	public function index()
	{
		$jsonFile = "./data.json";

		$pageName = $this->input->get('pageName');
		$jsonData = json_decode(file_get_contents('php://input'), true);
		$saveAry = array();
		if (sizeof ($jsonData)) {
			$saveAry['Id'] = $jsonData['Id'];
			$saveAry['Json'] =  json_decode($jsonData['Json']);
			if (isset($pageName)) {
				foreach ($saveAry["Json"]->pages as $jsonRow) {
					if (trim($jsonRow->name) == trim($pageName)) {
						$forword_key = str_replace("-", "_", str_replace(" ", "", $pageName)) . '_' . time();
						$customJson = json_decode(file_get_contents("./custom.json"));
						$radioName = "";
						$checkboxName = "";
						foreach ($customJson as $custom) {
							$custom->name = $custom->name . '_' . time();
							if ($custom->type == "radiogroup") {
								foreach ($custom->choices as $choices) {
									$choices->value = $forword_key . $choices->value;
								}
								$custom->correctAnswer = $forword_key . $custom->correctAnswer;
								$radioName = $custom->name;
							} else if ($custom->type == "checkbox") {
								$custom->defaultValue[0] = $forword_key . $custom->defaultValue[0];
								foreach ($custom->choices as $choices) {
									$choices->value = $forword_key . $choices->value;
								}
								$checkboxName = $custom->name;
							} else if ($custom->type == "html") {
								$visibleIf = explode('"', $custom->visibleIf);
								$str = explode("{", $visibleIf[0]);
								$str1 = explode("}", $str[1]);

								$custom->visibleIf = "{" . $str[0] . $radioName . "}" . $str1[1] . '"' . $forword_key . $visibleIf[1] . '"' . $visibleIf[2];
							} else if ($custom->type == "comment") {
								$visibleIf = explode('"', $custom->visibleIf);
								$str = explode("{", $visibleIf[0]);
								$str1 = explode("}", $str[1]);

								$custom->visibleIf = "{" . $str[0] . $checkboxName . "}" . $str1[1] . '"'. $forword_key . $visibleIf[1] . '"' . $visibleIf[2];
							}
							$jsonRow->elements[] = $custom;
						}
					}
				}
			}
			$saveAry = json_encode($saveAry['Json']);
		}
		
		file_put_contents($jsonFile, $saveAry);

		exit ( file_get_contents($jsonFile) );
	}
}
