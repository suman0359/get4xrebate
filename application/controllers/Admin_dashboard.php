<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_management_model');
        $admin_login_id = $this->session->userdata('admin_id');
        if ($admin_login_id == NULL) {
            $alert_message = array();
            $alert_message['message'] = "Please Login First";
            $this->session->set_userdata($alert_message);

            redirect('admin_login');
        }
    }

    public function index() {
        $data = array();
        $data['header'] = $this->load->view('admin/header');
        $data['navigation'] = $this->load->view('admin/navigation');

        $data['body_content']=$this->load->view('admin/body_content', '', TRUE);
        //$body_content=$this->load->view('common/admin/body_content');
        
        $data['main-content'] = $this->load->view('admin/admin-dashboard-content', $data, TRUE);
        

        $data['footer'] = $this->load->view('admin/footer');

        $this->load->view('home', $data);
    }

    public function add_new_broker(){
        $data = array();
        $data['header'] = $this->load->view('admin/header');
        $data['navigation'] = $this->load->view('admin/navigation');

        $data['body_content']=$this->load->view('admin/add_new_broker_form', '', TRUE);

        //$body_content=$this->load->view('common/admin/body_content');

        $data['main-content'] = $this->load->view('admin/admin-dashboard-content', $data);
        $data['footer'] = $this->load->view('admin/footer');

        $this->load->view('home', $data);
    }

    public function view_all_broker(){
        $data = array();
        $data['header'] = $this->load->view('admin/header');
        $data['navigation'] = $this->load->view('admin/navigation');

        $data['view_all_broker']=$this->admin_management_model->view_all_broker();

        $data['body_content']=$this->load->view('admin/view_all_broker', $data, TRUE);

        $data['main-content'] = $this->load->view('admin/admin-dashboard-content', $data);
        $data['footer'] = $this->load->view('admin/footer');

        $this->load->view('home', $data);
    }

    public function update_selected_broker($broker_id){
        $data = array();
        $data['header'] = $this->load->view('admin/header');
        $data['navigation'] = $this->load->view('admin/navigation');

        $data['view_selected_broker']=$this->admin_management_model->view_selected_broker($broker_id);

        $data['body_content']=$this->load->view('admin/update_broker_form', $data, TRUE);

        $data['main-content'] = $this->load->view('admin/admin-dashboard-content', $data);
        $data['footer'] = $this->load->view('admin/footer');

        $this->load->view('home', $data);
    }

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('email_address');
        $this->session->unset_userdata('first_name');
        $this->session->unset_userdata('last_name');
        $logout_msg = array();
        $logout_msg['message'] = "You are Successfully Loged out";
        $this->session->set_userdata($logout_msg);
        redirect('home', 'refresh');
    }

}