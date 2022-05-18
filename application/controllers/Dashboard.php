<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('include/header.php');
		$this->load->view('dashboard');
		$this->load->view('include/footer.php');
	}

	public function register()
	{
		$this->load->view('Register');
	}
	public function login()
	{
		$this->load->view('Login');
	}
}
