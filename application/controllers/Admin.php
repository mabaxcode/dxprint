<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('Admin_model', 'DbAdmin');

        if ( $this->session->userdata('user_type') <> "ADMIN") {
        	redirect();
        }
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	function logout()
	{
	    $this->session->sess_destroy();
	    redirect();
	}
}
