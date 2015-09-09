<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login() {
        $data = array();
        $data['header'] = $this->load->view('common/header');
        $data['header'] = $this->load->view('common/navigation');

        $data['login_form']= $this->load->view('login-form', TRUE);

        // $data['main-content'] = $this->load->view('main-content');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    // View Register Page 
    public function register(){
    	$data = array();
        $data['header'] = $this->load->view('common/header');
        $data['header'] = $this->load->view('common/navigation');

        $data['login_form']= $this->load->view('register-form', TRUE);

        // $data['main-content'] = $this->load->view('main-content');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('user_model');
        $this->load->model('user_management_model');
    }
    
    public function save_user_info(){
        
        $data = array();
        $alert_message = array();
        
        $data['user_first_name'] = $this->input->post('user_first_name', TRUE);
        $data['user_last_name'] = $this->input->post('user_last_name', TRUE);
        $password_length=$this->input->post('user_password', TRUE);
        $email_address = $data['user_email']= $this->input->post('user_email_address', TRUE);
        
        $password = $data['user_password'] = md5($this->input->post('user_password', TRUE));
        $confirm_password = md5($this->input->post('user_confirm_password', TRUE));

        $data['user_gender'] = $this->input->post('user_gender', TRUE);
        $data['user_country'] = $this->input->post('user_country', TRUE);
        $data['user_date_of_birth'] = $this->input->post('date_of_birth', TRUE);
        $data['user_phone_no'] = $this->input->post('user_phone_no', TRUE);
        
        $check_email_address = $this->user_management_model->check_exist_email($email_address);
        
//        echo '<pre>';
//        print_r($data);
//        exit();

        if ($check_email_address !== NULL) {

            $alert_message['message'] = "Your Email Address is already exist. Please try different email address.";
            $this->session->set_userdata($alert_message);
            redirect('user/register');
        }

        
        if(strlen($password_length) < 6 ){
            $alert_message['message'] = "Your Password Must Be At Least 6 Charater";
            $this->session->set_userdata($alert_message);
            redirect('user/register');
        }

        if ($password !== $confirm_password) {
            $alert_message['message'] = "Your Password and Confirm Password Doesn't Match";
            $this->session->set_userdata($alert_message);
            redirect('user/register');
        }

        $this->user_management_model->save_user_info($data);

        //Login 

        $result = $this->user_model->check_login_register($email_address);

        $login_msg = array();
        if ($result) {
            $login_msg['user_id'] = $result->user_id;
            $login_msg['user_email_address'] = $result->user_email;
            $login_msg['user_first_name'] = $result->user_first_name;
            $login_msg['user_last_name'] = $result->user_last_name;

            $this->session->set_userdata($login_msg);
            
            $this->load->view('home', $login_msg);
        }

        $alert_message['message'] = "Successfully Your Registration";
        $this->session->set_userdata($alert_message);

        redirect('myaccount');
    
    }

    //Check User Login 
    public function check_user_login() {
        $user_email = $this->input->post('user_email_address', true); 
        $user_password = $this->input->post('user_password', true);

        $result = $this->user_model->check_login_info($user_email, $user_password);

//        echo '<pre>';
//        print_r($result);
//        exit();
        
        $login_msg = array();
        if ($result) {
            $login_msg['user_id'] = $result->user_id;
            $login_msg['user_email'] = $result->user_email;
            $login_msg['user_first_name'] = $result->user_first_name;
            $login_msg['user_last_name'] = $result->user_last_name;
            $this->session->set_userdata($login_msg);
            
            $alert_message = array();
            $alert_message['message'] = "Successfully Loged In";
            $this->session->set_userdata($alert_message);
            
            redirect('myaccount');
        } else {
            $alert_message = array();
            $alert_message['message'] = "Your Email Address or Password Dosn't Match";
            $this->session->set_userdata($alert_message);
            redirect('user');
        }
    }


    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email_address');
        $this->session->unset_userdata('first_name');
        $this->session->unset_userdata('last_name');
        $logout_msg = array();
        $logout_msg['message'] = "You are Successfully Loged out";
        $this->session->set_userdata($logout_msg);
        redirect('home', 'refresh');
    }
}