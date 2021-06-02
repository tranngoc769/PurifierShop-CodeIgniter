<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends My_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->model('setting_model');
    }
    public function index() {
        $p_id = $_GET['id'];
        if (!isset($p_id)){
            return redirect("./");
        }
        if (!$this->product_model->check_product_exist($p_id)){
            return redirect("./");
        }
        $kw = $this->setting_model->get_all_keywords();
        $default_images = $this->setting_model->get_all_default_images();
        $categories = $this->category_model->get_all_category();
        $keywords  = array();
        $default_images_arr = array();
        for ($i=0; $i < count($kw); $i++) { 
            $keywords[$kw[$i]->name]  = $kw[$i]->text;
        }
        for ($i=0; $i < count($default_images); $i++) {
            $default_images_arr[$default_images[$i]->name]  = $default_images[$i]->path;
        }
        // PRODUCTS
        $product_images = $this->product_model->get_product_images($p_id);
        $product = $this->product_model->get_product_id($p_id);
        // 
        $des = $product->description;
        $des_arr = explode("|",$des);
        
        $descriptions  = array();
        for ($i=0; $i < count($des_arr); $i++) { 
            $tmp = explode(":",$des_arr[$i]);
            $unit[0] = trim(str_replace("\"", "", $tmp[0]));
            $unit[1] = trim(str_replace("\"", "", $tmp[1]));
            $descriptions[$i] = $unit;
        }
        // 
        // $products = $this->product_model->get_all_product();
        $data['keywords'] = $keywords;

        $data['categories'] = $categories;
        $data['default_images'] = $default_images;
        $data['default_images_arr'] = $default_images_arr;
        // 
        $data['product_images'] = $product_images;
        $data['descriptions'] = $descriptions;
        $data['product'] = $product;
        $config['base_url'] = site_url('shop/index');
        $active['title'] = " - Home";
        $this->load->view('layout/head', $data);
        $this->load->view('pages/product');
        $this->load->view('layout/footer', $data);
    }
}
