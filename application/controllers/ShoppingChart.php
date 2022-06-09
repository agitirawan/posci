<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller ShoppingChart
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

class ShoppingChart extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('');
    $this->load->view('shoppingchart/index');
    $this->load->view('');
  }
}


/* End of file ShoppingChart.php */
/* Location: ./application/controllers/ShoppingChart.php */