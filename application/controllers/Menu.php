<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Menu
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

class Menu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Menu_model');
    $this->load->model('Kategori_model');
  }

  public function index()
  {
    $data['menu'] = $this->Menu_model->all_menu();
    $this->load->view('templates/header');
    $this->load->view('menu/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah_menu()
  {
    $data['menu'] = $this->Menu_model->all_menu();
    $data['kategori'] = $this->Kategori_model->all_kategori();
    $this->load->view('templates/header');
    $this->load->view('menu/tambah_data', $data);
    $this->load->view('templates/footer');
  }
  public function proses_tambah_menu()
  {
    $config['upload_path']          = './assets/gambar/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 10000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')) {
      echo "gagal upload";

      echo $this->upload->display_errors();
    } else {
      $gambar = $this->upload->data();
      $gambar = $gambar['file_name'];
      $id_kategori = $this->input->post('id_ketergori', TRUE);
      $nam_menu = $this->input->post('nam_menu', TRUE);
      $harga = $this->input->post('harga', TRUE);
      $jumlah = $this->input->post('jumlah', TRUE);

      $data = array(
        'id_kategori' => $id_kategori,
        'nam_menu' => $nam_menu,
        'harga' => $harga,
        'jumlah' => $jumlah,
        'gambar' => $gambar,
        'status' => "dijual",
      );
      $this->db->insert('menu', $data);
      redirect('menu');
    }
  }
  public function edit_data($id_menu)
  {
    $data['menu'] = $this->Menu_model->proses_id_menu($id_menu);
    $this->load->view('templates/header');
    $this->load->view('menu/edit_data', $data);
    $this->load->view('templates/footer');
  }
  public function proses_edit_data()
  {
    $this->Menu_model->proses_edit_data();
    redirect('menu');
  }

  public function proses_hapus_data($id_menu)
  {
    $this->Menu_model->proses_hapus_data($id_menu);
    redirect('menu');
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

    redirect('user/menu');
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

    redirect('user/shoppingcart');
  }
}
