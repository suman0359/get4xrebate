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
}
