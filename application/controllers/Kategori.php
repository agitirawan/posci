<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Kategori
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

class Kategori extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kategori_model');
  }

  public function index()
  {
    $data['kategori'] = $this->Kategori_model->all_kategori();
    $this->load->view('templates/header.php');
    $this->load->view('kategori/index.php', $data);
    $this->load->view('templates/footer.php');
  }

  public function tambah_kategori()
  {
    $data['kategori'] = $this->Kategori_model->all_kategori();
    $this->load->view('templates/header.php');
    $this->load->view('kategori/tambah_data', $data);
    $this->load->view('templates/footer.php');
  }
  public function proses_tambah_kategori()
  {
    $this->Kategori_model->proses_tambah_kategori();
    redirect('kategori');
  }
  public function edit_data($id_kategori)
  {
    $data['kategori'] = $this->Kategori_model->proses_id_kategori($id_kategori);
    $this->load->view('templates/header.php');
    $this->load->view('kategori/edit_data', $data);
    $this->load->view('templates/footer.php');
  }
  public function proses_edit_data()
  {
    $this->Kategori_model->proses_edit_data();
    redirect('kategori');
  }

  public function proses_hapus_data($id_kategori)
  {
    $this->Kategori_model->proses_hapus_data($id_kategori);
    redirect('kategori');
  }
}


/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */