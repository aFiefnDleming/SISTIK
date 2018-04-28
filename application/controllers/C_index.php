<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_index extends CI_Controller {
	public function __construct(){
        parent:: __construct();
  	}

	public function index(){
        if($this->session->userdata('ses_username')){
			$this->load->model('M_crud');
			$this->load->model('M_UI');
			$data	        = $this->M_crud->select();
			$data2	        = $this->db->count_all('survey');
			$nilai	        = $this->M_crud->jumlahdata();
            $nil            = 0;
            $mutu           = "";
            $kinerja        = "";
            $card_color     = "";

            if($data2!=0){
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

             $final_nil = (($nil/4)*100)/100;

            $color = $this->M_UI->percentColor($final_nil);
            $mutu_color = "background:{$card_color} !important";
            $mutu_color2 = $card_color;

            $values = array('data' => $data, 'data2' => $data2, 'nilai' => $nilai, 'view' => 'admin/v_dashboard', 'nil' => $nil, 'final_nil' => $final_nil, 'mutu' => $mutu, 'kinerja' => $kinerja, 'color' => $mutu_color2, 'mutu_color' => $mutu_color);
            $values['page_title'] = "Dashboard";

        $values['isi_kartu'] = $card_color;

            $this->load->view("index",$values);
		} else{
			$this->input_user();
		}
	}

	public function input_user(){
        if($this->session->userdata('ses_username')!== null){
            $values['page_title'] = "Masukkan Data";
            $values["view"] = "v_input";
            $this->load->view("index",$values);
		}else{
            $values["view"] = "v_input";
            $this->load->view("index",$values);
		}
	}

	public function tambah_data(){
		$data = array(
			'umur'					=> $this->input->post('umur'),
			'jenis_kelamin'			=> $this->input->post('jk'),
			'pendidikan_terakhir'	=> $this->input->post('pt'),
			'pekerjaan_utama'		=> $this->input->post('pu'),
			'tanggal' 				=> $this->input->post('tanggal'),
			'jenis_pelayanan'		=> $this->input->post('jenis'),
			'mudah' 				=> $this->input->post('kemudahan'),
			'sesuai' 				=> $this->input->post('kesesuaian'),
			'cepat' 				=> $this->input->post('kecepatan'),
			'wajar' 				=> $this->input->post('kewajaran'),
			'sesuai2' 				=> $this->input->post('kesesuaian2'),
			'kompetensi' 			=> $this->input->post('kompeten'),
			'sopan' 				=> $this->input->post('kesopanan'),
			'kualitas' 				=> $this->input->post('kualitas'),
			'pengaduan' 			=> $this->input->post('pengaduan')
		);

		$this->db->insert('survey', $data);

        $this->session->set_flashdata('success','Data berhasil dimasukkan');
        if($this->session->userdata('ses_username')!== null){
		      redirect(base_url("input_data"));
        } else {
              redirect(base_url());
        }
	}

	public function detail_data($id){
		$this->load->model('M_crud');
		$this->load->model('M_database');

        $pelayanan = "";

        $where = array(array("no_responden","=",$id));

        $result = $this->M_database->read("*","survey",$where,"","",true)[0];

        $sums = ($result->sesuai)+($result->mudah)+($result->cepat)+($result->wajar)+($result->sesuai2)+($result->kompetensi)+($result->sopan)+($result->kualitas)+($result->pengaduan);

        $kriteria = array(
              array("Kesesuaian persyaratan dengan jenis pelayanannya di Kecamatan Cinambo",$result->sesuai),
              array("Kemudahan prosedur pelayanan",$result->mudah),
              array("Kecepatan waktu dalam memberikan pelayanan",$result->cepat),
              array("Kewajaran biaya/tarif dalam pelayanan di Kecamatan Cinambo",$result->wajar),
              array("Kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan",$result->sesuai2),
              array("Kompetensi/kemampuan petugas dalam pelayanan",$result->kompetensi),
              array("Perilaku petugas dalam pelayanan terkait kesopanan dan keramahan pelayanan di Kecamatan Cinambo",$result->sopan),
              array("Kualitas sarana dan prasarana di Kecamatan Cinambo",$result->kualitas),
              array("Penanganan pengaduan layanan",$result->pengaduan)
            );

        $nil = round($sums/count($kriteria),2);

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

        foreach($kriteria as $label) {

            switch($label[1]) {
                case 1: $color = "red"; $deskripsi = "Tidak sesuai"; break;
                case 2: $color = "orange"; $deskripsi = "Kurang sesuai"; break;
                case 3: $color = "lime"; $deskripsi = "Sesuai"; break;
                case 4: $color = "teal"; $deskripsi = "Sangat sesuai"; break;
            }

            $pelayanan .= '	<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>'.$label[0].'</h4>
								</td>
							</tr>
							<tr>
								<td>
									<span class="mdl-chip mdl-chip--contact">
                                        <span class="mdl-chip__contact mdl-color--'.$color.' mdl-color-text--white">'.$label[1].'</span>
                                        <span class="mdl-chip__text">'.$deskripsi.'</span>
                                    </span>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>';
        }

        $mutu_color = "background:{$card_color} !important";

        $values=array("umur"                    =>$result->umur,
                      "jenis_kelamin"           =>$result->jenis_kelamin,
                      "pendidikan_terakhir"     =>$result->pendidikan_terakhir,
                      "pekerjaan_utama"         =>$result->pekerjaan_utama,
                      "mean"                    =>$nil,
                      "mutu"                    =>$mutu,
                      'kinerja'                 =>$kinerja,
                      'mutu_color'              =>$mutu_color,
                      "pelayanan"               =>$pelayanan,
                      'view'                    =>'admin/v_data_detail');

        $values['page_title'] = "Lihat data";

        $this->load->view("index",$values);
	}

	public function delete_data($id){
        if($this->session->userdata('ses_username')!== null){
            $this->load->model('M_crud');
            $this->M_crud->delete_where($id);
        }
		redirect(base_url());
	}

    public function print_data() {
        $values['view'] = 'admin/v_print_data';
        $this->load->view("index",$values);
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
