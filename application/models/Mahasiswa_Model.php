<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_Model extends CI_Model{






        public function getMahasiswa($table)
        {
        $hasil = $this->db->get($table);

        return $hasil->result_array();
        }

        public function GetWhere($table, $data){
        $hasil =$this->db->get_where($table, $data);
        return $hasil ->result_array();
        }



        public function insert($table, $data)
        {
        $insert = $this->db->insert($table, $data);

            return $insert;
        }

        public function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
        }



        public function delete($table, $where)
        {
            $delete = $this->db->delete($table, $where);
            return $delete;
        }

        public function cek_id($field, $data){
            $this->db->where($field, $data);
            $this->db->from('mahasiswa');
            $query = $this->db->get();
            return $query->num_rows();
        }


        public function getAllMK()
        {
            /*
            $query = $this->db->get('location');

            foreach ($query->result() as $row)
            {
                echo $row->description;
            }*/

            $query = $this->db->query('SELECT Kode_MK,Nama_MK FROM matakuliah');


            return $query->result();

            //echo 'Total Results: ' . $query->num_rows();
        }

    public function getAlldosen()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT Nip,Nama_Dosen FROM dosen');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }


    public function getJadwal($id){
        $this->db->where('NIM', $id);
        $hasiljadwal = $this->db->get('jadwal');

        return $hasiljadwal->result();
    }
}