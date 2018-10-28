<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_Model extends CI_Model{

    var $db;
    var $table = "mahasiswa";

    public function buat_kode()   {
        $this->db->select('RIGHT(mahasiswa.Nim,1) as kode', FALSE);
        $this->db->order_by('Nim','DESC');
        $this->db->limit(1);
        $query = $this->db->get('mahasiswa');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        }
        else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "MHS-9921-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;
    }



        public function getMahasiswa($table)
        {
        $hasil = $this->db->get($table);

        return $hasil->result_array();
        }

        public function getDetail($id){
            $query = $this->db->select('*')->from('mahasiswa')->where('Nim',$id)->get();
            return $query->result();

        }



        public function insert($table, $data)
        {
        $insert = $this->db->insert($table, $data);

            return $insert;
        }


        public function update($table, $data, $where)
        {
            $update = $this->db->update($table, $data, $where);

            return $update;
        }

        public function delete($table, $where)
        {
            $delete = $this->db->delete($table, $where);
            return $delete;
        }

}