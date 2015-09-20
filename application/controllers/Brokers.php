<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Brokers
 *
 * @author tasfir
 */
class Brokers extends CI_Controller {
    //put your code here

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

    public function index(){
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('common/dashboard/broker-account');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function fxpro(){
        $data = array();
        $data['header'] = $this->load->view('common/header');
        $data['header'] = $this->load->view('common/navigation');
            $content =array();
            $content['breadcrumb'] = $this->load->view('broker');
            //$content['broker_title'] =  $this->load->view();
            
        $data['main-content'] = $this->load->view('main-content', $content);
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function add_broker_account(){
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('dashboard/add-broker-account');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

    public function open_broker_account(){
        $data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('dashboard/open-broker-account');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }
}
