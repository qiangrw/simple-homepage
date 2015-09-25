<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
    {
        $data['title'] = 'Homepage';
        $data['active'] = array('active', '', '', '');
		$this->load->view('inc/header', $data);
		$this->load->view('home/index');
		$this->load->view('inc/footer');
    }

    public function publications()
    {
        $data['title'] = 'Publications';
        $data['active'] = array('', '', 'active', '');
		$this->load->view('inc/header', $data);
		$this->load->view('home/publications');
		$this->load->view('inc/footer');
    }

 
    public function experience()
    {
        $data['title'] = 'Experience';
        $data['active'] = array('', 'active', '', '');
		$this->load->view('inc/header', $data);
		$this->load->view('home/experience');
		$this->load->view('inc/footer');
    }

    public function honors()
    {
        $data['title'] = 'Honors';
        $data['active'] = array('', '', '', 'active');
		$this->load->view('inc/header', $data);
		$this->load->view('home/honors');
		$this->load->view('inc/footer');
	}
}
