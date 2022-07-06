<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Transaksi_model
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

class Transaksi_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getdata_transaksi()
  {
    $data_transaksi_detail = $this->db->get('transaksi_detail');
    return $data_transaksi_detail->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */