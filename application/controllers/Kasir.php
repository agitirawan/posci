<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Kasir
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

class Kasir extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ordermenu_model');
  }

  public function index()
  {
    $this->load->view('kasir/template/header');
    $this->load->view('kasir/index');
    $this->load->view('kasir/template/footer');
  }
  public function ordermenu()
  {
    $this->load->view('kasir/template/header');
    $this->load->view('kasir/ordermenu');
    $this->load->view('kasir/template/footer');
  }
}


/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */