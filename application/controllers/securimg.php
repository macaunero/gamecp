<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Securimg extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$this->load->library('securimage/securimage');
		$img = new Securimage();
		$img->image_width = 85;
		$img->image_height = 15;
		$img->perturbation = 0;
		$img->num_lines = 1;
		$img->code_length = rand(4,6);
		$img->text_color = new Securimage_Color('#F00');
		$img->use_transparent_text = true;
		$img->text_transparency_percentage = 30;
		$img->show();
	}
}

/* End of file securimg.php */
/* Location: ./application/controllers/securimg.php */