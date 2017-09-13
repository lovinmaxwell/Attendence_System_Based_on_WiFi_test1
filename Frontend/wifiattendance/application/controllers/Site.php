<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$data = Array();
		$this->load->view('Site_form',$data);
	}
	
	public function getData(){
		$data = Array();
		$selected_date = $this->input->post('date');
		$this->load->model('Site_model');
		
		if($q = $this->Site_model->getRecords($selected_date)){
			$data['records'] = $q;
		}
		
	   $this->load->view('Site_form',$data);
	   
	}
		
	
}
