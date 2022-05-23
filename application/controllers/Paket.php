<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Paket
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

class Paket extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('paket_model');
  }


  public function index()
  {
    $this->load->view('Paket');
  }
}


/* End of file Paket.php */
/* Location: ./application/controllers/Paket.php */