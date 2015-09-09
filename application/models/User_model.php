<?php

/**
 * Login Check Model
 */
class User_model extends CI_Model {

    public function check_login_info($user_email, $user_password) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', md5($user_password));
        $this->db->where('user_status', 1);
        //$this->db->where('user_category', 'user');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function check_login_register($user_email) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_email', $user_email);
        //$this->db->where('status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}
