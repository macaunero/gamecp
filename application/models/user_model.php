<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function auth($table,$username,$password) {
		$query = $this->db->get_where($table,array('usr_name' => $username,'pass_word' => sha1($password)));
		if($query->num_rows() == 1) {
			$session_data = array(
				'acc_name'  => $query->row()->usr_name,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($session_data);
			$data = "OK";
			//<div id=\"member_panel\"><h4>帐号信息</h4><label>用户名: ".$username."</label><label>元宝: ".$query->row()->gold."个</label><a class=\"btn btn-info\" href=\"javascript:void(0);\" onclick=\"getgold1();\" >领取元宝</a> <a class=\"btn btn-info\" href=\"javascript:void(0);\" id=\"paymoney\" >充值</a><a class=\"btn btn-inverse\" href=\"javascript:void(0);\" id=\"logout\" name=\"logout\" onclick=\"logout();\">登出</a><label><a class=\"btn btn-primary\" href=\"javascript:void(0);\" id=\"game\" name=\"game\">进入游戏</a></label></div>
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
		$web_setting = $this->config->item('website_setting');
		$email_setting = $this->config->item('email_setting');
		$this->load->library('encrypt');
		$this->load->library('phpmailer/mailer');
		$query = $this->db->get_where($table,array('usr_name' => $username,'email' => $email));
		if($query->num_rows() == 1) {
			$username = $query->row()->usr_name;
			$email = $query->row()->email;
			$reset_key = $this->encrypt->encode($username, $web_setting['email_encrypt_key']);
			$this->db->update($table,array('reset_key' => $reset_key),array('usr_name' => $username,'email' => $email));
			$mail_body = "您好, ".$username."<br><br>按以下连结重设密码<br><a href=\"".base_url('reset/?code='.$reset_key)."\">".base_url('reset/?code='.$reset_key)."</a><br><br><br>".$web_setting['site_name']."营运团队";
			return $this->mailer->sendmail($email_setting,$email,$username,$web_setting['title_name'].' - 找回密碼',$mail_body);
		} else return "null";
	}

	function code_valid($table,$code) {
		$web_setting = $this->config->item('website_setting');
		$this->load->library('encrypt');
		$username = $this->encrypt->decode($code, $web_setting['email_encrypt_key']);
		$query = $this->db->get_where($table,array('usr_name' => $username,'reset_key' => $code));
		if($query->num_rows() == 1) {
			$data = array ('name' => $query->row()->usr_name,'email' => $query->row()->email);
			return $data;
		} else return false;
	}

	function reset_pw($table,$email,$key,$password) {
		$web_setting = $this->config->item('website_setting');
		$this->load->library('encrypt');
		$username = $this->encrypt->decode($key, $web_setting['email_encrypt_key']);
		$query = $this->db->get_where($table,array('usr_name' => $username,'email' => $email,'reset_key' => $key));
		if($query->num_rows() == 1) {
			$this->db->update($table,array('pass_word' => sha1($password),'reset_key' => ''),array('usr_name' => $username,'email' => $email));
			return "OK";
		} else return "null";
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */