<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		//$this->load->view('dashboard1');

		//$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		//$output = $this->grocery_crud->render();
		$this->syslist();

		//$this->_example_output($output);
	}

	public function _example_output($output = null)
	{
		$this->load->view('dashboard1.php',(array)$output);
	}

	public function syslist ()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('syslog');
		//$crud->set_relation('sys_id','sys_title','sys_path');
		$crud->display_as('sys_title','System Title');
		$crud->display_as('sys_path','System Logo');
		$crud->set_subject('System');
		$crud->required_fields('sys_path' , 'sys_title');

		$crud->set_field_upload('sys_path','assets/uploads/files');

		$crud->callback_before_delete(array($this,'log_user_before_delete'));
		$crud->callback_after_delete(array($this,'refresh_after_delete'));

		$output = $crud->render();

		$this->_example_output($output);

	}

	public function log_user_before_delete($primary_key)
	{
		$this->load->database();
		$this->load->model('M_syslog', 'ms');
		$data = $this->ms->get($primary_key);
		if(!$data){
			return FALSE;
		}
		$img = $data->sys_path;
		if ($img != NULL) {
			unlink('assets/uploads/files/'.$img);
			return TRUE;
		}
		return TRUE;
	}

	public function refresh_after_delete($primary_key)
	{
		redirect('dashboard1.php', 'refresh');
	}

}
