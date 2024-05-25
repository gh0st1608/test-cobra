<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('user/view', array('users' => $this->db->get('users')->result()));
	}
}
