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

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_Login');
  }

  public function index()
  {
    $this->load->view('Login');
  }
  public function aksi_Login()
  {
    $Email = $this->input->post('Email');
    $Password = $this->input->post('Password');
    $where = array(
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
      echo ("Email dan password anda salah!!");
    }
  }
  function Logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('register'));
  }

}



/* End of file Login.php */
/* Location: ./application/controllers/Login.php */