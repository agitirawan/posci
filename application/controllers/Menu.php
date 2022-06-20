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
    $this->load->view('templates/header');
    $this->load->view('menu/tambah_data', $data);
    $this->load->view('templates/footer');
  }
  public function proses_tambah_menu()
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
      $id_kategori = $this->input->post('id_kategori', TRUE);
      $nam_menu = $this->input->post('nam_menu', TRUE);
      $harga = $this->input->post('harga', TRUE);
      $jumlah = $this->input->post('jumlah', TRUE);
      $gambar = $this->input->post('gambar', TRUE);
      $status = $this->input->post('status', TRUE);

      $data = array(
        'id_kategori' => $id_kategori,
        'nam_menu' => $nam_menu,
        'harga' => $harga,
        'jumlah' => $jumlah,
        'gambar' => $gambar,
        'status' => $status,
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
}
