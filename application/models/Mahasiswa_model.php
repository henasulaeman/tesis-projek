<?php

class Mahasiswa_model extends CI_Model{

    public function insert($table, $data){

        return $this->db->insert($table, $data);

    }
     public function show($table){
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }
    
}