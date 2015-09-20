<?php 

class Myaccount_model extends CI_Model{

	public function view_my_profile($my_user_id){
		$this->db->select('*');
		$this->db->where('user_id', $my_user_id);
		$this->db->from('tbl_users');

		$query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
	}

	public function save_my_updated_profile_info($my_user_id, $data){
		$this->db->where('user_id', $my_user_id);
        $this->db->update('tbl_users', $data);
	}

	// public function published_menu_status_by_menu_id($menu_id){
 //        $this->db->set('menu_status', 1);
 //        $this->db->where('menu_id', $menu_id);
 //        $this->db->update('tbl_menu');
 //    }
    
 //    public function delete_menu_info($menu_id){
 //        $this->db->where('menu_id', $menu_id);
 //        $this->db->delete('tbl_menu');
 //    }
}
