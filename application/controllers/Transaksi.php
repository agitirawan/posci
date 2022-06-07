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
    $this->load->view('templates/header.php');
    $this->load->view('transaksi/index.php', $data);
    $this->load->view('templates/footer.php');
  }

  public function proses_tambah_data()
  {
    $config['upload_path']          = './gambar/';
    $config['allowed_types']        = 'gif|jpg|PNG';
    $config['max_size']             = 2048;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')) {
      echo "gagal upload";
    } else {
      $gambar = $this->upload->data();
      $gambar = $gambar['file_name'];
      $tanggal = $this->input->post('tanggal', TRUE);
      $qty = $this->input->post('qty', TRUE);
      $gambar = $this->input->post('gambar', TRUE);
      $total_bayar = $this->input->post('total_bayar', TRUE);
      $jumlah_tunai = $this->input->post('jumlah_tunai', TRUE);
      $pelanggan = $this->input->post('pelanggan', TRUE);

      $data = array(
        'tanggal' => $tanggal,
        'qty' => $qty,
        'gambar' => $gambar,
        'total_bayar' => $total_bayar,
        'jumlah_tunai' => $jumlah_tunai,
        'pelanggan' => $pelanggan,
      );
      $this->db->insert('transaksi', $data);
      $this->load->view('transkasi/index.php', $data);
      redirect('Transaksi');
    }
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
    $this->load->view('templates/header.php');
    // $this->load->view('pelanggan/Pelanggan.php');
    $this->load->view('edit_transaksi.php', $data);
    $this->load->view('templates/footer.php');
  }
}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */