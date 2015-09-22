<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
    {
        $data['title'] = 'Homepage';
		$this->load->view('inc/header', $data);
		$this->load->view('home/index');
		$this->load->view('inc/footer');
	}
}
