<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class model_user extends CI_Model {
      public function GetUser()
    	{
        $this->db->select('*');
        $this->db->from('pengguna');
    		$res = $this->db->get();
    		return $res->result_array();
    	}

       public function InsertData($tabelName,$data){
    		$res = $this->db->insert($tabelName,$data);
    		return $res;
    	}

	}
?>
