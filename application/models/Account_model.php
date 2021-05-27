<?php

class Account_model extends CI_Model {

    
    public function login($data) {
        $query = $this->db
            ->limit(1)
            ->get_where(USER, array("username" => $data["username"]))
            ->row();
        $vv = password_verify( $data['password'], $query->password );
        if ($vv) {
            $data = array ("username" => $query->username, "usertype" => $query->user_type, "userid" => $query->user_id);
            $this->session->set_userdata($data);
            return  $query->user_type;
        }  else { 
            return false; 
        }	
    }
    public function customer_info($data)
    {
        return $this->db->insert("customer", $data);
    }
    
    public function xoaemail($data)
    {
        return $this->db->where("phone", $data)->delete("customer");
    }
    
    public function get_all_email()
    {
        return $this->db->get("customer")->result();
    }
    public function count_all_email()
    {
        return count($this->db->get("customer")->result());
    }
    public function get_all_email_paging($page, $limit)
    {
        if ($page < 0) {$page = 0;}
        return $this->db->limit($limit)->offset($page)->get("customer")->result();
    }
    public function register($data)
    {
        return $this->db->insert(USER, $data);
    }

}
