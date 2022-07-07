<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Transaksi
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

class Transaksi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Transaksi_model');
  }

  public function index()
  {
    $data['transaksi_detail'] = $this->Transaksi_model->getdata_transaksi();
    $this->load->view('templates/header');
    $this->load->view('transaksi/index', $data);
    $this->load->view('templates/footer');
    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-data-transaksi.pdf";
  }
}


/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */