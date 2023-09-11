<?php

class Tahun_ajar_model extends CI_Model{

    public function insert($table, $data){

        return $this->db->insert($table, $data);

    }
    public function show($table){
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit($id){
       
        $query =  $this->db->get_where('tbl_thn_ajar', array('id' => $id));
        return $query->row_array();
    }
    public function update($id,$data){
        // $this->db->where('id',$id);
        // $this->db->update('tbl_thn_ajar',$data);
        $query = $this->db->update('tbl_thn_ajar', $data, array('id' => $id));
        return $query;
    }
    public function delete($id){
        $query= $this->db->delete('tbl_thn_ajar',array('id'=>$id));
        return $query;
    }
}