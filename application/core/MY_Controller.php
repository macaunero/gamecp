<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	protected $_data = array();

	function __construct() {
		parent::__construct();
		/*if (!$this->session->userdata('logged_in')) {
			redirect('auth');
		}*/
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */