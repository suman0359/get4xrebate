<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller {

	public function index() {
        $data = array();
        $data['header'] = $this->load->view('common/header');
        $data['header'] = $this->load->view('common/navigation');

        $data['main-content'] = $this->load->view('main-content');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }
}