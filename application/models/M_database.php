<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_database extends CI_Model {

	function create($table, $data) {
		/*
            Bentuk Umum: $this->M_database->create("nama_tabel", $data);

            $data dalam bentuk associative array, misalkan:
                array("kolom_1"=>$isi_1,
                      "kolom_2"=>$isi_2)
        */

		$this->db->insert($table,$data);
	}

	function read($select, $table, $where="", $order="", $join="", $run=false) {

        /*
            parameter $select harus dalam array jika lebih dari 1 kolom.
            parameter tabel harus 1.

            parameter where bisa berbentuk "a=1" atau array asosiatif, misalkan: ...where1
            NOTE: kolom pertama tidak usah menggunakan "and"/"or". Kedua keyword tersebut
                  untuk kolom kedua dan seterusnya.

                array(array("kolom1","=","cari_1")),
                      array("and",array("jualan","<","cari_2")),
                      array("or",array("harga",">","cari_3")));

            atau jika where hanya 1, bisa berbentuk: ...where2
                array(array("kolom1","=","cari_1"));

            parameter $join berbentuk array, misalkan:
                array("table1"=>array("left","key1_1","key1_2"),
                      "table2"=>array("left","key2_1","key2_2"));

        */

        $this->db->distinct();
        $this->db->select($select);
        $i=0;

		if (!empty($where)) {
            //jika array berbetuk where1
            foreach($where as $params) {
                if($i==0) $this->db->where(array("{$params[0]} {$params[1]}"=>$params[2]));
                else {
                    if($params[0]=="and")       $this->db->where(array("{$params[1][0]} {$params[1][1]}"=>$params[1][2]));
                    elseif($params[0]=="or")    $this->db->or_where(array("{$params[1][0]} {$params[1][1]}"=>$params[1][2]));
                }
                $i++;
            }
        }

		if (!empty($order)) $this->db->order_by($order,'desc');


        if(!empty($join)) {
            foreach($join as $table=>$key) {
                $this->db->join($table,"{$key[2]} = {$key[1]}",$key[0]);
            }
        }

        if($run==true) {
            $query = $this->db->get($table);
            if ($query AND $query->num_rows() != 0) {
                return $query->result();
            } else {
                return array();
            }
        } else {
            return $this->db->get_compiled_select($table);
        }
	}

	function update($table, $where, $data) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete($table, $where) {
		$this->db->where($where);
		$this->db->delete($table);
	}
}
