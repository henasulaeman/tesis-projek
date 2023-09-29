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

    public function edit($id_mhs){
       
        $query =  $this->db->get_where('tbl_mahasiswa', array('id_mhs' => $id_mhs));
        return $query->row_array();
    }
    public function update($id_mhs,$data){
        // $this->db->where('id_prodi',$id_prodi);
        // $this->db->update('tbl_program_studi',$data);
        $query = $this->db->update('tbl_mahasiswa', $data, array('id_mhs' => $id_mhs));
        return $query;
    }
    public function delete($id_mhs){
        $query= $this->db->delete('tbl_mahasiswa',array('id_mhs'=>$id_mhs));
        return $query;
    }
    
}