<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		redirect(base_url());
	}
	function login() {
		$web_setting = $this->config->item('website_setting');
		$this->load->library('securimage/securimage');
		$this->load->model('user_model');
		if ($this->input->post('usr') && $this->input->post('pwd') && $this->input->post('vcode')) {
			$img = new Securimage();
			$valid = $img->check($this->security->xss_clean($this->input->post('vcode')));
			$username = $this->security->xss_clean($this->input->post('usr'));
			$password = $this->security->xss_clean($this->input->post('pwd'));
			if($valid == true) {
				$data['auth_login'] = $this->user_model->auth("user",$username,$password);
				print_r($data['auth_login']);
			} else echo "error";
		} else { redirect(base_url()); }
		/*
		echo "<div id=\"member_panel\"><h4>登陆帐号</h4><form id=\"login\" action=\"login\" method=\"post\"><input class=\"input\" name=\"username\" type=\"text\" placeholder=\"用户名\" /><input class=\"input\" name=\"password\" type=\"password\" placeholder=\"密码\" /><img src=\"".site_url('securimg?id='.md5(uniqid(time())))."\" alt='captcha' /><input class=\"vcode\" name=\"vcode\" type=\"text\" placeholder=\"验证码\" /><button class=\"btn btn-primary\">登陆</button><a class=\"btn btn-info\" href=\"#\" id=\"reg\" name=\"reg\" onclick=\"return false;\">注册</a><a class=\"btn btn-inverse\" href=\"#\" id=\"forgot\" name=\"forgot\">忘记密码</a></form></div>";
		
		*/
	}
	function logout() {
		$this->session->sess_destroy();
		echo "done";
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */