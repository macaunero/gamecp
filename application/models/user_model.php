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
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */