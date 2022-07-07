<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Kategori_model
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

class Menu_model extends CI_Model
{

  public function all_menu()
  {
    return $this->db->get('menu')->result_array();
  }

  public function proses_tambah_menu()
  {
    $data = [
      "nam_menu" => $this->input->post('nam_menu'),
      "harga" => $this->input->post('harga'),
      "jumlah" => $this->input->post('jumlah'),
      "gambar" => $this->input->post('gambar'),
      "status" => $this->input->post('status'),
    ];
    $this->db->insert('menu', $data);
  }

  public function proses_id_menu($id_menu)
  {
    return $this->db->get_where('menu', ['id_menu' => $id_menu])->row_array();
  }

  public function proses_hapus_data($id_menu)
  {
    $this->db->where('id_menu', $id_menu);
    $this->db->delete('menu');
  }
  public function proses_edit_data()
  {
    $data = [
      "nam_menu" => $this->input->post('nam_menu'),
      "harga" => $this->input->post('harga'),
      "jumlah" => $this->input->post('jumlah'),
      "gambar" => $this->input->post('gambar'),
      "status" => $this->input->post('status'),
    ];
    $this->db->where('id_menu', $this->input->post('id_menu'));
    $this->db->update('menu', $data);
  }
}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */