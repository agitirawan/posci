<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller History
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

class History extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('kasir/template_footer');
    $this->load->view('kasir/history');
    $this->load->view('kasir/transaksi');
  }
}


/* End of file History.php */
/* Location: ./application/controllers/History.php */