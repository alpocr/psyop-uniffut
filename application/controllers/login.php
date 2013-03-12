<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct();
	}


	function index(){
		$this->load->helper(array('form'));
		$this->load->view('login_view');

	}

	function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('admin', 'refresh');
	}


	function authenticate(){
		$this->load->model('User_model', '', 'true');

		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		if($this->user_model->authenticate($username, $password)){
			$this->session->set_userdata('loggedin', true);
		}

		redirect('/');

	}


}
