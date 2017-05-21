<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackLayar extends CI_Controller {
	public function __construct() 
	{
	    parent::__construct();
	    $this->load->helper('url');
        $this->load->library('form_validation');

    	if($this->session->userdata('status') != "login"){
    		redirect(base_url("index.php/Login_con"));
    	}
    	
	}

	public function index()
	{
		$ktg = $this->Model_1->getKategori();
		$this->load->view('backend/dashboard', array('ktg' => $ktg));
			
	}

	public function kategori(){
        $ktg = $this->Model_1->getKategori();
		$this->load->view('backend/kategori',array('ktg' => $ktg));
	}

	public function addKategori(){
	    $nama_kategori = $_POST['nama_kategori'];
	    $data_insert = array(
	        'nama_kategori' => $nama_kategori
        );
        $res = $this->Model_1->InsertData('kategori',$data_insert);
        if($res>=1){
            redirect('BackLayar/kategori');
        }else{
            echo "<h2>Insert data gagal</h2>";
        }
    }

    public function deleteKtg($Id_kategori){
        $where = array('Id_kategori' => $Id_kategori);
        $res = $this->Model_1->DeleteData('kategori', $where);
        if($res>=1){
            redirect('BackLayar/kategori');
        }
    }
	public function usrList()
	{
		$usr = $this->Model_user->GetUser();
		$this->load->view('backend/user', array('usr' => $usr));
		//var_dump($data);
	}

	
	public function addUser()
	{
		$Username = $_POST['Username'];
		$Email = $_POST['Email'];
		$Firstname = $_POST['Firstname'];
		$Lastname = $_POST['Lastname'];
		$Address = $_POST['Address'];
		$Password = $_POST['Password'];
		$Repass = $_POST['Repass'];		
		$About = $_POST['About'];


		$config['upload_path']          = './upload/profil';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1200;
		$config['max_height']           = 700;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('img')){

		}else{
			$data_insert = array (
				'Username' => $Username,				
				'Email' => $Email,
				'Firstname' => $Firstname,
				'Lastname' => $Lastname,
				'Address' => $Address,
				'Password' => md5($Password),				
				'About' => $About,				
				'img' => $this->upload->data('file_name')
			);
			$res = $this->Model_user->InsertData('pengguna',$data_insert);
			if($res>=1){
				redirect('BackLayar/usrList');
			}else{
				echo "<h2>Insert data gagal</h2>";
			}

		}
	}


	public function doPost()
	{
		$Judul = $_POST['Judul'];
		$Kategori = $_POST['Kategori'];
		$Artikel = $_POST['Artikel'];

		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1200;
		$config['max_height']           = 700;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('image')){

		}else{
			$data_insert = array (
				'Judul' => $Judul,				
				'isi' => $Artikel,
				'image' => $this->upload->data('file_name')
			);
			$res = $this->Model_1->InsertData('artikel',$data_insert);
			if($res>=1){
				redirect('BackLayar/post');
			}else{
				echo "<h2>Insert data gagal</h2>";
			}

		}
	}
	public function post()
	{
		$data = $this->Model_1->GetArtikel();
		$this->load->view('backend/post', array('data' => $data));
	}

	public function doDelete($Id_artikel)
	{
		$where = array('Id_artikel' => $Id_artikel);
		$res = $this->Model_1->DeleteData('artikel', $where);
		if($res>=1){
			redirect('BackLayar/post');
		}
	}

	public function doUpdate()
	{
		$Id_artikel = $_POST['Id_artikel'];
		$Judul = $_POST['Judul'];		
		$Artikel = $_POST['Artikel'];

		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1200;
		$config['max_height']           = 700;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$where = array('Id_artikel' => $Id_artikel);

		if ( ! $this->upload->do_upload('image')){

		}else{
			$data_update = array (
				'Judul' => $Judul,				
				'isi' => $Artikel,
				'image' => $this->upload->data('file_name')
			);
			$res = $this->Model_1->UpdateData('artikel',$data_update,$where);
			if($res>=1){
				redirect('BackLayar/post');
			}else{
				echo "<h2>Insert data gagal</h2>";
			}
		}
	}

	public function editData($Id_artikel)
	{
		$art = $this->Model_1->GetArtikel(" where Id_artikel = '$Id_artikel' ");
		$data = array(	
			"Id_artikel" =>$art[0]['Id_artikel'],			
			"Judul" =>$art[0]['Judul'],	
			"Isi" =>$art[0]['Isi']			
		);
		$this->load->view('backend/update',$data);

	}
	public function addusr(){
		$this->load->view('backend/formAddUser');
	}

	public function validateForm(){
		$this->form_validation->set_rules('Username','Username','required');
        $this->form_validation->set_rules('Email','Email','required|valid_email');
		$this->form_validation->set_rules('Password','Password','required|min_length[5]');
		$this->form_validation->set_rules('Firstname','Firstname','required');
		$this->form_validation->set_rules('Lastname','Lastname','required');
		$this->form_validation->set_rules('Repass','Konfirmasi Password','required|matches[Password]');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
			$this->addUser();
		}else{
			$this->load->view('backend/formAddUser');
		}


	}
}
