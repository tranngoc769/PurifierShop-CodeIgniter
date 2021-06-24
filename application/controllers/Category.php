<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->model('setting_model');
        $this->load->model('blog_model');
    }
    public function index() {
        $c_id = $_GET['id'];
        if (!isset($c_id)){
            $c_id = 0;
        }
        $page = $_GET['page'];
        if (!isset($page)){
            $page = 1;
        }
        $orderby = $_GET['orderby'];
        if (!isset($orderby)){
            $orderby = "asc";
        }
        $limit = 9;
        $kw = $this->setting_model->get_all_keywords();
        $products = $this->product_model->get_cate_product($c_id,$page, $limit, $orderby);
        $default_images = $this->setting_model->get_all_default_images();
        $categories = $this->category_model->get_all_category();
        $total_product_category = $this->product_model->count_category_products($c_id);
        $total_page = ceil($total_product_category  / $limit);
        $categoriesofparent = $this->category_model->get_all_category_of_parent();
        //
        $parent_ct_arr = [];
        for ($i=0; $i < count($categoriesofparent); $i++) { 
            if ($parent_ct_arr[$categoriesofparent[$i]->id] == null){
                $parent_ct_arr[$categoriesofparent[$i]->id] = [];
            }
            array_push($parent_ct_arr[$categoriesofparent[$i]->id],$categoriesofparent[$i]);
        }
        $data['categoriesofparent'] = $parent_ct_arr;
        // 
        $keywords  = array();
        $default_images_arr = array();
        for ($i=0; $i < count($kw); $i++) { 
            $keywords[$kw[$i]->name]  = $kw[$i]->text;
        }
        for ($i=0; $i < count($default_images); $i++) {
            $default_images_arr[$default_images[$i]->name]  = $default_images[$i]->path;
        }
        // $products = $this->product_model->get_all_product();
        $data['cur_category'] = $c_id; 
        $data['keywords'] = $keywords;
        $data['categories'] = $categories;
        $data['products'] = $products;
        $data['default_images'] = $default_images;
        $data['default_images_arr'] = $default_images_arr;
        // PAGING
        $data['limit'] = $limit;
        $data['total'] = $total_page;
        $data['page'] = $page;
        $data['total_product_category'] = $total_product_category;
        $data['orderby'] = $orderby;
        
        $top5 = $this->blog_model->get_top5_blog();
        $data['top_5_blog'] = $top5;
        // $data['products'] = $products;
        $config['base_url'] = site_url('shop/index');
        $active['title'] = " - Home";
        $this->load->view('layout/head', $data);
        $this->load->view('pages/category');
        $this->load->view('layout/footer', $data);
    }
}
