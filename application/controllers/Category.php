<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends My_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->model('setting_model');
    }
    public function index() {
        $c_id = $_GET['id'];
        if (!isset($c_id)){
            $c_id = 12;
        }
        $page = $_GET['page'];
        if (!isset($page)){
            $page = 1;
        }
        $orderby = $_GET['orderby'];
        if (!isset($orderby)){
            $orderby = "asc";
        }
        $limit = 2;
        $kw = $this->setting_model->get_all_keywords();
        $products = $this->product_model->get_cate_product($c_id,$page, $limit, $orderby);
        $default_images = $this->setting_model->get_all_default_images();
        $categories = $this->category_model->get_all_category();
        $total_product_category = $this->product_model->count_category_products($c_id);
        $total_page = ceil($total_product_category  / $limit);
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
        $data['total_product_category'] = $total_product_category;
        $data['page'] = $page;
        $data['orderby'] = $orderby;
        
        // $data['products'] = $products;
        $config['base_url'] = site_url('shop/index');
        $active['title'] = " - Home";
        $this->load->view('layout/head', $data);
        $this->load->view('pages/category');
        $this->load->view('layout/footer', $data);
    }
}
