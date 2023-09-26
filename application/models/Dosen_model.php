<?php

class Dosen_model extends CI_Model{

    public function insert($table, $data){

        return $this->db->insert($table, $data);

    }
    public function show($table){
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }
     public function edit($id_dosen){
       
        $query =  $this->db->get_where('tbl_dosen', array('id_dosen' => $id_dosen));
        return $query->row_array();
    }
    public function update($id_dosen,$data){
        // $this->db->where('id_prodi',$id_prodi);
        // $this->db->update('tbl_program_studi',$data);
        $query = $this->db->update('tbl_dosen', $data, array('id_dosen' => $id_dosen));
        return $query;
    }
    public function delete($id_dosen){
        $query= $this->db->delete('tbl_dosen',array('id_dosen'=>$id_dosen));
        return $query;
    }
}