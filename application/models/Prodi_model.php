<?php

class Prodi_model extends CI_Model{

    public function insert($table, $data){

        return $this->db->insert($table, $data);

    }
    public function show($table){
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($id_prodi){
       
        $query =  $this->db->get_where('tbl_program_studi', array('id_prodi' => $id_prodi));
        return $query->row_array();
    }
    public function update($id_prodi,$data){
        // $this->db->where('id_prodi',$id_prodi);
        // $this->db->update('tbl_program_studi',$data);
        $query = $this->db->update('tbl_program_studi', $data, array('id_prodi' => $id_prodi));
        return $query;
    }
    public function delete($id_prodi){
        $query= $this->db->delete('tbl_program_studi',array('id_prodi'=>$id_prodi));
        return $query;
    }
}