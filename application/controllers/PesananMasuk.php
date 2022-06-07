<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesananmasuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesananMasuk_model');
    }

    public function index()
    {
        $data['pesanan_masuk'] = $this->PesananMasuk_model->get_all_pesanan_masuk();
        $this->load->view('templates/header.php');
        $this->load->view('pesanan_masuk/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function proses_tambah_data_pesanan_masuk()
    {
        $this->PesananMasuk_model->proses_tambah_data_pesanan_masuk();
        redirect('pesanan_masuk');
    }
    public function proses_edit_data_pesanan_masuk()
    {
        $this->PesananMasuk_model->proses_tambah_data_pesanan_masuk();
        redirect('pesanan_masuk');
    }

    public function hapus_data_pesanan_masuk($id)
    {
        $this->PesananMasuk_model->hapus_data_pesanan_masuk($id);
        redirect('pesanan_masuk');
    }
    public function edit_data_pesanan_masuk($id)
    {
        $data['pesanan_masuk'] = $this->PesananMasuk_model->get_id_Pesanan_masuk($id);
        $this->load->view('templates/header.php');
        $this->load->view('edit_data_pesanan_masuk.php', $data);
        $this->load->view('templates/footer.php');
    }
}

/* End of file Pesanan_masuk.php */
/* Location: ./application/controllers/PesananMasuk.php */