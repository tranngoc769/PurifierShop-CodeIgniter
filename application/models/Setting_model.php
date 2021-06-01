<?php

class Setting_model extends CI_Model {
    public function get_all_keywords()
    {
        return $this->db->get("keywords")->result();
    }
    public function get_all_default_images()
    {
        return $this->db->get("default_images")->result();
    }
    
}
