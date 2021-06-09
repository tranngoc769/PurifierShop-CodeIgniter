<?php

class Blog_model extends CI_Model {

    // GET TOP PRODUCT
    
    public function create_blog($data)
    {
        $isOk = $this->db->insert('blog', $data);
        if ($isOk){
            return $this->db->insert_id();
        }
        return false;
    }
}
