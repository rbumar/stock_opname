<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_location extends CI_Model{

	private $_table = 'regional';
	public $_id = 'id_regional';

	public function __construct(){
		parent::__construct();
	}

	// get all data 
	public function getAll($table, $filter = false){
		if($table === null){
			$table = $this->_table;
		}
		if($filter){
			foreach($filter as $key => $val){
				if($val !== 'ALL')
					$this->db->where($key, $val);
			}
		}
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get($id){
		$this->db->where($this->_id, $id);
		$query = $this->db->get($this->_table);
		return $query->row();
	}

	// add function 
	public function addOrEdit($data){
		if($data[$this->_id] !== ''){
			
			$this->db->where($this->_id,$data[$this->_id]);
			return $this->db->update($this->_table, $data);
		}else{
			$sql = "SELECT f_gen_id(?, ?) as id";
			$query = $this->db->query($sql, array($this->_placeholderId, $this->_sequence));
			$row = $query->row();
			if($row->id){
				$data[$this->_id] = $row->id;
				return  $this->db->insert($this->_table, $data);
			}else{
				return $row->id;
			}
		}
		
	}

	public function delete($id){
		$this->db->where($this->_id, $id);
		return $this->db->delete($this->_table);
	}

}

?>