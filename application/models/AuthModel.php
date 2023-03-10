<?php

class AuthModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function login($data) {
    $user = $this->db->get_where('users', ['username' => $data['username']])->row_array();

		if(password_verify($data['password'], $user['password'])) {
			if($user['is_active'] == 0) {
				$this->session->set_flashdata('is_active', false);
				return false;
			}

			$cabang = $this->db->get_where("cabang", ["id_user" => $user['id']])->row_array();
			
      if($cabang) {
        $this->session->set_userdata('SESS_KANIGARA_CABANGID', $cabang['id']);
      }
			
			$this->session->set_userdata('SESS_KANIGARA_USERID', $user['id']);
			$this->session->set_userdata('SESS_KANIGARA_USERNAME', $user['username']);
			$this->session->set_userdata('SESS_KANIGARA_ROLEID', $user['role_id']);

			return true;
		}

		return false;
  }
}