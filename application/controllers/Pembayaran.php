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

  public function proses_hapus_data($id_pemabayaran)
  {
    $this->Pembayaran_model->proses_hapus_data($id_pemabayaran);
    redirect('pembayaran');
  }




  // transaksi
  public function transaksi() {

    $input = $this->input->post();
    
    $transaksi = array(

      'id_user' => $this->session->userdata('id_user'),
      'type'    => $this->input->post('type'),
      'status'  => "proses"
    );

    // insert 1
    $id_transaksi = $this->Pembayaran_model->insert_transaksi( $transaksi );


    // insert 2
    $detail_transaksi = array();
    foreach ($this->cart->contents() as $cart){

      array_push( $detail_transaksi, array(

        'id_transaksi'  => $id_transaksi,
        'id_menu'       => $cart['id'],
        'jumlah'        => $cart['qty']
      ) );
    }


    $this->Pembayaran_model->insert_detail_transaksi( $detail_transaksi );
    
    // bersihkan keranjang
    $this->cart->destroy();

    // kembali ke menu
    redirect('user/menu');
  }
}



/* End of file Pembayaran.php */
/* Location: ./application/controllers/Pembayaran.php */