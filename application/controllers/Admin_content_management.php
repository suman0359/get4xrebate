<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_Content_Management extends CI_Controller {

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

    public function save_new_broker(){
        $data= array();
        $data['broker_name']=$this->input->post('broker_name', TRUE);
        $data['broker_referral_address']=$this->input->post('broker_referral_address', TRUE);

        $this->admin_management_model->save_new_broker($data);

        $alert_message['message'] = "Successfully Your Registration";
        $this->session->set_userdata($alert_message);

        redirect('admin_dashboard/add_new_broker');
    }

    public function update_selected_broker(){
        $data= array();

        $broker_id=$this->input->post('broker_id', TRUE);

        $data['broker_name']=$this->input->post('broker_name', TRUE);
        $data['broker_referral_address']=$this->input->post('broker_referral_address', TRUE);

        $this->admin_management_model->update_selected_broker($data, $broker_id);

        $alert_message['message'] = "Successfully Your Registration";
        $this->session->set_userdata($alert_message);

        redirect('admin_dashboard/view_all_broker');
    }

    public function delete_broker($broker_id){
        $this->admin_management_model->delete_broker($broker_id);

        $alert_message['message'] = "Successfully Delete Your Broker";
        $this->session->set_userdata($alert_message);

        redirect('admin_dashboard/view_all_broker');
    }

    public function publish_broker_status($broker_id){
        $this->admin_management_model->publish_broker_status($broker_id);

        $alert_message['message'] = "Successfully Unpublished Your Broker";
        $this->session->set_userdata($alert_message);

        redirect('admin_dashboard/view_all_broker');
    }

    public function unpublish_broker_status($broker_id){
        $this->admin_management_model->unpublish_broker_status($broker_id);

        $alert_message['message'] = "Successfully Published Your Broker";
        $this->session->set_userdata($alert_message);

        redirect('admin_dashboard/view_all_broker');
    }
}