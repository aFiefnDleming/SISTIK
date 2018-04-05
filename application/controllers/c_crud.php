<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_crud extends CI_Controller {

	public function __construct(){
      parent:: __construct();
  	}

	public function index(){
		if($this->session->userdata('ses_username')){
			$this->load->view('templates/header');
			$this->load->view('admin/v_input');
			$this->load->view('templates/footer');
		}else{
			$url = base_url('index.php/c_login/');
			redirect($url);
		}
	}

	public function tambah_data(){

		$nomor 			= $_POST['nomor'];
		$umur			= $_POST['umur'];
		$jk 			= $_POST['jk'];
		$pt 			= $_POST['pt'];
		$pu 			= $_POST['pu'];
		$tanggal 		= $_POST['tanggal'];
		$jenis 			= $_POST['jenis'];
		$kesesuaian 	= $_POST['kesesuaian'];
		$kemudahan 		= $_POST['kemudahan'];
		$kecepatan	 	= $_POST['kecepatan'];
		$kewajaran 		= $_POST['kewajaran'];
		$kesesuaian2 	= $_POST['kesesuaian2'];
		$kompeten 		= $_POST['kompeten'];
		$kesopanan 		= $_POST['kesopanan'];
		$kualitas 		= $_POST['kualitas'];
		$pengaduan 		= $_POST['pengaduan'];

		$data = array(
			'no_responden' 			=> $nomor,
			'umur'					=> $umur,
			'jenis_kelamin'			=> $jk,
			'pendidikan_terakhir'	=> $pt,
			'pekerjaan_utama'		=> $pu,
			'tanggal' 				=> $tanggal,
			'jenis_pelayanan'		=> $jenis,
			'mudah' 				=> $kemudahan,
			'sesuai' 				=> $kesesuaian,
			'mudah' 				=> $kemudahan,
			'cepat' 				=> $kecepatan,
			'wajar' 				=> $kewajaran,
			'sesuai2' 				=> $kesesuaian2,
			'kompetensi' 			=> $kompeten,
			'sopan' 				=> $kesopanan,
			'kualitas' 				=> $kualitas,
			'pengaduan' 			=> $pengaduan,
		);

		$this->db->insert('survey', $data);
		$url = base_url('index.php/c_crud/');
		redirect($url);
	}

	public function lihat_data(){
		if($this->session->userdata('ses_username')){
			$this->load->model('m_crud');
			$data	= $this->m_crud->select();
			$data2	= $this->db->count_all('survey');
			$nilai	= $this->m_crud->jumlahdata();
			
			$this->load->view('templates/header');
			$this->load->view('admin/v_dashboard',array('data' => $data, 'data2' => $data2, 'nilai' => $nilai));
			$this->load->view('templates/footer');
		}
		else{
			$url = base_url('index.php/c_login/');
			redirect($url);
		}
	}

	public function detail_data(){
		$id = $this->uri->segment(3);
		
		$this->load->model('m_crud');
		$data = $this->m_crud->select_where($id);
		$nilai = $this->m_crud->jumlahdata_where($id);

		$this->load->view('templates/header');
		$this->load->view('admin/v_detail',array('data' => $data, 'nilai' => $nilai));
		$this->load->view('templates/footer');
	}

	public function delete_data(){
		$id = $this->uri->segment(3);
		
		$this->load->model('m_crud');
		$this->crud->delete_where($id);
		$data = $this->crud->select();

		redirect(base_url().'index.php/c_crud/lihat_data');
	}

	public function export_data(){
		$this->load->dbutil();
		$query = $this->db->query("SELECT no_responden,umur,jenis_kelamin,pendidikan_terakhir,pekerjaan_utama,tanggal,jenis_pelayanan,sesuai,mudah,cepat,wajar,sesuai2,kompetensi,sopan,kualitas,pengaduan FROM survey");
		header("Content-type: application/xls");
		header("Content-Disposition: attachment; filename='Data.xls'");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $this->dbutil->csv_from_result($query);
	}
}