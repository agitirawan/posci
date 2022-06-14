<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Minuman_model_model
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

class Minuman_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function SemuaData_Minuman()
  {
    return $this->db->get('menu')->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file Minuman_model_model.php */
/* Location: ./application/models/Minuman_model_model.php */