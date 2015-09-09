<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        
    }
    public function index() {
        $data = array();
        $user_login_id = $this->session->userdata('user_id');
        if ($user_login_id !== NULL) {
            $data['header'] = $this->load->view('common/dashboard/header');
        }else{
            $data['header'] = $this->load->view('common/header');
        }
        $data['header'] = $this->load->view('common/navigation');
        
        $data['slider'] = $this->load->view('slider');

        $data['main-content'] = $this->load->view('main-content');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
    }

}
