<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Register extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Register');
  }

  public function index()
  {
    $this->load->view('register');
  }
  public function aksi_Register()
  {
    $fullname = $this->input->post('Fullname');
    $Email = $this->input->post('Email');
    $Password = $this->input->post('Password');
    $where = array(
      'Fullname' => $fullname,
      'Email' => $Email,
      'Password' => md5($Password)
    );
    $cek = $this->load->m_Login->cek_Login("user", $where)->num_rows();
    if ($cek > 0) {

      $data_session = array(
        'Email' => $Email,
        'status' => "Login"
      );
      $this->session->set_userdata($data_session);

      redirect(base_url("user"));
    } else {
      echo ("Name ,Email dan password anda salah!!");
    }
  }
  function Logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('Register'));
  }
}



/* End of file Login.php */
/* Location: ./application/controllers/Login.php */