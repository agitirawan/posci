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
        $data['transaksi'] = $this->History_model->get_all_history();
        $this->load->view('kasir/template/template_header');
        $this->load->view('kasir/history', $data);
        $this->load->view('kasir/template/template_footer');
    }
    public function transaksi()
    {
        $data['transaksi'] = $this->transaksi_model->get_all_transaksi();
        $this->load->view('kasir/template/template_header');
        $this->load->view('kasir/transaksi', $data);
        $this->load->view('kasir/template/template_footer');
    }
    public function tambah_data_transaksi($id_transaksi)
    {
        $data = array(
            'id'      => $id_transaksi,
            'name'    => $id_transaksi['nam_menu'],
            'qty'     => 1,
            'price'   => $id_transaksi['harga'],
            'id'      => $id_transaksi['id_user'],
            'number'  => $id_transaksi['telpon'],
            'status'  => $id_transaksi['status'],
            'date'    => $id_transaksi['tanggal'],
            'date'    => $id_transaksi['tanggal_selesai'],

        );


        $this->db->insert($data);


        $transaksi = $this->Kasir_model->proses_id_transaksi($id_transaksi);
        redirect('kasir/transaksi');
    }
    public function tambah_data_history($id_transaksi)
    {
        $data = array(
            'id'      => $id_transaksi,
            'name'    => $id_transaksi['nam_menu'],
            'qty'     => 1,
            'price'   => $id_transaksi['harga'],
            'id'      => $id_transaksi['id_user'],
            'number'  => $id_transaksi['telpon'],
            'status'  => $id_transaksi['status'],
            'date'    => $id_transaksi['tanggal'],
            'date'    => $id_transaksi['tanggal_selesai'],

        );
        $this->db->insert($data);
        $transaksi = $this->Kasir_model->proses_id_transaksi($id_transaksi);
        redirect('kasir/history');
    }
    public function insert_data_transaksi()
    {
        $this->Transaksi_model->insert_data();
    }
    public function insert_data_history()
    {
        $this->History_model->insert_data();
    }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */