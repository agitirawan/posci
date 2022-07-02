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
    $data['transksi'] = $this->Data_kasir_model->all_transaksi();
    $this->load->view('templates/header.php');
    $this->load->view('datakasir/index.php', $data);
    $this->load->view('templates/footer.php');
  }
  public function tambah_transaksi()
  {
    $data['transksi'] = $this->Data_kasir_model->all_transaksi();
    $this->load->view('templates/header');
    $this->load->view('data_kasir/tambah_data', $data);
    $this->load->view('templates/footer');
  }
  public function proses_tambah_transaksi()
  {
    $this->Data_kasir_model->proses_tambah_transaksi();
    redirect('transksi');
  }
  public function edit_data($id_transaksi)
  {
    $data['transaksi'] = $this->Data_kasir_model->proses_id_transaksi($id_transaksi);
    $this->load->view('templates/header');
    $this->load->view('data_kasir/edit_data', $data);
    $this->load->view('templates/footer');
  }
  public function proses_edit_data()
  {
    $this->Data_kasir_model->proses_edit_data();
    redirect('transaksi');
  }

  public function proses_hapus_data($id_transaksi)
  {
    $this->Data_kasir_model->proses_hapus_data($id_transaksi);
    redirect('transaksi');
  }
}


/* End of file Datakasir.php */
/* Location: ./application/controllers/Datakasir.php */