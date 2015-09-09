<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MyAccount extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $user_login_id = $this->session->userdata('user_id');
        if ($user_login_id == NULL) {
            $alert_message = array();
            $alert_message['message'] = "Please Login First";
            $this->session->set_userdata($alert_message);

            redirect('user');
        }
    }

    public function index() {
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('common/dashboard/dashboard-content');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function profile() {
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('common/dashboard/my-profile');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function edit_profile() {
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('common/dashboard/edit_my_profile');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_email_address');
        $this->session->unset_userdata('user_first_name');
        $this->session->unset_userdata('user_last_name');
        $logout_msg = array();
        $logout_msg['message'] = "You are Successfully Loged out";
        $this->session->set_userdata($logout_msg);
        redirect('home', 'refresh');
    }

}
