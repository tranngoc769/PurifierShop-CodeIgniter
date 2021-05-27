<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
    }
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $data = [
            "username" => $username,
            "password" => $password,
        ];
        $result = $this->account_model->login($data);
        return redirect('/admin/dichvu');
    }
    public function tuvan()
    {
        $hoten = $_POST["hoten"];
        $email =  $_POST["email"];
        $sdt =  $_POST["sdt"];
        $in = $this->account_model->customer_info(array("name" => $hoten, "email" => $email, "phone" => $sdt, "dateadd" => date("Y-m-d h:i:s")));
        if ($in) {
            $array = array(
                "code" => 200,
                "msg" => "Success"
            );
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($array);
        }
        else{
            $array = array(
                "code" => 404,
                "msg" => "Erro"
            );
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($array);
        }
        // $result = $this->account_model->login($data);
        // return redirect('/admin/dichvu');
    }
    public function logout()
    {
        $array_items = array('username', 'usertype');
        $this->session->unset_userdata($array_items);
        redirect('shop');
    }
}
