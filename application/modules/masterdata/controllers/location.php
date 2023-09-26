<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends MX_Controller  {
    private $_mainModelName = 'm_location';
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

    private function genSelectHtml($table, $id, $name, $filter = false){
        $data = $this->mainModel->getAll($table, $filter);
        $html = '<option value="ALL">ALL</option>';
        foreach($data as $val){
            $idVal = $val->$id;
            $nameVal = $val->$name;
            $html .= "<option value='$idVal'>$nameVal</option>"; 
        }

        return $html;
    } 

    public function getRegionalSelect(){
        echo $this->genSelectHtml('regional', 'id_regional', 'name');
    }

    public function getSubRegionalSelect(){
        $filter = [
            'id_regional' => @$this->input->post('id')
        ];
        echo $this->genSelectHtml('sub_regional', 'id_sub_regional', 'name', $filter);
    }

}
