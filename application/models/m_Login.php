<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model M_Login_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class m_Login extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    $email = $this->input->post('Email');
    $password = $this->input->post('password');
    $where = array(
      'Email' => $email,
      'password' => md5($password)
    );
  }

  // ------------------------------------------------------------------------

}

/* End of file M_Login_model.php */
/* Location: ./application/models/M_Login_model.php */