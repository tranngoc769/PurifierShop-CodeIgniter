<?php

class Product_model extends CI_Model {

    // 
    public function create_product($data)
    {
        return $this->db->insert('product', $data);
    }

    public function update_product($id,$data)
    {
		return $this->db->where("id", $id)->update('product', $data);
    }
    public function get_all_product()
    {
        $data =  $this->db
        ->join("product pd", "pd.cid = ct.id")
        ->get("category ct");
        return $data->result();
    }
    public function get_product_id($id)
    {
        $data =  $this->db->limit(1)->get("product",array("id" => $id));
        return $data->result();
    }
    public function delete_product($cid){
        return $this->db->where("id", $cid)->delete("product");
    }
}
