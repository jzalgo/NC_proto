<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url', 'form');

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$this->load->view('realog');

	}

/*	public function od()
	{
	  redirect('http://localhost/NC_proto/','refresh');
	}
	public function oem()
	{
	  redirect('http://localhost/NC_proto/','refresh');
	}
	public function btj()
	{
	  redirect('http://localhost/NC_proto/','refresh');
  }*/

	public function login()
	{
    	redirect('dashboard1');
	}

	public function validate_credentials()
	{
		$this->load->database();
	  	$this->load->model('membership_model');
		$us = $this->input->post('username');
		$pass = $this->input->post('password');
	 	$query = $this->membership_model->validate($us , $pass);

	 	if($query) // if the user's credentials validated...
		 	{
		 		$data = array(
		 		 'username' => $this->input->post('username'),
		 		 'is_logged_in' => true
		 			);
				$this->load->library('session');
				$this->session->set_userdata($data);
		 		redirect('dashboard1');
		 	}
		 	else // incorrect username or password
		 	{
		 		//$this->index();
		    echo 'Login Failed';
		 	}
	 }
	 function _checkSession()
	 {
	     $this->load->database();
	     $this->load->model('membership_model');
	     //$this->load->library('my_func');
	     if ($this->session->userdata('us_id'))
			 {
	       //$id = $this->my_func->scpro_decrypt($this->session->userdata('us_id'));
	       if ($this->m_login->get($id))
				 {
	         return true;
	       }
				 else
				 {
	         redirect(site_url('login'),'refresh');
	       }
	     }
			 else
			 {
	       redirect(site_url('login'),'refresh');
	     }
	  }

   	public function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		//$this->index();
	    //redirect('main/employees');
	    redirect(site_url("auth?continue=".$this->input->get('continue')), 'refresh');

	}
}
