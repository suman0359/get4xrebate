<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Referrals
 *
 * @author tasfir
 */
class Referrals extends CI_Controller {
	public function index(){
		$data = array();
        $data['header'] = $this->load->view('common/dashboard/header');
        $data['header'] = $this->load->view('common/dashboard/navigation');
        $data['main-content'] = $this->load->view('common/dashboard/referrals');
        $data['footer'] = $this->load->view('common/footer');
        $this->load->view('home', $data);
	}
}