<?php

class User_model extends CI_Model {

    public function update_userdetail($userid, $data)
    {
        return $this->db->where("user_id", $userid)->update(USER, $data);
    }
    public function update_cash($userid, $data)
    {
        return $this->db->where("user_id", $userid)->update(USER, $data);
    }

    public function get_userdetail()
    {
        return $this->db->get_where(USER, array("user_id" => $this->session->userdata('userid')));
    }
}
