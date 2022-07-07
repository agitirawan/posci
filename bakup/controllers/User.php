<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller User
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

class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('cart');
    $this->load->model('Shoppingcart_model');
    $this->load->model('Detail_model');
  }

  public function index()
  {
    $this->load->view('user/template/header');
    $this->load->view('user/home');
    $this->load->view('user/template/footer');
  }

  // fitur menu , Kategori
  public function menu()
  { 

    // ambil data kategori dan menu
    $menu = $this->User_model->getMenu();
    $kategori = $this->User_model->all_kategori();

    

    $data_menu = array();
    foreach ( $kategori AS $kt ) {

      // ambil data menu berdasarkan id_kategori
      $id_kategori = $kt['id_kategori'];
      $ambilDTMenu_id_kategori = $this->User_model->ambil_data_menu_Id_kategori( $id_kategori );

      array_push( $data_menu, array(

        'kategori'  => $kt,
        'menu'      => $ambilDTMenu_id_kategori
      ) );
    }










    $data['tampil'] = $data_menu;
    $data['kategori'] = $kategori;

    $this->load->view('user/template/header');
    $this->load->view('user/menu', $data);
    $this->load->view('user/template/footer');
  }

  public function getMenu()
  {

    $this->load->view('user/template/header');
    $this->load->view('user/menu');
    $this->load->view('user/template/footer');
  }


  public function shoppingcart()
  {
    $this->load->view('user/template/header');
    $this->load->view('user/shoppingcart');
    $this->load->view('user/template/footer');
  }
  public function insert_data()
  {
    $this->shoppingcart_model->insert_data();
  }


  public function pembayaran()
  {
    $this->load->view('user/template/header');
    $this->load->view('user/pembayaran');
    $this->load->view('user/template/footer');
  }
  public function detail_view()
  {
    $this->load->view('user/template/header');
    $this->load->view('user/detail_view');
    $this->load->view('user/template/footer');
  }
  public function detail()
  {
    $data['proses'] = $this->Detail_model->proses_detail();
    $data['content'] = "user/menu";
    $this->load->view('user/menu', $data);
  }
  public function detail_tampil($id_menu)
  {
    $detail = $this->Detail_model->get_detail($id_menu);
    $data['menu'] = $detail;
    $this->load->view('user/menu', $data);
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */