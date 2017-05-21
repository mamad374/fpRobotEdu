<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Login_con extends CI_Controller {
      public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->library('javascript/jquery');
        $this->load->model('Model_log');
      }

      function index(){
        $this->load->view('backend/login');
      }

      public function doLogin(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $where = array(
          'username' => $username,
          'password' => md5($password)
        );

      $cek = $this ->Model_log->cek_login("pengguna",$where)->num_rows();
      if ($cek > 0) {
        $data_session = array(
          'username' => $username,
          'status' => "login"
        );
        $this->session->set_userdata($data_session);
        redirect(base_url("index.php/BackLayar"));
      }else{
          
          echo '<script>';
          echo 'alert("Login Gagal");';          
          echo "</script>";
          $this->index();
      } 
    }

    public function logout(){
      $this->session->sess_destroy();
      redirect(base_url("index.php/Login_con"));
    }      
	}
?>