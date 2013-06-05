<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function auth($table,$username,$password) {
		$query = $this->db->get_where($table,array('usr_name' => $username,'pass_word' => $password));
		if($query->num_rows() == 1) {
			$session_data = array(
				'acc_name'  => $query->row()->usr_name,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($session_data);
			$data = "<div id=\"member_panel\"><h4>帐号信息</h4><label>用户名: ".$username."</label><label>已推广: 0</label><label>可兑换元宝: 0个</label><label>元宝: ".$query->row()->gold."个</label><a class=\"btn btn-info\" href=\"#\" >推广页</a> <a class=\"btn btn-info\" href=\"#\" >兑换页</a><a class=\"btn btn-inverse\" href=\"javascript:void(0);\" id=\"logout\" name=\"logout\" onclick=\"logout();\">登出</a><label><a class=\"btn btn-primary\" href=\"javascript:void(0);\" id=\"game\" name=\"game\" onclick=\"logout();\">进入游戏</a></label></div>";
			return $data;
		} else return "null";
	}
	
	function user_info($table,$username) {
		$query = $this->db->get_where($table,array('usr_name' => $username));
		return $query->result_array();
	}

	function register($table,$username,$email,$password,$aff='') {
		$query = $this->db->get_where($table,array('usr_name' => $username));
		if($query->num_rows() == 1) {
			return "0"; //账号名已被占用
		} else {
			$data = array (
				'role_id' => 0,
				'usr_name' => $username,
				'pass_word' => sha1($password),
				'email' => $email,
				'reg_time' => date("Y-m-d H:i:s"),
				'reg_ip' => '',
				'last_logintime' => date("Y-m-d H:i:s"),
				'affiliate' => 0
			);
			$query = $this->db->insert($table,$data);
			if($query) {
				$session_data = array(
					'acc_name'  => $username,
					'logged_in' => TRUE
				);
				$this->session->set_userdata($session_data);
				return "OK";
			} else return "null";
		}
	}

	function find_pw($table,$username,$email) {
		$email_setting = $this->config->item('email_setting');
		//$this->load->library('email');
		$this->email->initialize($email_setting);
		$query = $this->db->get_where($table,array('usr_name' => $username,'email' => $email));
		if($query->num_rows() == 1) {
			$username = $query->row()->usr_name;
			$email = $query->row()->email;
			$this->email->from('macaunero@gmail.com', 'macaunero');
			$this->email->to($email);
			$this->email->subject('Email Test');
			$this->email->message('<font color=red>Testing the email class.</font>');
			$this->email->send();
			return $this->email->print_debugger();
		} else return "null";
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */