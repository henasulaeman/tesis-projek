<?php

class Auth_model extends CI_Model{
    private $_table ="tbl-user";
    const SESSION_KEY = 'userid';

   public function rules(){
    return [
            [
                'field'=>'username',
                'label'=>'Username Or Email',
                'rules'=>'required'
            ],
            [
                'field'=>'password',
                'label'=>'Password',
                'rules'=>'required|max_length[255]'
            ]
        ];
        
    }

    public function login($username, $password){
        $this->db->where('email',$username)->or_where('username',$username);
        $query = $this->db->get($this->_table);
        $user = $query->row();


        // Cek apakah user sudah terdaftar ?
        if(!$user){
             return FALSE;
            // echo "Usernmae tidak ada di sistem";
        }

        // Cek apakah passwordnya benar ?
        if($password!=$user->password){
            return FALSE;
        }
       


        // Create Session
        $this->session->set_userdata([self::SESSION_KEY=>$user->iduser]);
        $this->_update_last_login($user->iduser);
        
        return $this->session->has_userdata(self::SESSION_KEY);
        
    }

    public function current_user(){
        if (!$this->session->has_userdata(self::SESSION_KEY)){
            return null;
        }
        
        $userid = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where($this->_table, ['iduser'=>$userid]);
        return $query->row_array();
    }

    public function logout(){
        $this->session->unset_userdata(self::SESSION_KEY);
        return !$this->session->has_userdata(self::SESSION_KEY);
    }

    private function _update_last_login($iduser){
        $data = [
            'last_login'=>date("Y-m-d H:i:s"),
        ];
        return $this->db->update($this->_table, $data, ['iduser'=>$iduser]);
    }
}