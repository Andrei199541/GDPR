<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require_once APPPATH . "/../vendor/autoload.php";
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

class Document extends CI_Controller {

	function __construct() {
		parent:: __construct();
		isUser();
		$this->load->model("file_manage_model");
	}

	public function uploads()
	{
		if (!isAdmin()) {
			$this->logout();
		}
		$data['css'] = array(
			'vendor/dropzone.min',
			'vendor/dataTables.bootstrap4.min',
			'vendor/datatables.responsive.bootstrap4.min',
			'vendor/perfect-scrollbar',
			'dore/main',
			'dore/customer',
		);
		$data["js"] = array('user');
		$data['vendorJS'] = array(
			'dropzone.min',
			'mousetrap.min',
			'perfect-scrollbar.min',
			'jquery.contextMenu.min',
		);
		$data['mainMenu'] = "question_menu";
		$data['subMenu'] = "uploads";
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$user['info'] = $info;

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('admin/uploads');
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function getCounts() {
		$count = $this->file_manage_model->getCounts();
		exit( json_encode(ceil($count / 10)) );
	}

	public function getFiles() {
		$limit = $this->input->get("c");
		$result = $this->file_manage_model->getFiles($limit);
		exit( json_encode($result) );
	}

	public function manageReport() {
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$this->load->model("question_management_model");
		$values = $this->question_management_model->getSurveyResult();

		$user['info'] = $info;
		$data['js'] = array("user");
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'vendor/owl.carousel.min',
			'dore/main'
		);
		$data['mainMenu'] = "management_report";
		$data['subMenu'] = "management_report";
		$data['vendorJS'] = array(
			'Chart.bundle.min',
			'perfect-scrollbar.min',
			'owl.carousel.min',
			"progressbar.min"
		);

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('user/manageReport', $values);
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function managementExport() {
		$this->load->model("question_management_model");
		$values = $this->question_management_model->getSurveyResult();
		$info = $this->user_model->getUserInfo();
		$values["user"] = $info;

		$this->load->view('document/manageReport', $values);
        // $html2pdf = new Html2Pdf('P', 'B4', 'en', true, 'UTF-8');
        // $html2pdf->pdf->SetDisplayMode('fullpage');
		// $html2pdf->writeHTML($body);
		// if (ob_get_contents()) ob_end_clean();

        // $html2pdf->output("Management Report.pdf", "D");
	}

	public function authReport() {
		$data['css'] = array(
			'vendor/dataTables.bootstrap4.min',
			'vendor/datatables.responsive.bootstrap4.min',
			'vendor/perfect-scrollbar',
			'dore/main',
		);
		$data["js"] = array('user');
		$data['vendorJS'] = array(
			'datatables.min',
			'perfect-scrollbar.min',
			'jquery.contextMenu.min',
		);
		$data['mainMenu'] = "authority_report";
		$data['subMenu'] = "authority_report";
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$user['info'] = $info;

		$this->load->model("question_management_model");
		$auth = $this->question_management_model->getAuthoritys();
		$data["authoritys"] = $auth;
		
		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('user/authority', $data);
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function authorityExport() {
		$this->load->model("question_management_model");
		$auth = $this->question_management_model->getAuthoritys();
		$info = $this->user_model->getUserInfo();
		$data = array();
		$data["authoritys"] = $auth;
		$data["info"] = $info;
		$this->load->view('document/authority', $data);
	}
}
