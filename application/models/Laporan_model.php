<?php class MenuSaji_model extends CI_Model
{
  function get_all_Laporan()
  {
    return $this->db->get('Laporan')->result_array();;
  }
  public function Proses_Tambah_data()
  {
    $data = [
      "tanggal" => $this->input->post('tanggal'),
      "nama_makanan_minuman" => $this->input->post('nama_makanan_minuman'),
      "total_bayar" => $this->input->post('total_bayar'),
      "total_tunai" => $this->input->post('total_tunai'),
      "jumlah_total" => $this->input->post('jumlah_total'),
      "pelanggan" => $this->input->post('pelanggan'),
    ];
    $this->db->insert('transaksi', $data);
  }
  public function hapus_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('transaksi');
  }
  public function get_id_MenuSaji($id)
  {
    return $this->db->get_where('transaksi', ['id' => $id])->row_array();
  }
}
