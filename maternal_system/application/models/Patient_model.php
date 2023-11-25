<?php

class Patient_model extends CI_Model {

    public function getuserlogin($email,$password)
    {

           $q = "select usr.*, rl.code as rlcode, rl.description as rldesc "
                   . "from users as usr "
                   . "left join role as rl on (rl.id = usr.role_id) "
                   . "where usr.password='".($password)."' and  usr.email='".$email."' and usr.role_id = 2";
           //print $q;exit;
           $query = $this->db->query($q);
           return $query->result();
           
    }
}

?>