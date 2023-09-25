<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportStockOpname extends MX_Controller  {
    
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
        $data = [
            'content_view' => 'reports/v_reportStockOpname',
            'js' => 'reports/reportStockOPname.js'
        ];
        $this->load->view('layout/layout', $data);
	}

}
