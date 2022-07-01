<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Detail_model
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

class Detail_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function proses_detail()
  {
    $sql = $this->db->get('menu');

    return $sql;
  }
  public function get_detail($id_menu = null)
  {
    $query = $this->db->get_where('menu', array('menu' => $id_menu))->row();
    return $query;
  }

  // ------------------------------------------------------------------------

}

/* End of file Detail_model.php */
/* Location: ./application/models/Detail_model.php */