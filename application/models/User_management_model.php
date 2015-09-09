<?php

/**
 * 
 */
class User_management_model extends CI_Model {

    public function check_exist_email($email_address) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_email', $email_address);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function save_user_info($data) {
        $this->db->insert('tbl_users', $data);
    }

}
