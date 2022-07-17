<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kasir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ordermenu_model');
        $this->load->model('User_model');
        $this->load->model('Metode_model');
        $this->load->model('Pemesanan_model');
        $this->load->model('Transaksi_model');
        $this->load->model('Menu_model');
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
        $this->load->view('kasir/antrian', $data);
        $this->load->view('kasir/template/template_footer');
    }
    public function transaksi()
    {
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi();
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
    public function tambah_data_antrian($id_transaksi)
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
        redirect('kasir/antrian');
    }
    public function insert_data_transaksi()
    {
        $this->Transaksi_model->insert_data();
    }
    public function insert_data_antrian()
    {
        $this->Antrian_model->insert_data();
    }
    public function tambah_pesanan()
    {
        // $kasir = $this->tambah_pesanan_model->tambah_pesanan($id_transaksi);
        redirect('kasir/tambah_pesanan');
    }






    // tambah 
    public function pesanbaru()
    {


        // ambil data kategori dan menu
        $kategori = $this->User_model->all_kategori();


        $data_menu = array();
        foreach ($kategori as $kt) {

            // ambil data menu berdasarkan id_kategori
            $id_kategori = $kt['id_kategori'];
            $ambilDTMenu_id_kategori = $this->User_model->ambil_data_menu_Id_kategori($id_kategori);

            array_push($data_menu, array(

                'kategori'  => $kt,
                'menu'      => $ambilDTMenu_id_kategori
            ));
        }

        $data['tampil'] = $data_menu;
        $data['kategori'] = $kategori;

        $this->load->view('kasir/template/template_header');
        $this->load->view('kasir/tambah_pesanan', $data);
        $this->load->view('kasir/template/template_footer');
    }



    public function pembayaran()
    {

        $this->load->view('kasir/template/template_header');
        $this->load->view('kasir/tambah_pembayaran');
        $this->load->view('kasir/template/template_footer');
    }


    public function proses_tambah_keranjang($id_menu)
    {

        $this->load->library('cart');
        $menu = $this->Menu_model->proses_id_menu($id_menu);



        // tambah cart
        $data = array(
            'id'      => $id_menu,
            'qty'     => 1,
            'price'   => $menu['harga'],
            'name'    => $menu['nam_menu'],
            'coupon'         => $menu['gambar']
        );

        $this->cart->insert($data);

        // html 
        $html = '<script>alert("Item berhasil ditambahkan")</script>';
        $this->session->set_flashdata('msg', $html);

        redirect('kasir/pesanbaru');
    }
    public function remove($rowid)
    {
        $this->load->library('cart');

        $data = array(
            'rowid'      => $rowid,
            'qty'     => 0,
        );
        $this->cart->update($data);
        // html 
        $html = '<script>alert("Item berhasil dihapus")</script>';
        $this->session->set_flashdata('msg', $html);

        redirect('kasir/shoppingcart');
    }



    public function update($rowid)
    {

        $permintaan = $this->input->post('permintaan');

        $this->load->library('cart');

        $data = array(
            'rowid'      => $rowid,
            'qty'     => $permintaan,
        );
        $this->cart->update($data);
        redirect('kasir/shoppingcart');
    }


    // tambah pemesanan 
    public function tambahpemesanan()
    {

        $data = array(

            'nama'          => $this->input->post('nama'),
            'jenis_pesanan' => "offline",
            'id_user'       => $this->session->userdata('id_user'),
            'telpon'        => "",
            'type'          => $this->input->post('tipe'),
            'status'        => "proses"
        );


        print_r($data);
        $id_transaksi = $this->Transaksi_model->insert_kasir($data);


        // data transaksi detail
        $data_detail = array();
        foreach ($this->cart->contents() as $isi) {

            array_push($data_detail, array(
                'id_transaksi'  => $id_transaksi,
                'id_menu'   => $isi['id'],
                'jumlah'    => $isi['qty']
            ));
        }

        $this->Transaksi_model->insert_multiple($data_detail);


        // pembayaran 
        $data_pembayaran = array(

            'id_transaksi'  => $id_transaksi,
            'type'      => "cash",
            'nominal'   => $this->input->post('kembalian')
        );
        $this->Transaksi_model->pembayaran($data_pembayaran);

        // mengkosongkan cart
        $this->cart->destroy();

        redirect('kasir/pesanbaru');
    }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */