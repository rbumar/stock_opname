<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MX_Controller  {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['content_view'] = 'home/v_home';
		$this->load->view('layout/layout',$data);
		$this->load->view('v_home');
	}

}
