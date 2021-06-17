<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends My_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('blog_model');
        $this->load->model('category_model');
        $this->load->model('setting_model');
    }
    // Dashboard
    public function index()
    {
        $this->gate_model->admin_gate();

        // return;
        // $data['all_request'] = $this->user_model->get_upgrade_requests();
        // $this->load->view('layout/dashboard/header', array('title' => 'Admin Dashboard'));
        // $this->loadSidebar(null, null);
        // $this->load->view('admin/dashboard', $data);
        // $this->load->view('layout/dashboard/footer');

        $categories = $this->category_model->get_all_category();
        $total_product = $this->product_model->count_category_products(0);
        $data['total_product'] = $total_product;
        $cate['cur_category'] = -1;
        $cate['categories'] = $categories;
        $head['title'] = "Trang chủ";
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        // 
        $this->load->view('admin/index', $data);
        // 
        $this->load->view('layout/admin_footer.php');
    }
    // Thêm sản phẩm
    public function add_product()
    {
        $this->gate_model->admin_gate();
        $categories = $this->category_model->get_all_category();
        $categories_par = $this->category_model->get_all_category_of_parent();
        $data['categories_par'] = $categories_par;
        $cate['cur_category'] = -1;
        $cate['categories'] = $categories;
        $title = "Thêm sản phẩm";
        $head['title'] = $title;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        // 
        $this->load->view('admin/add_product', $data);
        // 
        //    $this->load->view('layout/admin_footer.php');
    }
    // Sửa sản phẩm
    public function edit_product()
    {
        $this->gate_model->admin_gate();
        $id = $_GET['id'];
        if (!isset($id)) {
            redirect("/index.php/admin");
        }
        $categories = $this->category_model->get_all_category();
        $categories_par = $this->category_model->get_all_category_of_parent();
        $product = $this->product_model->get_product_id($id);
        $prop = $product->description;
        $big_array = explode("|", $prop);
        $cate['categories'] = $categories;
        $cate['cur_category'] = -1;

        $data['categories_par'] = $categories_par;
        $data['product'] = $product;
        $data['props'] = $big_array;
        
        $title = "Sửa sản phẩm";
        $head['title'] = $title;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        // 
        $this->load->view('admin/edit_product', $data);
        // 
        //    $this->load->view('layout/admin_footer.php');
    }
    // Xóa sản phẩm
    public function del_product()
    {
        $this->gate_model->admin_gate();
        $id = $_GET['id'];
        if (!isset($id)) {
            redirect("/index.php/admin");
        }
        $isOK = $this->product_model->delete_product($id);
        $isOK = $this->product_model->delete_product_images($id);
        redirect("admin/products");
    }
    // Update sản phẩm
    public function update_product()
    {
        // formData.append("name", name);
        // formData.append("price", price);
        // formData.append("category", category);
        // formData.append("short", short_description);
        // formData.append("full", full_description);
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $price = $this->input->post("price");
        $cate = $this->input->post("category");
        $description = $this->input->post("short");
        $detail = $this->input->post("full");
        $p_id = $this->product_model->update_product($id, array("price" => $price, "name" => $name, "detail" => $detail, "c_id" => $cate, "description" => $description));
        if (!$p_id) {
            $array = array(
                "code" => 404,
                "msg" => "OK"
            );
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($array);
            return;
        }
        $array = array(
            "code" => 200,
            "msg" => "OK"
        );
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
        return;
    }
    public function add()
    {

        $config['upload_path']          = './style/uploads/products/';
        $config['allowed_types']        = 'jpeg|gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;
        $this->load->library('upload', $config);
        $err_up = "";
        // 
        $name = $this->input->post("name");
        $price = $this->input->post("price");
        $c_id = $this->input->post("category");
        $description = $this->input->post("short");
        $detail = $this->input->post("full");
        $p_id = $this->product_model->create_product(array("name" => $name, "price" => $price, "c_id" => $c_id, "description" => $description, "detail" => $detail));
        if ($p_id == false) {
            $array = array(
                "code" => 400,
                "msg" => "Cannot insert"
            );
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($array);
            return;
        }
        // 
        $upload_path = "/style/uploads/products/";
        $Uploaded_files = array();
        $full_ok = true;
        for ($i = 0; $i <  count($_FILES); $i++) {
            $path =  $this->upload->do_upload('file' . $i);
            if (!$path) {
                $full_ok = false;
            } else {
                array_push($Uploaded_files, $upload_path . $path);
            }
        }
        if ($full_ok) {
            for ($i = 0; $i < count($Uploaded_files); $i++) {
                $up = array("path" => $Uploaded_files[$i], "p_id" => $p_id, "c_id" => $c_id, "index" => 0);
                if ($i == 0) {
                    $up["index"] = 1;
                }
                $this->product_model->add_images($up);
            }
        } else {
            $array = array(
                "code" => 400,
                "msg" => "Upload images failed"
            );
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($array);
            return;
        }
        $array = array(
            "code" => 200,
            "msg" => "OK"
        );
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
        return;
    }
    // DS PRODUCTS
    public function products()
    {
        $this->gate_model->admin_gate();
        $categories = $this->category_model->get_all_category();
        $c_id = $_GET['id'];
        if (!isset($c_id)) {
            $c_id = 0;
        }
        $page = $_GET['page'];
        if (!isset($page)) {
            $page = 1;
        }
        $orderby = $_GET['orderby'];
        if (!isset($orderby)) {
            $orderby = "asc";
        }
        $limit = 10;
        $products = $this->product_model->get_cate_product($c_id, $page, $limit, $orderby);
        $categories = $this->category_model->get_all_category();
        $total_product_category = $this->product_model->count_category_products($c_id);
        $total_page = ceil($total_product_category  / $limit);
        $cate['cur_category'] = $c_id;
        $cate['categories'] = $categories;
        $data['products'] = $products;
        $data['page'] = $page;
        $data['total'] = $total_page;
        $title = "Danh sách sản phẩm";
        $head['title'] = $title;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        // 
        $data['categories'] = $categories;
        $this->load->view('admin/products', $data);
        $this->load->view('layout/admin_footer.php');
    }
    // DS BLOGS
    public function blogs()
    {
        $this->gate_model->admin_gate();
        $page = $_GET['page'];
        if (!isset($page)) {
            $page = 1;
        }
        $orderby = $_GET['orderby'];
        if (!isset($orderby)) {
            $orderby = "asc";
        }
        $title = "Danh sách bài đăng";
        $head['title'] = $title;
        $limit = 10;
        $products = $this->blog_model->get_blogs($page, $limit);
        $categories = $this->category_model->get_all_category();
        $total_blogs = $this->blog_model->count_blogs();
        $total_page = ceil($total_blogs  / $limit);
        $cate['categories'] = $categories;
        $data['products'] = $products;
        $data['page'] = $page;
        $data['total'] = $total_page;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        // 
        $data['categories'] = $categories;
        $this->load->view('admin/blogs', $data);
        $this->load->view('layout/admin_footer.php');
    }
    // Thêm blog
    public function add_blog()
    {
        $this->gate_model->admin_gate();
        $categories = $this->category_model->get_all_category();
        $data['categories'] = $categories;
        $cate['cur_category'] = -1;
        $cate['categories'] = $categories;
        $title = "Thêm bài đăng";
        $head['title'] = $title;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        $this->load->view('admin/add_blog');
        //    $this->load->view('layout/admin_footer.php');
    }
    // View Update blog
    public function edit_blog()
    {
        $this->gate_model->admin_gate();
        $id = $_GET['id'];
        if (!isset($id)) {
            redirect("/index.php/admin/blogs");
        }
        $categories = $this->category_model->get_all_category();
        $blog = $this->blog_model->get_blogs_detail($id);
        $data['categories'] = $categories;
        $data['blog'] = $blog;
        $title = "Cập nhật bài đăng";
        $head['title'] = $title;
        $cate['cur_category'] = -1;
        $cate['categories'] = $categories;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        $this->load->view('admin/update_blog', $data);
        //    $this->load->view('layout/admin_footer.php');
    }
    public function blog_update()
    {
        $id = $this->input->post("id");
        $title = $this->input->post("title");
        $detail = $this->input->post("detail");
        $up = array("title" => $title, "detail" => $detail, "date" => date('Y-m-d H:i:s'));
        $ok = $this->blog_model->update_blog($id, $up);
        if (!$ok) {
            $array = array(
                "code" => 404,
                "msg" => "OK"
            );
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($array);
            return;
        }
        $array = array(
            "code" => 200,
            "msg" => "OK"
        );
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
        return;
    }
    // Xóa blogs
    public function del_blog()
    {
        $this->gate_model->admin_gate();
        $id = $_GET['id'];
        if (!isset($id)) {
            redirect("/index.php/admin");
        }
        $isOK = $this->blog_model->delete_blog($id);
        redirect("admin/blogs");
    }
    // SP Nổi bật
    public function top_product()
    {
        $title = "Sản phẩm nổi bật";
        $head['title'] = $title;
        $this->gate_model->admin_gate();
        $categories = $this->category_model->get_all_category();
        $categories_par = $this->category_model->get_all_category_of_parent();
        $data['categories'] = $categories;
        $cate['cur_category'] = -1;
        $cate['categories'] = $categories;
        $list_id = [];
        $top_products = $this->product_model->get_top_product_ad();
        $products = $this->product_model->get_all_product();
        for ($i = 0; $i < count($top_products); $i++) {
            array_push($list_id, $top_products[$i]->p_id);
        }
        $data['list_id'] = $list_id;
        $data['products'] = $products;
        $data['top_products'] = $top_products;
        $data['categories_par'] = $categories_par;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        $this->load->view('admin/top_product.php', $data);
        //    $this->load->view('layout/admin_footer.php');
    }

    public function top_update()
    {
        $list_product = $this->input->post("list_product");
        $list = explode(",", $list_product);
        $this->product_model->delete_top_product();

        for ($i = 0; $i < count($list); $i++) {
            $ok = $this->product_model->create_top_product(array("p_id" => $list[$i]));
        }
        $array = array(
            "code" => 200,
            "msg" => "OK"
        );
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
        return;
    }

    public function blog_add()
    {
        $config['upload_path']          = './style/uploads/blogs/';
        $config['allowed_types']        = 'jpeg|gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;
        $this->load->library('upload', $config);
        // 
        $title = $this->input->post("title");
        $detail = $this->input->post("detail");
        $path =  $this->upload->do_upload('file');
        $i_path =  '/style/uploads/blogs/';
        if ($path) {
            $up = array("avatar" => $i_path . $path, "title" => $title, "detail" => $detail, "date" => date('Y-m-d H:i:s'));
            $ok = $this->blog_model->create_blog($up);
            if (!$ok) {
                $array = array(
                    "code" => 400,
                    "msg" => "Create blog failed"
                );
                header('Access-Control-Allow-Origin: *');
                header('Content-Type: application/json');
                echo json_encode($array);
                return;
            }
        } else {
            $array = array(
                "code" => 400,
                "msg" => "Upload images failed"
            );
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($array);
            return;
        }
        $array = array(
            "code" => 200,
            "msg" => "OK"
        );
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
        return;
    }

    // SP Nổi bật
    public function params()
    {
        $this->gate_model->admin_gate();
        $categories = $this->category_model->get_all_category();
        $categories_par = $this->category_model->get_all_category_of_parent();
        $data['categories'] = $categories;
        $cate['cur_category'] = -1;
        $cate['categories'] = $categories;
        $keywords = $this->setting_model->get_all_keywords();
        $default_images = $this->setting_model->get_all_default_images();
        $data['default_images'] = $default_images;
        $data['keywords'] = $keywords;
        $title = "Danh sách tham số";
        $head['title'] = $title;
        $this->load->view('layout/admin_head.php', $head);
        $this->load->view('layout/admin_nav.php');
        $this->load->view('layout/admin_side.php', $cate);
        $this->load->view('admin/params.php', $data);
        //    $this->load->view('layout/admin_footer.php');
    }
    public function params_update()
    {
        $totalkeys = $this->input->post("totalkeys") * 1;
        for ($i = 0; $i < $totalkeys; $i++) {
            $id = $this->input->post("keys_" . $i);
            $text = $this->input->post("val_" . $i);
            $this->setting_model->update_keywords($id, array('text' => $text));
        }
        $array = array(
            "code" => 200,
            "msg" => "OK"
        );
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($array);
        return;
    }

    // OLD

    // OLD
    // Danh sách mục vhi
    public function dsmucchi()
    {
        $this->gate_model->admin_gate();
        $categories = $this->product_model->get_all_product();
        $data['categories'] = $categories;
        $this->load->view('layout/head');
        $this->load->view('layout/side');
        $this->load->view('admin/products', $data);
    }

    // Them loai dv
    public function loaidv()
    {
        $this->gate_model->admin_gate();
        $this->load->view('layout/head');
        $this->load->view('layout/side');
        $data['link'] = "/index.php/admin/themloaidv";
        $this->load->view('admin/add_category', $data);
    }
    // Post them loai dv
    public function themloaidv()
    {
        $this->gate_model->admin_gate();
        $data['name'] = $this->input->post('name');
        $insert = $this->category_model->create_category($data);
        if ($insert) {
            redirect('admin/dichvu');
            return;
        }
        echo ("cannot insert");
    }
    // Post thêm mục chi
    public function themmucchi()
    {
        $this->gate_model->admin_gate();
        $data['pname'] = $this->input->post('name');
        $data['cid'] = $this->input->post('category');
        $data['price1'] = $this->input->post('price1');
        $data['price2'] = $this->input->post('price2');
        $data['price3'] = $this->input->post('price3');
        $data['price4'] = $this->input->post('price4');
        $insert = $this->product_model->create_product($data);
        if ($insert) {
            redirect('admin/dsmucchi');
            return;
        }
        echo ("cannot insert");
    }
    // DS dịch vụ
    public function dichvu()
    {
        $this->gate_model->admin_gate();
        $categories = $this->category_model->get_all_category();
        $data['categories'] = $categories;
        $this->load->view('layout/head');
        $this->load->view('layout/side');
        $this->load->view('admin/categories', $data);
    }
    // DS dịch vụ
    public function email($page = 1)
    {
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $this->gate_model->admin_gate();
        $total = ceil($this->account_model->count_all_email() / $limit);
        $email = $this->account_model->get_all_email_paging($offset, $limit);
        $data['email'] = $email;
        $data['total'] = $total;
        $data['current'] = $page;
        $this->load->view('layout/head');
        $this->load->view('layout/side');
        $this->load->view('admin/email', $data);
    }
    public function xoadichvu($id)
    {
        $this->gate_model->admin_gate();
        $this->gate_model->admin_gate();
        $is_used = $this->category_model->checkUseCategory($id);
        if (!$is_used) {
            $res = $this->category_model->delete_category($id);
        }
        return redirect('/admin/dichvu');
    }
    public function xoamucchi($id)
    {
        $this->gate_model->admin_gate();
        // $is_used = $this->category_model->checkUseCategory($id);
        // if (!$is_used){
        $res = $this->product_model->delete_product($id);
        // }
        return redirect('/admin/mucchi');
    }
    public function suadichvu($id)
    {
        $this->gate_model->admin_gate();
        $categories = $this->category_model->get_category_id($id);
        if (count($categories) > 0) {
            $data['category'] = $categories[0];
        }
        $this->load->view('layout/head');
        $this->load->view('layout/side');
        $data['link'] = "/index.php/admin/updateloaidv";
        $this->load->view('admin/add_category', $data);
    }
    public function updateloaidv()
    {
        $data['id'] = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        $insert = $this->category_model->update_category($data['id'], $data);
        return redirect('/admin/dichvu');
    }
    // 
    public function download()
    {
        $data = $this->account_model->get_all_email();
        $data_a = json_encode($data);
        echo (json_encode($data));
        return;
    }
    public function xoaemail($sdt)
    {
        $insert = $this->account_model->xoaemail($sdt);
        return redirect('/admin/email');
    }
}
