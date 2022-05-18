<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Transaksi_model');
  }

  public function index()
  {
    $data['Transaksi'] = $this->Transaksi_model->get_all_Transaksi();
    $this->load->view('include/header.php');
    $this->load->view('Transaksi/Transaksi.php', $data);
    $this->load->view('include/footer.php');
  }

  public function proses_tambah_data()
  {
    $this->Transaksi_model->proses_tambah_data();
    redirect('Transaksi');
  }
  public function proses_edit_data()
  {
    $this->Transaksi_model->proses_tambah_data();
    redirect('Transaksi');
  }

  public function hapus_data($id)
  {
    $this->Transaksi_model->hapus_data($id);
    redirect('Transaksi');
  }

  public function edit_data($id)
  {
    $data['Transaksi'] = $this->Transaksi_model->get_id_Transaksi($id);
    $this->load->view('include/header.php');
    // $this->load->view('pelanggan/Pelanggan.php');
    $this->load->view('edit_data.php', $data);
    $this->load->view('include/footer.php');
  }
}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */