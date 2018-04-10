<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_print extends CI_Controller {
    public function index() {
        $this->load->model("M_database");
        $this->load->library('table');
        $i=0;
        $j=0;
        $isi_page="";

        $page_limit=28;
        $page_estimated = floor($this->M_database->count_table("survey")/23);

        for($i=0;$i<$page_estimated;$i++) {
            $this->M_database->_reset();
            $isi_page.= '<section class="sheet padding-10mm">';
            if($i==0) $isi_page.="<center>".heading('Hasil Cetak', 1)."</center>";

            $template = array('table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">');

            $this->table->set_template($template);

            /*
            0-23;
            23-50;
            50-75;

            */

            //($result->sesuai)+($result->mudah)+($result->cepat)+($result->wajar)+($result->sesuai2)+($result->kompetensi)+($result->sopan)+($result->kualitas)+($result->pengaduan)

            $this->table->set_heading('No.', 'No. Responden', 'Umur','Pendidikan Terakhir','Pekerjaan','Tanggal Isi','Jenis Pelayanan','1','2','3','4','5','6','7','8','9');

            $limit_s = $page_limit;

                $limit=array($page_limit,($page_limit*$i));


            $result = $this->M_database->read("*","survey","","","",true,$limit);

            foreach($result as $key) {
                $this->table->add_row($key->id,$key->no_responden,$key->umur,$key->pendidikan_terakhir,$key->pekerjaan_utama,$key->tanggal,$key->jenis_pelayanan,
                $key->sesuai,
                $key->mudah,
                $key->cepat,
                $key->wajar,
                $key->sesuai2,
                $key->kompetensi,
                $key->sopan,
                $key->kualitas,
                $key->pengaduan
                );
            }

            $isi_page .= $this->table->generate();

            $isi_page.= '</section>';
        }

        $values = array("isi_page"=>$isi_page);

        $this->load->view("prints/v_print_blank",$values);
    }
}
