<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PesananMasuk_model extends CI_Model
{


  public function get_all_pesanan_masuk()
  {
    return $this->db->get('pesanan_masuk')->result_array();;
  }

  public function proses_tambah_data_pesanan_masuk()
  {
    $data = [
      "nama" => $this->input->post('nama'),
      "alamat" => $this->input->post('alamat'),
      "jumalh" => $this->input->post('jumlah'),
      "TanggaL_pesanan" => $this->input->post('tanggal_pesanan'),
      "telepon" => $this->input->post('telepon'),
      "detail_makanan" => $this->input->post('detail_makanan'),
    ];
    $this->db->insert('pesanan_masuk', $data);
  }

  public function hapus_data_pesanan_masuk($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('pesanan_masuk');
  }


  public function get_id_pesanan_masuk($id)
  {
    return $this->db->get_where('pesanan_masuk', ['id' => $id])->row_array();
  }
}

/* End of file PesananMasuk_model.php */
/* Location: ./application/models/PesananMasuk_model.php */