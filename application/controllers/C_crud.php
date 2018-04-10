<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crud extends CI_Controller {

	public function __construct(){
      parent:: __construct();
  	}

	public function index(){
		if($this->session->userdata('ses_username')!== null){
            $values['page_title'] = "Masukkan Data";
            $values["view"] = "v_input";
            $this->load->view("index",$values);
		}else{
            redirect(base_url()."C_login");
		}
	}

	public function input_user(){
		if(null!==($this->session->userdata('ses_username'))){
			$url = base_url();
			redirect($url);
		}else{
			 $values['view'] = "v_input";
            $this->load->view('index',$values);
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
		$url = base_url('C_crud/input_user');
		redirect($url);
	}

	public function lihat_data(){
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

             $final_nil = ($nil/4)*100;

            $color = $this->M_UI->percentColor($final_nil);
            $mutu_color = "background:{$card_color} !important";
            $mutu_color2 = $card_color;

            $values = array('data' => $data, 'data2' => $data2, 'nilai' => $nilai, 'view' => 'admin/v_dashboard', 'nil' => $nil, 'final_nil' => $final_nil, 'mutu' => $mutu, 'kinerja' => $kinerja, 'color' => $mutu_color2, 'mutu_color' => $mutu_color);
            $values['page_title'] = "Dashboard";

            $this->load->view("index",$values);
		} else{
			$url = base_url('input_user');
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

		$this->load->model('M_crud');
		$this->M_crud->delete_where($id);
		$data = $this->M_crud->select();

		redirect(base_url().'lihat_data');
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

    public function bikin_acak() {
        $jk=array("Laki-laki","Perempuan");
        $pendidikan=array("SD Kebawah","SLTA Sederajat","SLTP Sederajat","S1","Diploma","S2 Keatas");
        $pekerjaan=array("PNS/TNI/POLRI","Wiraswasta/Usahawan","Pegawai Swasta","Pelajar/Mahasiswa","Lainnya");
        $pelayanan=array("KTP","KK","Pindah datang","Jamsostek");
        $i=0;
        $j=0;
        $n=150;
        $n_kriteria = 9;
        $r="";
        $merge = array(
                    array($pendidikan[0],$pekerjaan[4]), // SD, Lainnya      -> 0
                    array($pendidikan[1],$pekerjaan[4]), // sma, Lainnya     -> 1
                    array($pendidikan[2],$pekerjaan[4]), // smp, Lainnya     -> 2
                    array($pendidikan[3],$pekerjaan[4]), // S1, Lainnya      -> 3
                    array($pendidikan[4],$pekerjaan[4]), // D2, Lainnya      -> 4
                    array($pendidikan[5],$pekerjaan[4]), // S2, Lainnya      -> 5
                    array($pendidikan[3],$pekerjaan[3]), // S1, mhs          -> 6
                    array($pendidikan[3],$pekerjaan[0]), // S1, PNS          -> 7
                    array($pendidikan[5],$pekerjaan[0]), // d3, PNS          -> 8
                    array($pendidikan[5],$pekerjaan[2]), // s2, Pegawai      -> 9
                    array($pendidikan[4],$pekerjaan[3]), // d3, mahasiswa    -> 10
                    array($pendidikan[1],$pekerjaan[2]), // SMA, Pegawai     -> 11
                    array($pendidikan[1],$pekerjaan[1]), // SMA, usahawan    -> 12
                    array($pendidikan[2],$pekerjaan[1]),  // smp, usahawan     -> 13
                    array($pendidikan[4],$pekerjaan[1]),  // S1, usahawan     -> 14
                    array($pendidikan[5],$pekerjaan[1]),  // smp, usahawan     -> 15
                    array($pendidikan[1],$pekerjaan[3]), // sma, siswa     -> 16
                    array($pendidikan[3],$pekerjaan[2]) // s1, Pegawai      -> 17
                );

        $range_umur = array(
                    "17" => array($merge[1],$merge[2],$merge[6],$merge[16]),
                    "18" => array($merge[1],$merge[6],$merge[10],$merge[16]),
                    "19" => array($merge[1],$merge[6],$merge[10],$merge[16],$merge[11]),
                    "20" => array($merge[1],$merge[6],$merge[10],$merge[16]),
                    "21" => array($merge[1],$merge[6],$merge[10],$merge[16]),
                    "22" => array($merge[1],$merge[6],$merge[10],$merge[3],$merge[4],$merge[14],$merge[11]),
                    "23" => array($merge[1],$merge[2],$merge[6],$merge[3]),
                    "24" => array($merge[1],$merge[2],$merge[6],$merge[3]),
                    "25" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[9]),
                    "26" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[9]),
                    "27" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "28" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "29" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "30" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "31" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "32" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "33" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[17]),
                    "34" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[17]),
                    "35" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[17]),
                    "36" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "37" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "38" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[4],$merge[8],$merge[17],$merge[14]),
                    "39" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[14]),
                    "40" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[15]),
                    "41" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[15]),
                    "42" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[15]),
                    "43" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[15]),
                    "44" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[15]),
                    "45" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[14]),
                    "46" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[14]),
                    "47" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[14]),
                    "48" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[14]),
                    "49" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[14]),
                    "50" => array($merge[1],$merge[2],$merge[12],$merge[3],$merge[7],$merge[8],$merge[17],$merge[14])
                );

        $r.="INSERT INTO `survey` ( `no_responden`, `umur`, `jenis_kelamin`, `pendidikan_terakhir`, `pekerjaan_utama`, `tanggal`, `jenis_pelayanan`, `sesuai`, `mudah`, `cepat`, `wajar`, `sesuai2`, `kompetensi`, `sopan`, `kualitas`, `pengaduan`) VALUES";

        for($i=0;$i<$n;$i++) {
            $umur = rand(17,50);
            $nor = rand(1,4000);
            $r_jk = array_rand($jk);
            $r_pair = array_rand($pelayanan);

            $gawean_pair = array_rand($range_umur[$umur]);

            $tgl = rand(1,29);

            $r.="(NULL, '{$umur}', '{$jk[$r_jk]}', '{$range_umur[$umur][$gawean_pair][0]}', '{$range_umur[$umur][$gawean_pair][1]}', '2018-03-{$tgl}', '{$pelayanan[$r_pair]}',";

            for($j=0;$j<$n_kriteria;$j++) {
                $angka = $i%10==0?4:($j%5==0?rand(2,4):($j%7==0?rand(1,4):rand(3,4)));
                $r.="'{$angka}'".($j<$n_kriteria-1?",":"");
            }

            $r.="),<br>";
        }

        echo $r;
    }

    public function test() {
        $this->load->model("M_database");

        $where = array(array("kolom1","=","cari_1"));

        $where2 =array(array("kolom1","=","cari_1"),
                      array("and",array("jualan","<","cari_2")),
                      array("or",array("harga",">","cari_3"))
                        );

        $join = array("table1"=>array("left","key1_1","key1_2"),
                      "table2"=>array("left","key2_1","key2_2"));

        echo $this->M_database->read("*","survey",$where2,"",$join);
    }

}
