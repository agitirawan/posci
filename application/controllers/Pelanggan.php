<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // if ($this->session->userdata('status') !== 'Login') {
    //   redirect('/');
    // }
    $this->load->model('Pelanggan_model');
  }

  public function index()
  {
    $data['pelanggan'] = $this->Pelanggan_model->get_all_pelanggan();
    $this->load->view('include/header.php');
    $this->load->view('pelanggan/Pelanggan.php', $data);
    $this->load->view('include/footer.php');
  }

  public function proses_tambah_data()
  {
    $this->Pelanggan_model->proses_tambah_data();
    redirect('pelanggan');
  }
  public function proses_edit_data()
  {
    $this->Pelanggan_model->proses_tambah_data();
    redirect('pelanggan');
  }

  public function hapus_data($id)
  {
    $this->Pelanggan_model->hapus_data($id);
    redirect('pelanggan');
  }

  public function edit_data($id)
  {
    $data['pelanggan'] = $this->Pelanggan_model->get_id_pelanggan($id);
    $this->load->view('include/header.php');
    // $this->load->view('pelanggan/Pelanggan.php');
    $this->load->view('edit_data.php', $data);
    $this->load->view('include/footer.php');
  }
}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */