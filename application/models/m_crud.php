<?php
    class m_crud extends CI_Model {
        public function select(){
            $query = $this->db->get('survey');
            return $query->result_array(); }

        public function select_where($id){
            $query = $this->db->get_where('survey', array('id' => $id));
            return $query->result_array(); }

        public function delete_where($id){
            $this->db->query("DELETE FROM survey WHERE id=$id"); }

        public function jumlahdata_where($id){
            $query = $this->db->query("SELECT SUM(sesuai)+SUM(mudah)+SUM(cepat)+SUM(wajar)+SUM(sesuai2)+SUM(kompetensi)+SUM(sopan)+SUM(kualitas)+SUM(pengaduan) AS jumlahdata FROM survey WHERE id=$id");
            return $query->result_array(); }

        public function jumlahdata(){
            $query = $this->db->query("SELECT SUM(sesuai)+SUM(mudah)+SUM(cepat)+SUM(wajar)+SUM(sesuai2)+SUM(kompetensi)+SUM(sopan)+SUM(kualitas)+SUM(pengaduan) AS jumlahdata FROM survey");
            return $query->result_array();}
    }