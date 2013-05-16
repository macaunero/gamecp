<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$web_setting = $this->config->item('website_setting');
		$this->load->library('securimage/securimage');
		if ($this->input->post('username') && $this->input->post('password') && $this->input->post('vcode')) {
			$img = new Securimage();
			$valid = $img->check($this->security->xss_clean($this->input->post('vcode')));
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));
			if($valid == true) {
				echo $this->input->post('vcode');
			} else echo "<div id=\"member_panel\"><h4>登陆帐号</h4><form id=\"login\" action=\"login\" method=\"post\"><input class=\"input\" name=\"username\" type=\"text\" placeholder=\"用户名\" /><input class=\"input\" name=\"password\" type=\"password\" placeholder=\"密码\" /><img src=\"".site_url('home/securimg?id='.md5(uniqid(time())))."\" alt='captcha' /><input class=\"vcode\" name=\"vcode\" type=\"text\" placeholder=\"验证码\" /><button class=\"btn btn-primary\">登陆</button><a class=\"btn btn-info\" href=\"#\" id=\"reg\" name=\"reg\" onclick=\"return false;\">注册</a><a class=\"btn btn-inverse\" href=\"#\" id=\"forgot\" name=\"forgot\">忘记密码</a></form></div>";
		} else { redirect(base_url()); }
		/*foreach ($web_setting as $key => $value) {
			$data[$key] = $value;
		}
		$this->load->view('frontend/_header.php',$data);
		$this->load->view('frontend/_main.php',$data);
		$this->load->view('frontend/_footer.php',$data);*/
		//echo $_POST['username'];
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */