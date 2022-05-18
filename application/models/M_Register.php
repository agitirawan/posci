<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model M_Register_model
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

class M_Register extends CI_Model
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
    $full = $this->input->post('Fullname');
    $email = $this->input->post('Email');
    $password = $this->input->post('password');
    $where = array(
      'Email' => $email,
      'password' => md5($password)
    );
  }

  // ------------------------------------------------------------------------

}

/* End of file M_Register_model.php */
/* Location: ./application/models/M_Register_model.php */