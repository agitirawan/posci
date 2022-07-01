
<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model User_model
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

class User_model extends CI_Model
{
  public function getMenu()
  {
    return $this->db->get('menu')->result_array();
  }

  public function getMenuMakanan()
  {
    $this->db->select('*');
    $this->db->from('menu m');
    $this->db->join('kategori k', 'k.id_kategori = m.id_kategori');

    $query = $this->db->get();
    return $query->result_array();
  }
  public  function all_kategori()
  {

    return $this->db->get('kategori')->result_array();
  }


  // ambil data menu berdasarkan id_kategori
  public function ambil_data_menu_Id_kategori( $id_kategori ) {

    $where = ['id_kategori' => $id_kategori];
    $this->db->where( $where );
    return $this->db->get('menu')->result_array();
  }
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */