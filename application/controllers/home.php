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
		$this->load->view('frontend/_header.php',$data);
		$this->load->view('frontend/_main.php',$data);
		$this->load->view('frontend/_footer.php',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */