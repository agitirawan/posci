<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Pembayaran
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

class Pembayaran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pembayaran_model');
  }

  public function index()
  {
    $data['pembayaran'] = $this->Pembayaran_model->Semuadata_pembayaran();
    $this->load->view('templates/header.php');
    $this->load->view('pembayaran/index', $data);
    $this->load->view('templates/footer.php');
  }
}


/* End of file Pembayaran.php */
/* Location: ./application/controllers/Pembayaran.php */