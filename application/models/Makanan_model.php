<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Makanan_model
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

class Makanan_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function SemuaData_menu()
  {
    return $this->db->get('menu')->result_array();
  }
  public function proses_tambah_makanan()
  {
    $data = [
      "nam_menu" => $this->input->post('nama makanan'),
      "harga" => $this->input->post('harga'),
      "jumlah" => $this->input->post('jumlah'),
      "gambar" => $this->input->post('gambar'),
    ];
    $this->db->insert('mneu', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Makanan_model.php */
/* Location: ./application/models/Makanan_model.php */