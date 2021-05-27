<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
    }
    public function index() {
        $categories = $this->category_model->get_all_category();
        $products = $this->product_model->get_all_product();
        $data['categories'] = $categories;
        $data['products'] = $products;
        $config['base_url'] = site_url('shop/index');
        $active['title'] = " - Home";
        $this->load->view('index', $data);
    }
}
