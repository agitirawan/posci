<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Pembayaran_model_model
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

class Pembayaran_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function Semuadata_pembayaran()
  {
    return $this->db->get('pembayaran')->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file Pembayaran_model_model.php */
/* Location: ./application/models/Pembayaran_model_model.php */