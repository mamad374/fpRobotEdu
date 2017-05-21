<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_artikel extends CI_Model {
    public function getArtikel(){
        $this->db->select('*');
        $this->db->from('artikel');
        $res = $this->db->get();
        return $res->result_array();
    }
}

?>