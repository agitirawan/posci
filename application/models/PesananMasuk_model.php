<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PesananMasuk_model extends CI_Model
{

  public function get_all_Pesananmasuk()
  {
    return $this->db->get('pesananmasuk')->result_array();;
  }

  public function proses_tambah_data()
  {
    $data = [
      "nama" => $this->input->post('nama'),
      "alamat" => $this->input->post('alamat'),
      "jumalh" => $this->input->post('jumlah'),
      "TanggaL_pesanan" => $this->input->post('tanggal_pesanan'),
      "telepon" => $this->input->post('telepon'),
      "detail_pesanan" => $this->input->post('detail_pesanan'),
    ];
    $this->db->insert('pelanggan', $data);
  }

  public function hapus_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('pesananmasuk');
  }

  public function get_id_pesananmasuk($id)
  {
    return $this->db->get_where('pesananmasuk', ['id' => $id])->row_array();
  }
}

/* End of file Pelanggan_model.php */
/* Location: ./application/models/Pelanggan_model.php */