<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Data_kasir_model
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

class Data_kasir_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function SemuaData_transaksi()
  {
    return $this->db->get('transksi')->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file Data_kasir_model.php */
/* Location: ./application/models/Data_kasir_model.php */