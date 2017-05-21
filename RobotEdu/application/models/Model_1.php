<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class model_1 extends CI_Model {
      public function GetArtikel($where="")
    	{
    		$data = $this->db->query('SELECT * FROM artikel'.$where );
    		return $data->result_array();
    	}
      public function InsertData($tabelName,$data){
    		$res = $this->db->insert($tabelName,$data);
    		return $res;
    	}

      public function DeleteData($tabelName,$where){
      $res  = $this->db->delete($tabelName,$where);
      return $res;
    }

    public function UpdateData($tabelName,$data,$where){      
      $res = $this->db->update($tabelName,$data,$where);
      return $res;
    } 

    public function getKategori(){
      $this ->db->select('*');
      $this->db->from('kategori');
      $res = $this->db->get();
      return $res ->result_array();
    }   
	}
?>
