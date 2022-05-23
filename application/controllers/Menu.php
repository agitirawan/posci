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

    $this->load->model('Menu');
  }
    

  public function index()
  {
    $data['Menu'] = $this->Menu_model->get_all_Menu();
    $this->load->view('Menu');
  }
  public function tampil_data(){
    $this->Menu_model->tampil_data();
    redirect('Menu');
  }
  
}


/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */