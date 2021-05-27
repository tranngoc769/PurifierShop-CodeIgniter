<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends My_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index() {
        $this->gate_model->dev_user_data();
        $this->load->view('layout/user/header');
        $this->load->view('user/login');
        $this->load->view('layout/account/footer');
    }
}
