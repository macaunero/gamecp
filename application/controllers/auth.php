<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		redirect(base_url());
	}
	function login() {
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
	}
	function logout() {
		$this->session->sess_destroy();
		echo "done";
	}
	function register() {
		$this->load->library('securimage/securimage');
		$this->load->model('user_model');
		if ($this->input->post('name') && $this->input->post('email') && $this->input->post('pass') && $this->input->post('vcode')) {
			$img = new Securimage();
			$valid = $img->check($this->security->xss_clean($this->input->post('vcode')));
			$username = $this->security->xss_clean($this->input->post('name'));
			$email = $this->security->xss_clean($this->input->post('email'));
			$password = $this->security->xss_clean($this->input->post('pass'));
			if($valid == true) {
				$data['reg_user'] = $this->user_model->register("user",$username,$email,$password);
				print_r($data['reg_user']);
			} else echo "error";
		} else { redirect(base_url()); }
	}
	function getpw() {
		$this->load->library('securimage/securimage');
		$this->load->model('user_model');
		if ($this->input->post('name') && $this->input->post('email') && $this->input->post('vcode')) {
			$img = new Securimage();
			$username = $this->security->xss_clean($this->input->post('name'));
			$email = $this->security->xss_clean($this->input->post('email'));
			$valid = $img->check($this->security->xss_clean($this->input->post('vcode')));
			if($valid == true) {
				$data['fpw'] = $this->user_model->find_pw("user",$username,$email);
				print_r($data['fpw']);
			} else echo "error";
		} else { redirect(base_url()); }
	}
	function resetpw($reset_code) {
		$this->load->model('user_model');
		$check_valid = $this->user_model->code_valid('user',$reset_code);
		if ($check_valid) {
			echo $check_valid;
		} else { redirect(base_url()); }
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */