<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Tambah_pesanan
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

class Tambah_pesanan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('cart');
    $this->load->model('Shoppingcart_model');
    $this->load->model('Detail_model');
    $this->load->model('Tambah_pesanan_model');
  }

  public function index()
  {
    $data['menu'] = $this->Tambah_pesanan_model->all_menu();
    $data['kategori'] = $this->Kategori_model->all_kategori();
    $this->load->view('kasir//template_header');
    $this->load->view('kasir/tambah_pesanan', $data);
    $this->load->view('kasir//template_footer');
  }
  public function kasir()
  {
    // ambil data kategori dan menu
    $menu = $this->User_model->getMenu();
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
  }
}


/* End of file Tambah_pesanan.php */
/* Location: ./application/controllers/Tambah_pesanan.php */