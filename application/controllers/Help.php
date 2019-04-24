<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	function __construct() {
		parent:: __construct();
		isUser();
	}

	public function gdpr() {
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'dore/main',
		);
		$data["js"] = array('user');
		$data['vendorJS'] = array(
			'perfect-scrollbar.min',
			'jquery.contextMenu.min',
		);
		$data['mainMenu'] = "help";
		$data['subMenu'] = "gdpr";
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$user['info'] = $info;

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('help/gdpr');
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function dpo() {
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'dore/main',
		);
		$data["js"] = array('user');
		$data['vendorJS'] = array(
			'perfect-scrollbar.min',
			'jquery.contextMenu.min',
		);
		$data['mainMenu'] = "help";
		$data['subMenu'] = "dpo";
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$user['info'] = $info;

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('help/dpo');
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function howtouse() {
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'dore/main',
		);
		$data["js"] = array('user');
		$data['vendorJS'] = array(
			'perfect-scrollbar.min',
			'jquery.contextMenu.min',
		);
		$data['mainMenu'] = "help";
		$data['subMenu'] = "howtouse";
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$user['info'] = $info;

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('help/howtouse');
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}

	public function techsupport() {
		$data['css'] = array(
			'vendor/perfect-scrollbar',
			'dore/main',
		);
		$data["js"] = array('user');
		$data['vendorJS'] = array(
			'perfect-scrollbar.min',
			'jquery.contextMenu.min',
		);
		$data['mainMenu'] = "help";
		$data['subMenu'] = "techsupport";
		$this->load->model("user_model");
		$info = $this->user_model->getUserInfo();
		$user['info'] = $info;

		$this->load->view('template/dore/header', $data);
		$this->load->view('template/dore/topbar', $user);
		$this->load->view('template/dore/sidebar');
		$this->load->view('help/techsupport');
		$this->load->view('template/dore/footer');
		$this->load->view('template/dore/link', $data);
	}
}
