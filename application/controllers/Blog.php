<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('category_model');
        $this->load->model('blog_model');
        $this->load->model('setting_model');
    }
    public function index()
    {
        $kw = $this->setting_model->get_all_keywords();
        $default_images = $this->setting_model->get_all_default_images();
        $categories = $this->category_model->get_all_category();
        // 
        $keywords  = array();
        $default_images_arr = array();
        for ($i = 0; $i < count($kw); $i++) {
            $keywords[$kw[$i]->name]  = $kw[$i]->text;
        }
        for ($i = 0; $i < count($default_images); $i++) {
            $default_images_arr[$default_images[$i]->name]  = $default_images[$i]->path;
        }
        $page = $_GET['page'];
        if (!isset($page)) {
            $page = 1;
        }
        $limit = 10;
        $blogs = $this->blog_model->get_blogs($page, $limit);
        $total_blogs = $this->blog_model->count_blogs();
        $total_page = ceil($total_blogs  / $limit);
        $data['keywords'] = $keywords;
        $data['categories'] = $categories;
        $data['default_images'] = $default_images;
        $data['default_images_arr'] = $default_images_arr;
        $data['blogs'] = $blogs;
        $data['limit'] = $limit;
        $data['total'] = $total_page;
        $data['page'] = $page;
        // $data['products'] = $products;
        $config['base_url'] = site_url('shop/index');
        $active['title'] = " - Home";
        $this->load->view('layout/head', $data);
        $this->load->view('pages/blog', $data);
        $this->load->view('layout/footer', $data);
    }
    public function detail()
    {
        $kw = $this->setting_model->get_all_keywords();
        $default_images = $this->setting_model->get_all_default_images();
        $categories = $this->category_model->get_all_category();
        $id = $_GET['id'];
        if (!isset($id)) {
            return redirect("blog");
        }
        $keywords  = array();
        $default_images_arr = array();
        for ($i = 0; $i < count($kw); $i++) {
            $keywords[$kw[$i]->name]  = $kw[$i]->text;
        }
        for ($i = 0; $i < count($default_images); $i++) {
            $default_images_arr[$default_images[$i]->name]  = $default_images[$i]->path;
        }
        $blogs = $this->blog_model->get_blogs_detail($id);
        $top_10 = $this->blog_model->get_top10_blog();
        $data['keywords'] = $keywords;
        $data['categories'] = $categories;
        $data['default_images'] = $default_images;
        $data['default_images_arr'] = $default_images_arr;
        $data['blogs'] = $blogs;
        $data['top_10_blog'] = $top_10;
        $top5 = $this->blog_model->get_top5_blog();
        $data['top_5_blog'] = $top5;
        // $data['products'] = $products;
        $config['base_url'] = site_url('shop/index');
        $active['title'] = " - Home";
        $this->load->view('layout/head', $data);
        $this->load->view('pages/blog_detail', $data);
        $this->load->view('layout/footer', $data);
    }
}