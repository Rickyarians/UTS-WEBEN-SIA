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


        public function update($table, $datauser, $where)
        {
            $update = $this->db->update($table, $datauser, $where);

            return $update;
        }

        public function delete($table, $where)
        {
            $delete = $this->db->delete($table, $where);
            return $delete;
        }

}