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

class Kategori_model extends CI_Model
{

  public function all_kategori()
  {
    return $this->db->get('kategori')->result_array();
  }

  public function proses_tambah_kategori()
  {
    $data = [
      "nama" => $this->input->post('nama'),
      "create_at" => $this->input->post('create_at'),
    ];
    $this->db->insert('kategori', $data);
  }

  public function proses_id_kategori($id_kategori)
  {
    return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row_array();
  }

  public function proses_hapus_data($id_kategori)
  {
    $this->db->where('id_kategori', $id_kategori);
    $this->db->delete('kategori');
  }
  public function proses_edit_data()
  {
    $data = [
      "nama" => $this->input->post('nama'),
      "create_at" => $this->input->post('create_at'),
    ];
    $this->db->where('id_kategori', $this->input->post('id_kategori'));
    $this->db->update('kategori', $data);
  }
}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */