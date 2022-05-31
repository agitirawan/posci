<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//validasi level
		if ($this->session->userdata('level') != "admin") {

			redirect('auth', 'refresh');
		}
	}

	public function index()
	{
		$this->load->view('include/header.php');
		$this->load->view('dashboard');
		$this->load->view('include/footer.php');
	}
}
