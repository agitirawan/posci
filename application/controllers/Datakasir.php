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
    $this->load->model('User_model');
  }

  public function index()
  {
    $transaksi = $this->Data_kasir_model->all_transaksi();

    $data_transaksi = array();
    foreach ($transaksi as $tr) {

      // cek apakah pembeli adalah user ? 
      $nama = $tr['nama'];
      if ($tr['jenis_pesanan'] == "online") {

        $user = $this->User_model->user_berdasarkan_id($tr['id_user'])->row_array();
        $nama = $user['nama'];
      }

      array_push($data_transaksi, array(

        'transaksi' => $tr,
        'user'      => $nama
      ));
    }

    $data['transaksi'] = $data_transaksi;


    $this->load->view('templates/header.php');
    $this->load->view('datakasir/index.php', $data);
    $this->load->view('templates/footer.php');
  }


  public function detail($id_transaksi)
  {

    $transaksi = $this->Data_kasir_model->transaksi_detail($id_transaksi);
    $transaksi_detail = $this->Data_kasir_model->transaksi_detail_menu($id_transaksi);

    // cek apakah pembeli adalah user ? 
    $nama = $transaksi['nama'];
    $user = [];
    if ($transaksi['jenis_pesanan'] == "online") {

      $user = $this->User_model->user_berdasarkan_id($transaksi['id_user'])->row_array();
      $nama = $user['nama'];
    }

    $data['transaksi'] = $transaksi;
    $data['transaksi_detail'] = $transaksi_detail;
    $data['user'] = $user;
    $data['nama'] = $nama;

    $this->load->view('templates/header.php');
    $this->load->view('datakasir/detail_transaksi', $data);
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