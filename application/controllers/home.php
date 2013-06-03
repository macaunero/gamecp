<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$web_setting = $this->config->item('website_setting');
		foreach ($web_setting as $key => $value) {
			$data[$key] = $value;
		}
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('acc_name') != NULL) {
			$this->load->model('user_model');
			$data['acc_name'] = $this->session->userdata('acc_name');
			$data['logged_in'] = $this->session->userdata('logged_in');
			$temp = $this->user_model->user_info("user",$data['acc_name']);
			$data['gold'] = $temp[0]['gold'];
			$data['affiliate'] = $temp[0]['affiliate'];
		} else {
			$data['acc_name'] = NULL;
			$data['logged_in'] = FALSE;
		}
		$this->load->view('frontend/_header.php',$data);
		$this->load->view('frontend/_main.php',$data);
		$this->load->view('frontend/_footer.php',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */