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

class Minuman extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Minuman_model');
  }

  public function index()
  {
    $data['menu'] = $this->Minuman_model->SemuaData_Minuman();
    $this->load->view('templates/header.php');
    $this->load->view('minuman/index.php', $data);
    $this->load->view('templates/footer.php');
  }
}


/* End of file Masterdata.php */
/* Location: ./application/controllers/Masterdata.php */