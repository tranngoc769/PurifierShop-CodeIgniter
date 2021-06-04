<?php

class Product_model extends CI_Model {

    // GET TOP PRODUCT
    public function get_top_product(){
        $data =  $this->db->select("tp.p_id, p.name, p.price, i.path, ct.name as category")
        ->join("product p", "p.id = tp.p_id")
        ->join("images i", "i.p_id = p.id")
        ->join("category ct", "ct.id = tp.c_id")
        ->get("top_product tp");
        return $data->result();
    } 
    public function get_cate_product($c_id, $page = 1, $limit = 9, $orderby){
    
        if ($c_id == "0" || $c_id == 0){
            $data =  $this->db->select("p.c_id,p.id, p.name, c.name as c_name, p.detail, p.description, p.price, i.path")
            ->join("category c", "c.id = p.c_id")
            ->join("images i", "p.id = i.p_id")
            ->limit($limit,($page-1)*$limit)
            ->order_by("p.price", $orderby)
            ->get("product p");
            return $data->result();
        }
        $data =  $this->db->select("p.c_id,p.id, p.name, c.name as c_name, p.detail, p.description, p.price, i.path")
        ->join("category c", "c.id = p.c_id")
        ->join("images i", "p.id = i.p_id")
        ->limit($limit,($page-1)*$limit)
        ->where("c.id = ".$c_id)
        ->order_by("p.price", $orderby)
        ->get("product p");
        return $data->result();
    }
    public function count_category_products($c_id){
        if ($c_id == "0" || $c_id == 0){
            $data =  $this->db->select("COUNT(id) as total")
            ->get("product p");
            return intval($data->result()[0]->total);
        }
        // SELECT COUNT(id) as total from product WHERE c_id = 2
       else{
        $data =  $this->db->select("COUNT(id) as total")
        ->where("p.c_id = ".$c_id)
        ->get("product p");
        return intval($data->result()[0]->total);
       }
    }
    
    public function get_product_images($p_id){
        // SELECT COUNT(id) as total from product WHERE c_id = 2
        $data =  $this->db
        ->where("p_id = $p_id")
        ->get("images");
        return $data->result();
    }
    
    public function check_product_exist($p_id){
        // SELECT COUNT(id) as total from product WHERE c_id = 2
        $data =  $this->db
        ->where("id = $p_id")
        ->get("product");
        if (count($data->result()) > 0){
            return true;
        }
        return false;
    }
    
    public function get_product_id($id)
    {
        $data =  $this->db->select("p.id, p.price, p.name, c.name as c_name, p.description, p.detail, p.c_id")
        ->join("category c", "c.id = p.c_id")
        ->where("p.id = ".$id)
        ->limit(1)
        ->get("product p");

        return $data->result()[0];
    }
    public function create_product($data)
    {
        $isOk = $this->db->insert('product', $data);
        if ($isOk){
            return $this->db->insert_id();
        }
        return false;
    }

    public function delete_product($cid){
        return $this->db->where("id", $cid)->delete("product");
    }
    public function add_images($data)
    {
        $isOk = $this->db->insert('images', $data);
        return $isOk;
    }

    // 
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
}
