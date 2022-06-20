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
  public function tambah_pembayaran()
  {
    $data['pembayaran'] = $this->Pembayaran_model->Semuadata_pembayaran();
    $this->load->view('templates/header');
    $this->load->view('pembayaran/tambah_data', $data);
    $this->load->view('templates/footer');
  }
  public function proses_tambah_pembayaran()
  {
    $this->Pembayaran_model->proses_tambah_pembayaran();
    redirect('pembayaran');
  }
  public function edit_data($id_pemabayaran)
  {
    $data['kategori'] = $this->Pembayaran_model->proses_id_pembayaran($id_pemabayaran);
    $this->load->view('templates/header');
    $this->load->view('pembayaran/edit_data', $data);
    $this->load->view('templates/footer');
  }
  public function proses_edit_pembayaran()
  {
    $this->Pembayaran_model->proses_edit_data();
    redirect('pembayaran');
  }
  public function proses_hapus_data($id_pemabayaran)
  {
    $this->Pembayaran_model->proses_hapus_data($id_pemabayaran);
    redirect('pembayaran');
  }
}



/* End of file Pembayaran.php */
/* Location: ./application/controllers/Pembayaran.php */