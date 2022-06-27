<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Shoopingcart_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Shoppingcart_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function insert_data()
  {
    $insert_data = array(
      "nam_menu" => $this->input->post('nam_menu'),
      "harga" => $this->input->post('harga'),
      "jumlah" => $this->input->post('jumlah'),
      "gambar" => $this->input->post('gambar'),
      "status" => $this->input->post('status'),
    );

    // This function add items into cart.
    $this->cart->insert('menu');
    redirect('menu');
  }
  public function remove()
  {
    $data = array();
    $this->cart->update('id_menu', $data);
    redirect('shoppingchart');
  }


  // ------------------------------------------------------------------------

}

/* End of file Shoopingcart_model.php */
/* Location: ./application/models/Shoopingcart_model.php */