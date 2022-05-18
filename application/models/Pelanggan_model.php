<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{

  public function get_all_pelanggan()
  {
    return $this->db->get('pelanggan')->result_array();;
  }

  public function proses_tambah_data()
  {
    $data = [
      "nama" => $this->input->post('nama'),
      "jenis_kelamin" => $this->input->post('jenis_kelamin'),
      "alamat" => $this->input->post('alamat'),
      "telepon" => $this->input->post('telepon'),
    ];
    $this->db->insert('pelanggan', $data);
  }

  public function hapus_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('pelanggan');
  }

  public function get_id_pelanggan($id)
  {
    return $this->db->get_where('pelanggan', ['id' => $id])->row_array();
  }
}

/* End of file Pelanggan_model.php */
/* Location: ./application/models/Pelanggan_model.php */