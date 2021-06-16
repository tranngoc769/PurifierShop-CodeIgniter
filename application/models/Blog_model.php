<?php

class Blog_model extends CI_Model
{

    // GET ALL BLOG
    public function get_blogs($page, $limit)
    {

        $data =  $this->db->select("*")
            ->limit($limit, ($page - 1) * $limit)
            ->order_by("date", "ASC")
            ->get("blog");
        return $data->result();
    }
    public function get_blogs_detail($id)
    {

        $data =  $this->db->select("*")
            ->where("id", $id)
            ->get("blog");
        return $data->result()[0];
    }
    public function count_blogs()
    {
        $data =  $this->db->select("COUNT(id) as total")
            ->get("blog");
        return intval($data->result()[0]->total);
    }
    public function get_top10_blog()
    {
        $data =  $this->db->select("MONTH(date) as month, DAY(date) as day,YEAR(date) as year, id, title, detail")
        ->order_by("date", "ASC")
        ->limit(10,0)
        ->get("blog");
        return $data->result();
    }
    
    public function get_top5_blog()
    {
        $data =  $this->db->select("MONTH(date) as month, DAY(date) as day,YEAR(date) as year, id, title, detail")
        ->order_by("date", "ASC")
        ->limit(5,0)
        ->get("blog");
        return $data->result();
    }
    public function delete_blog($cid){
        return $this->db->where("id", $cid)->delete("blog");
    }
    
    public function create_blog($data)
    {
        $isOk = $this->db->insert('blog', $data);
        if ($isOk) {
            return $this->db->insert_id();
        }
        return false;
    }
    public function update_blog($id,$data)
    {
		return $this->db->where("id", $id)->update('blog', $data);
    }
}
