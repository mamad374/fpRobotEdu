<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class model_log extends CI_Model {

    public function cek_login($tabel,$where){
      return $this->db->get_where($tabel,$where);
    }
    
	}
?>
