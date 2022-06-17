<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Masterdata
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

class Makanan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Makanan_model');
  }

  public function index()
  {
    $data['menu'] = $this->Makanan_model->SemuaData_menu();
    $this->load->view('templates/header.php');
    $this->load->view('makanan/index.php', $data);
    $this->load->view('templates/footer.php');
  }

  public function tambah_makanan()
  {
    $data['menu'] = $this->Makanan_model->SemuaData_menu();
    $this->load->view('templates/header.php');
    $this->load->view('makanan/tambah_data', $data);
    $this->load->view('templates/footer.php');
  }
  public function proses_tambah_makanan()
  {
    $this->Makanan_model->proses_tambah_makanan();
    redirect('Makanan');
  }
  public function edit_data($id_menu)
  {
    $data['menu'] = $this->Makanan_model->Ambil_id_makanan($id_menu);
    $this->load->view('templates/header.php');
    $this->load->view('makanan/edit_data', $data);
    $this->load->view('templates/footer.php');
  }
}



/* End of file Masterdata.php */
/* Location: ./application/controllers/Masterdata.php */