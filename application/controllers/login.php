<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$web_setting = $this->config->item('website_setting');
		if ($this->input->post('username') && $this->input->post('password')) {
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));
			echo $username;
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