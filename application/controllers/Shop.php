<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->model('setting_model');
        $this->load->model('blog_model');
    }
    public function index() {
        $kw = $this->setting_model->get_all_keywords();
        $default_images = $this->setting_model->get_all_default_images();
        $categories = $this->category_model->get_all_category();
        $categoriesofparent = $this->category_model->get_all_category_of_parent();
        $top_products = $this->product_model->get_top_product();
        //
        $parent_ct_arr = [];
        for ($i=0; $i < count($categoriesofparent); $i++) { 
            if ($parent_ct_arr[$categoriesofparent[$i]->id] == null){
                $parent_ct_arr[$categoriesofparent[$i]->id] = [];
            }
            array_push($parent_ct_arr[$categoriesofparent[$i]->id],$categoriesofparent[$i]);
        }
        $keywords  = array();
        $default_images_arr = array();
        for ($i=0; $i < count($kw); $i++) { 
            $keywords[$kw[$i]->name]  = $kw[$i]->text;
        }
        for ($i=0; $i < count($default_images); $i++) {
            $default_images_arr[$default_images[$i]->name]  = $default_images[$i]->path;
        }
        // $products = $this->product_model->get_all_product();
        $data['keywords'] = $keywords;
        $data['categories'] = $categories;
        $data['top_products'] = $top_products;
        $data['default_images'] = $default_images;
        $data['default_images_arr'] = $default_images_arr;
        $data['categoriesofparent'] = $parent_ct_arr;
        // $data['products'] = $products;
        $config['base_url'] = site_url('shop/index');
        $active['title'] = " - Home";
        $top5 = $this->blog_model->get_top5_blog();
        $data['top_5_blog'] = $top5;
        $this->load->view('layout/head', $data);
        $this->load->view('index', $data);
        $this->load->view('layout/footer', $data);
    }
}
