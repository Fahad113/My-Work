<?php
class Login_model extends CI_Model
{

    public function isAdmin($logindata)
    {
        
        
        $this->db->select('*')->from("admin")->where('username',$logindata['email'])->where('password',$logindata['pass']);
         
        $q = $this->db->get();
        if( $q->num_rows() > 0 ) {
            $result = $q->result();
            return $result[0];
        } else {
            return false;	
        }
    }
}