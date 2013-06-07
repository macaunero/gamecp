<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends MY_Controller {
	function __construct() {
		parent::__construct();
		if (!$this->session->userdata('logged_in')) redirect(base_url());
	}
	function index() {
		if (!is_null($this->input->post('serverid'))) {
			$choose_id = $this->input->post('serverid');
			$web_setting = $this->config->item('website_setting');
			foreach ($web_setting as $key => $value) {
				$data[$key] = $value;
			}
			$game_setting = $this->config->item('game_setting');
			foreach ($game_setting as $key => $value) {
				$data1[$key] = $value;
			}
			foreach ($data1['servers'] as $key => $value) {
				$data['server_name'][] = $key;
				$data['server_ip'][] = $value;
			}
			$select = rand(0,sizeof(sizeof($data['server_ip'][$choose_id])-1));
			$data['server'] = $data['server_ip'][0][$select];
			$data['serverName'] = $data['server_name'][$choose_id];
			$data['lineName'] = $data['server_name'][$choose_id];
			$data['isFullScreen'] = $data1['isFullScreen'];
			$data['username'] = $this->session->userdata('acc_name');
			$this->load->view('frontend/_game.php',$data);
		} else redirect(base_url());
	}
}

/* End of file game.php */
/* Location: ./application/controllers/game.php */