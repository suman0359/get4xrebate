<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('admin_management_model');

        $admin_login_id = $this->session->userdata('admin_id');
        if ($admin_login_id !== NULL) {
            $alert_message = array();
            $alert_message['message'] = "You Are Already loged In";
            $this->session->set_userdata($alert_message);

            redirect('admin_dashboard');
        }
	}

	public function login() {
        $data = array();
        $data['header'] = $this->load->view('common/header');
        $data['header'] = $this->load->view('common/navigation');

        $data['login_form']= $this->load->view('admin/admin_login_form', TRUE);

        // $data['main-content'] = $this->load->view('main-content');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    //Check admin Login 
    public function check_admin_login() {
        $admin_email = $this->input->post('admin_email_address', true); 
        $admin_password = $this->input->post('admin_password', true);

        $result = $this->admin_management_model->check_admin_login_info($admin_email, $admin_password);

       // echo '<pre>';
       // print_r($result);
       // exit();
        
        $login_msg = array();
        if ($result) {
            $login_msg['admin_id'] = $result->admin_id;
            $login_msg['admin_email'] = $result->admin_email;
            $login_msg['admin_first_name'] = $result->admin_first_name;
            $login_msg['admin_last_name'] = $result->admin_last_name;
            $this->session->set_userdata($login_msg);
            
            $alert_message = array();
            $alert_message['message'] = "Successfully Loged In";
            $this->session->set_userdata($alert_message);
            
            redirect('admin_dashboard');
        } else {
            $alert_message = array();
            $alert_message['message'] = "Your Email Address or Password Dosn't Match";
            $this->session->set_userdata($alert_message);
            redirect('admin_login');
        }
    }


    
}