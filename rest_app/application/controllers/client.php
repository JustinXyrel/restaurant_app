<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class client extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("clientModel");
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('client/index');
	}
	
	public function registration(){
		$this->load->view('templates/header');
		$this->load->view('client/registration');
	}
	
	public function clientRegistration(){
		$post = $this->input->post();
		$this->clientModel->registration($post);
	}
}