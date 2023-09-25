<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regional extends MX_Controller  {
    private $_mainModelName = 'm_regional';
	public function __construct(){
		parent::__construct();
        $this->load->model($this->_mainModelName, 'mainModel');
	}

	public function index()
	{
        $data = [
            'content_view' => 'reports/v_reportStockOpname',
            'js' => 'reports/reportStockOPname.js'
        ];
        $this->load->view('layout/layout', $data);
	}

    public function getRegionalSelect(){
        $data = $this->mainModel->getAll();
        $html = '<option value="ALL">ALL</option>';
        foreach($data as $val){
            $html .= "<option value='$val->id_regional'>$val->name</option>"; 
        }

        echo $html;
    }

}
