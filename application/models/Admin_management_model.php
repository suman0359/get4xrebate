<?php

/**
 * 
 */
class Admin_Management_Model extends CI_Model {

    public function check_admin_login_info($admin_email, $admin_password) {
        $this->db->select('*');
        $this->db->from('tbl_administrator');
        $this->db->where('admin_email', $admin_email);
        $this->db->where('admin_password', md5($admin_password));
        $this->db->where('admin_status', 1);
        //$this->db->where('user_category', 'user');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function check_exist_email($email_address) {
    	$this->db->select('*');
        $this->db->from('tbl_administrator');
        $this->db->where('admin_email', $email_address);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function save_admin_info($data) {
        $this->db->insert('tbl_administrator', $data);
    }

    public function save_new_broker($data){
        $this->db->insert('tbl_brokers', $data);
    }

    public function update_selected_broker($data, $broker_id){
        $this->db->where('broker_id', $broker_id);
        $this->db->update('tbl_brokers', $data);
    }

    public function view_all_broker(){
        $this->db->select('*');
        $this->db->from('tbl_brokers');
        $this->db->order_by('broker_id', 'desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_selected_broker($broker_id){
        $this->db->select('*');
        $this->db->where('broker_id', $broker_id);
        $this->db->from('tbl_brokers');

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_broker($broker_id){
        $this->db->where('broker_id', $broker_id);
        $this->db->delete('tbl_brokers');
    }

    public function publish_broker_status($broker_id){
        $this->db->set('status', 0);
        $this->db->where('broker_id', $broker_id);
        $this->db->update('tbl_brokers');
    }

    public function unpublish_broker_status($broker_id){
        $this->db->set('status', 1);
        $this->db->where('broker_id', $broker_id);
        $this->db->update('tbl_brokers');
    }
}
