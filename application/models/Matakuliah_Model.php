<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah_Model extends CI_Model{


        public function getMatakuliah($table)
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
        $this->db->from('matakuliah');
        $query = $this->db->get();
        return $query->num_rows();
    }

}