<?php

class Matakuliah_model extends CI_Model{

    public function insert($table, $data){

        return $this->db->insert($table, $data);

    }
    public function show($table){
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($id_matkul){
       
        $query =  $this->db->get_where('tbl_matakuliah', array('id_matkul' => $id_matkul));
        return $query->row_array();
    }
    public function update($id_matkul,$data){
        // $this->db->where('id_prodi',$id_prodi);
        // $this->db->update('tbl_program_studi',$data);
        $query = $this->db->update('tbl_matakuliah', $data, array('id_matkul' => $id_matkul));
        return $query;
    }
    public function delete($id_matkul){
        $query= $this->db->delete('tbl_matakuliah',array('id_matkul'=>$id_matkul));
        return $query;
    }
}