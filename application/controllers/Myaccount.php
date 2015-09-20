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
        $this->load->model('myaccount_model');
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

        $my_user_id=$this->session->userdata('user_id');

        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');

        $data['profile_info']=$this->myaccount_model->view_my_profile($my_user_id);

        $data['main-content'] = $this->load->view('common/dashboard/my-profile', $data);
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function edit_profile() {
        $my_user_id=$this->session->userdata('user_id');
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');

        $data['profile_info']=$this->myaccount_model->view_my_profile($my_user_id);

        // echo '<pre>';
        // print_r($data['profile_info']);
        // exit();

        $data['main-content'] = $this->load->view('common/dashboard/edit_my_profile', $data);
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function update_profile_info(){
        $my_user_id=$this->session->userdata('user_id');
        $data = array();

        $data['user_first_name'] = $this->input->post('user_first_name', TRUE);
        $data['user_last_name'] = $this->input->post('user_last_name', TRUE);
        $password_length=$this->input->post('user_password', TRUE);
        $email_address = $data['user_email']= $this->input->post('user_email_address', TRUE);
        
        //$password = $data['user_password'] = md5($this->input->post('user_password', TRUE));
        $confirm_password = md5($this->input->post('user_confirm_password', TRUE));

        //$data['user_gender'] = $this->input->post('user_gender', TRUE);
        //$data['user_country'] = $this->input->post('user_country', TRUE);
        $data['user_date_of_birth'] = $this->input->post('user_date_of_birth', TRUE);
        $data['user_phone_no'] = $this->input->post('user_phone_no', TRUE);

        // echo "<pre>";
        // print_r($data);
        // exit();


        $this->myaccount_model->save_my_updated_profile_info($my_user_id, $data);

        $alert_message['message'] = "Successfully Updated Your Profile Info";
        $this->session->set_userdata($alert_message);

        redirect('myaccount/profile');
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
