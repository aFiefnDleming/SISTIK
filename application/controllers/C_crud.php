<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_crud extends CI_Controller {

	public function __construct(){
      parent:: __construct();
  	}

	public function index(){
		if($this->session->userdata('ses_username')!== null){
			$this->load->view('templates/header');
			$this->load->view('templates/input_atas');
			$this->load->view('v_input');
			$this->load->view('templates/input_bawah');
			$this->load->view('templates/footer');
		}else{
            redirect(base_url()."c_login");
		}
	}

	public function input_user(){
		if(null!==($this->session->userdata('ses_username'))){
			$url = base_url('index.php/c_crud');
			redirect($url);
		}else{
			$this->load->view('templates/header_user');
			$this->load->view('v_input');
			$this->load->view('templates/footer_user');
		}
	}

	public function tambah_data(){
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
		$url = base_url('index.php/c_crud/input_user');
		redirect($url);
	}

	public function lihat_data(){
		if($this->session->userdata('ses_username')){
			$this->load->model('m_crud');
			$this->load->model('M_UI');
			$data	= $this->m_crud->select();
			$data2	= $this->db->count_all('survey');
			$nilai	= $this->m_crud->jumlahdata();
            $nil    = 0;

            if($data2 != 0){
                foreach($nilai as $nilais){
                    $nil=round($nilais['jumlahdata']/(9*$data2),2);
                }

                if($nil > 1.00 && $nil <= 2.5996){
                    $mutu = "D";
                    $kinerja = "Tidak Baik";
                    $card_color = "#E65100";
                }
                else if($nil > 2.6 && $nil <= 3.064){
                    $mutu = "C";
                    $kinerja = "Kurang Baik";
                    $card_color = "#FF9800";
                }
                else if($nil > 3.0644 && $nil <= 3.532){
                    $mutu = "B";
                    $kinerja = "Baik";
                    $card_color = "#4CAF50";
                }
                else if($nil > 3.5324 && $nil <= 4.00){
                    $mutu = "A";
                    $kinerja = "Sangat Baik";
                    $card_color = "#2E7D32";
                }
            }

            $final_nil = ($nil/4)*100;

            $color = $this->M_UI->percentColor($final_nil);
            $mutu_color = "background:{$card_color} !important";

            $values = array('data' => $data, 'data2' => $data2, 'nilai' => $nilai, 'view' => 'admin/v_dashboard', 'nil' => $nil, 'final_nil' => $final_nil, 'mutu' => $mutu, 'kinerja' => $kinerja, 'color' => $color, 'mutu_color' => $mutu_color);

            $this->load->view('admin/v_index',$values);
		} else{
			$this->load->view('templates/header_user');
			$this->load->view('v_input');
			$this->load->view('templates/footer_user');
		}
	}

	public function detail_data(){
		$id = $this->uri->segment(3);

		$this->load->model('m_crud');
		$data = $this->m_crud->select_where($id);
		$nilai = $this->m_crud->jumlahdata_where($id);

        $values = array('data' => $data, 'nilai' => $nilai, 'view' => 'admin/v_detail');
        $this->load->view('admin/v_index',$values);
	}

	public function delete_data(){
		$id = $this->uri->segment(3);

		$this->load->model('m_crud');
		$this->m_crud->delete_where($id);
		$data = $this->m_crud->select();

		redirect(base_url().'index.php/c_crud/lihat_data');
	}

	public function export_data(){
		$this->load->dbutil();
		$query = $this->db->query("SELECT no_responden,umur,jenis_kelamin,pendidikan_terakhir,pekerjaan_utama,tanggal,jenis_pelayanan,sesuai,mudah,cepat,wajar,sesuai2,kompetensi,sopan,kualitas,pengaduan FROM survey");
		header("Content-type: application/csv");
		header("Content-Disposition: attachment; filename='Data.csv'");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $this->dbutil->csv_from_result($query);
	}
}
