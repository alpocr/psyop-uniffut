<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_controller extends CI_Controller {

        function index(){
                $this->load->view('header_view');
		$this->load->view('index_view');
                $this->load->view('footer_view');

        }


}


