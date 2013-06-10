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

	function recharge() {
		if (!is_null($this->input->post('serverid')) && !is_null($this->input->post('user')) && ($this->session->userdata('acc_name') == $this->input->post('user'))) {
			$choose_id = $this->input->post('serverid');
			$user = $this->input->post('user');
			$this->load->model('user_model');
			$user_info = $this->user_model->user_info("user",$user);
			$gold = $user_info[0]['gold'];
			if ($gold > 0) {
				$web_setting = $this->config->item('website_setting');
				foreach ($web_setting as $key => $value) {
					$data[$key] = $value;
				}
				$game_setting = $this->config->item('game_setting');
				foreach ($game_setting as $key => $value) {
					$data1[$key] = $value;
				}
				foreach ($data1['servers_api'] as $key => $value) {
					$data2['api'][] = $value;
				}
				$server_api_ip = $data2['api'][$choose_id];
				$money = $gold;
				$paynum = rand(100000, 999999999);
				$model = "zy";
				$paygold = $money;
				$api_security_ticket = $data1[api_key];
				$ticket = md5($api_security_ticket . $model . $paynum . $user . $money . $paygold . time());
				echo $ticket;
				/*if ($this->user_model->reset_user_gold("user",$user,0)) {
					$this->user_model->log_recharge("user",$user,$money);
					$url_link = "http://".$server_api_ip."charge?Mode=".$model."&PayNum=".$paynum."&PayToUser=".$user."&PayMoney=".$money."&PayGold=".$paygold."&PayTime=".time()."&ticket=$ticket";
					echo $url_link;
					/*$data = file_get_contents($url);
					if (strcmp($data, "ok")) echo "OK"; else echo "failtocharge";*/
				} echo "0dberror"; //reset to 0 error*/
			} else echo "";
		} else echo "error";
	}
}

/* End of file game.php */
/* Location: ./application/controllers/game.php */