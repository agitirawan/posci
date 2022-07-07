<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Kasir
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

class Kasir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Metode_model');
        $this->load->model('Pemesanan_model');
    }

    public function index()
    {
        $this->load->view('kasir/template/header');
        // $this->load->view('kasir/index');
        $this->load->view('kasir/template/footer');
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
}


/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */