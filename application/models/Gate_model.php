<?php

class Gate_model extends CI_Model {
    function ajax_gate() {
        if (!$this->input->is_ajax_request()) {
            $message = "<div class='alert alert-danger alert-dismissable my-4'>";
            $message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            $message .= "<strong>Warning!</strong> You are not allowed to visit this link!";
            $message .= "</div>";
            $this->session->set_flashdata("success", $message );
            redirect('shop');
        }
    }
	public function admin_gate() {
		if ($this->session->userdata('usertype') != 'admin') {
			$message = "<div class='alert alert-danger alert-dismissable my-4'>";
			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$message .= "<strong>Warning!</strong> You are not the admin!";
			$message .= "</div>";
			$this->session->set_flashdata("success", $message );
			redirect('/Account/index');
		}
    }
    
    public function dev_gate() {
		if ($this->session->userdata('usertype') != 'dev') {
			$message = "<div class='alert alert-danger alert-dismissable my-4'>";
			$message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			$message .= "<strong>Warning!</strong> You are not the dev!";
			$message .= "</div>";
			$this->session->set_flashdata("success", $message );
			redirect('shop');
		}
    }
    
    public function dev_admin_data() {
      if ($this->session->userdata('usertype') != 'dev' && $this->session->userdata('usertype') != 'admin') {
        $message = "<div class='alert alert-danger alert-dismissable my-4'>";
        $message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        $message .= "<strong>Warning!</strong> You are not the dev or admin!";
        $message .= "</div>";
        $this->session->set_flashdata("success", $message );
        redirect('shop');
      }
    }
    
    
    public function dev_user_data() {
      if ($this->session->userdata('usertype') != 'dev' && $this->session->userdata('usertype') != 'user') {
        $message = "<div class='alert alert-danger alert-dismissable my-4'>";
        $message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        $message .= "<strong>Warning!</strong> You are not the dev or admin!";
        $message .= "</div>";
        $this->session->set_flashdata("success", $message );
        redirect('shop');
      }
    }
    
    public function user_gate() {
        if ($this->session->userdata('usertype') != 'user') {
            $message = "<div class='alert alert-danger alert-dismissable my-4'>";
            $message .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            $message .= "<strong>Warning!</strong> You are not a registered user!";
            $message .= "</div>";
            $this->session->set_flashdata("success", $message );
            redirect('shop');
        }
    }

}