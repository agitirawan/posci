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
    $this->load->view('templates/header.php');
    $this->load->view('menu/index.php', $data);
    $this->load->view('templates/footer.php');
  }

  public function tambah_menu()
  {
    $data['menu'] = $this->Menu_model->all_menu();
    $this->load->view('templates/header.php');
    $this->load->view('menu/tambah_data', $data);
    $this->load->view('templates/footer.php');
  }
  public function proses_tambah_menu()
  {
    $this->Menu_model->proses_tambah_menu();
    redirect('menu');
  }
  public function edit_data($id_menu)
  {
    $data['menu'] = $this->Menu_model->proses_id_menu($id_menu);
    $this->load->view('templates/header.php');
    $this->load->view('menu/edit_data', $data);
    $this->load->view('templates/footer.php');
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
