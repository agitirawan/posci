<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kasir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ordermenu_model');
        $this->load->model('Metode_model');
        $this->load->model('Pemesanan_model');
    }

    public function index()
    {
        // $this->load->view('kasir/template/header');
        // // $this->load->view('kasir/index');
        // $this->load->view('kasir/template/footer');

        // sementara
        $this->order();
    }
    public function ordermenu()
    {
        $this->load->view('kasir/template/header');
        $this->load->view('kasir/ordermenu');
        $this->load->view('kasir/template/footer');
    }



    public function order()
    {

        $where = ['status' => "proses"];
        $transaksi = $this->Pemesanan_model->ambil_transaksi_detail($where);
        $metode = $this->Metode_model->nonpreemtive($transaksi);

        $data['pemesanan'] = $metode;

        // header('Content-Type: application/json');
        // print_r( $metode );
        $this->load->view('kasir/template/template_header');
        $this->load->view('kasir/view_order', $data);
        $this->load->view('kasir/template/template_footer');
    }


    public function keputusan($status)
    {

        $id_transaksi = $this->input->get('id_transaksi');

        $this->Pemesanan_model->konfirmasi_pemesanan($id_transaksi, $status);
        redirect('kasir/order');
    }
    public function history()
    {
        $this->load->view('kasir/template/template_header');
        $this->load->view('kasir/history');
        $this->load->view('kasir/template/template_footer');
    }
    public function transaksi()
    {
        $this->load->view('kasir/template/template_header');
        $this->load->view('kasir/transaksi');
        $this->load->view('kasir/template/template_footer');
    }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */