<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$web_setting = $this->config->item('website_setting');
		foreach ($web_setting as $key => $value) {
			$data[$key] = $value;
		}
		$reset_code = $this->input->get("code");
		$reset_code = str_replace(" ","+",$reset_code);
		$this->load->model('user_model');
		$check_valid = $this->user_model->code_valid('user',$reset_code);
		if ($check_valid) {
			$data['name'] = $check_valid['name'];
			$data['email'] = $check_valid['email'];
			$data['code'] = $reset_code;
			$this->load->view('frontend/_header.php',$data);
			$this->load->view('frontend/_reset.php',$data);
			$this->load->view('frontend/_footer.php',$data);
		} else { redirect(base_url()); }
	}
	function doreset() {
		$this->load->model('user_model');
		if ($this->input->post('email') && $this->input->post('vcode') && $this->input->post('pass')) {
			$email = $this->input->post('email');
			$key = $this->input->post('vcode');
			$password = $this->security->xss_clean($this->input->post('pass'));
			$data['reset_pw'] = $this->user_model->reset_pw("user",$email,$key,$password);
			print_r($data['reset_pw']);
		} else { redirect(base_url()); }
	}
}

/* End of file reset.php */
/* Location: ./application/controllers/reset.php */