<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of change_password
 *
 * @author suman0359
 */
class Change_Password extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('change_password_model');
        $user_login_id = $this->session->userdata('user_id');
        if ($user_login_id == NULL) {
            $alert_message = array();
            $alert_message['message'] = "Please Login First";
            $this->session->set_userdata($alert_message);

            redirect('user');
        }
    }

    public function change_my_password(){
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('dashboard/change_my_password_form');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function update_password() {
        $data = array();
        
        $user_id=$this->session->userdata('user_id');

        $old_password = $this->input->post('old_password', true);
        $user_password = $this->input->post('new_password', true);
        $user_confirm_password = $this->input->post('confirm_password', true);
//        echo '<pre>'; 
//        print_r($_POST);
//        echo 'admin id is '. $admin_id;
//        echo 'old password is ' .$old_password;
//        echo 'new password is ' . $new_password;
//        echo 'confirm password is ' .$confirm_password;

        $check_password = $this->change_password_model->check_exist_password($user_id, $old_password);
//        echo '<pre>';
//        echo $check_password;
//        print_r($check_password);
//        exit();
        $pass_msg = array();
        if ($check_password != NULL) {
            //$pass_msg['admin_id'] = $check_password->admin_id;
            //$pass_msg['admin_username'] = $check_password->admin_password;
            if ($new_password == $confirm_password && $new_password!=NULL) {
                $this->change_password_model->update_password($user_id, $new_password);
            } else {
                $login_msg['message'] = "Your NEW And OLD Password Doesn't Match";
                $this->session->set_userdata($login_msg);
                redirect('super_admin/change_password');
            }
            $login_msg['message'] = "Your New Password is Successfully Changed";
            $this->session->set_userdata($login_msg);
            redirect('super_admin/change_password');
        } else {
            $login_msg['message'] = "your Old Password Doesn't Match";
            $this->session->set_userdata($login_msg);
            redirect('super_admin/change_password');
        }

//        if($check_password){
//            if($new_password==$confirm_password){
//                $this->admin_login_model->change_password($admin_id, $new_password);
//            }  else {
//                $sdata = array();
//                $sdata['successfull'] = "Your New Password and Confirm Password Doesn't Match";
//                $this->session->set_userdata($sdata);
//                redirect('super_admin_dashboard/change_password');
//            }
//        }  else {
//        $sdata = array();
//        $sdata['message'] = "your Old Password Doesn't Match";
//        $this->session->set_userdata($sdata);
//        redirect('super_admin_dashboard/change_password');
//        }
        //$result=$this->admin_login_model->check_password_info($admin_username, $admin_password);

        $data['content'] = $this->load->view('admin/change_password', '', TRUE);

        $this->load->view('admin/super_admin', $data);
    }
}
