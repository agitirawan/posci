<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Datakasir
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

class Datakasir extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Data_kasir_model');
  }

  public function index()
  {
    $data['transksi'] = $this->Data_kasir_model->SemuaData_transaksi();
    $this->load->view('templates/header.php');
    $this->load->view('datakasir/index.php', $data);
    $this->load->view('templates/footer.php');
  }
}


/* End of file Datakasir.php */
/* Location: ./application/controllers/Datakasir.php */