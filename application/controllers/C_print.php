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

    public function cetak2() {
        $this->load->model("M_database");
        $this->load->library('table');
        $i=0;
        $j=0;
        $f=0;
        $isi_page="";

        $page_limit=37;
        $page_estimated = floor($this->M_database->count_table("survey")/$page_limit)+1;

        for($i=0;$i<$page_estimated;$i++) {
            $this->M_database->_reset();
            $isi_page.= '<section class="sheet padding-10mm">';
            $isi_page.= '<table border="1" cellpadding="2" cellspacing="1" class="table_print">';

            $isi_page.="<thead>";
            $isi_page.="<tr>";
            $isi_page.="<td rowspan='2' class='wide'>No. Respoden</td>";
            $isi_page.="<td colspan='9'>Penilaian</td>";
            $isi_page.="</tr>";
            $isi_page.="<tr>";
            $isi_page.="<td>U1</td>";
            $isi_page.="<td>U2</td>";
            $isi_page.="<td>U3</td>";
            $isi_page.="<td>U4</td>";
            $isi_page.="<td>U5</td>";
            $isi_page.="<td>U6</td>";
            $isi_page.="<td>U7</td>";
            $isi_page.="<td>U8</td>";
            $isi_page.="<td>U9</td>";
            $isi_page.="</tr>";

            $isi_page.="</thead>";
            $isi_page.="<tbody>";

            $limit=array($page_limit,($page_limit*$i));

            $result = $this->M_database->read("*","survey","","","",true,$limit);

            foreach($result as $key) {
                $f++;
                $isi_page.="<tr>";
                $isi_page.="<td>{$key->id}</td>";
                $isi_page.="<td>{$key->sesuai}</td>";
                $isi_page.="<td>{$key->mudah}</td>";
                $isi_page.="<td>{$key->cepat}</td>";
                $isi_page.="<td>{$key->wajar}</td>";
                $isi_page.="<td>{$key->sesuai2}</td>";
                $isi_page.="<td>{$key->kompetensi}</td>";
                $isi_page.="<td>{$key->sopan}</td>";
                $isi_page.="<td>{$key->kualitas}</td>";
                $isi_page.="<td>{$key->pengaduan}</td>";
                $isi_page.="</tr>";
            }

            $isi_page.="</tbody>";
            $isi_page.="</table>";
            $isi_page.= '</section>';
        }

        $values = array("isi_page"=>$isi_page);

        $this->load->view("prints/v_print_blank",$values);
    }
}
