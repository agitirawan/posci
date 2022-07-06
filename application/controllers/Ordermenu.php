<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Ordermenu
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

class Ordermenu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('include/header');
    $this->load->view('kasir/ordermenu');
    $this->load->view('include/footer');
  }
}


/* End of file Ordermenu.php */
/* Location: ./application/controllers/Ordermenu.php */