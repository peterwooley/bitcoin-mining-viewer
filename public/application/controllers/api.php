<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->helper('url');
		redirect(base_url());
	}

	/**
	 * Return profile information for the given miner.
	 */
	public function profile($token) {
		$this->load->model("profile");
		
		// Debugging stuff, we'll get to it later.
		//$this->load->library("FirePHPCore/fb");
		//$fp = FirePHP::getInstance(true);
		//$fp->warn('$token', $token);
		
		$profile = $this->profile->get($token);

		$this->_render($profile);
	}
	
	/**
	 * Return stats on current block.
	 */
	public function block() {
		$this->load->model("block");
		
		$this->_render($this->block->get());
	}

	private function _render($object) {
		echo json_encode($object);	
	}

}

