<?php

class Category_model extends CI_Model {

    // 
    public function create_category($data)
    {
        return $this->db->insert('category', $data);
    }

    public function update_category($id,$data)
    {
		return $this->db->where("id", $id)->update('category', $data);
    }
    public function get_all_category()
    {
        $data =  $this->db->get("category");
        return $data->result();
    }
    public function get_category_id($id)
    {
        $data =  $this->db->limit(1)->get("category",array("id" => $id));
        return $data->result();
    }
    public function checkUseCategory($id){
        $data = $this->db->limit(1)->get_where('product', array("cid" => $id))->result();
        if (count($data)> 0 ){
            return true;
        };
        return false;
    }
    public function delete_category($cid){
        return $this->db->where("id", $cid)->delete("category");
    }
}
