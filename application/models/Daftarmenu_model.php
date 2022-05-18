<?php class Daftarmenu_model extends CI_Model
{
  function get_all_Daftarmenu()
  {
    return $this->db->get('daftarmenu')->result_array();;
  }
  public function Proses_Tambah_data()
  {
    $data = [
      "tanggal" => $this->input->post('tanggal'),
      "no_meja" => $this->input->post('no_meja'),
      "no_order" => $this->input->post('no_order'),
      "nama" => $this->input->post('nama'),
      "jenis_makanan" => $this->input->post('jenis_makanan'),
      "qty" => $this->input->post('qty'),
      "jumlah_bayar" => $this->input->post('jumlah_bayar'),
      "pembayarn" => $this->input->post('pembayaran'),
    ];
    $this->db->insert('daftarmenu', $data);
  }
  public function hapus_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('daftarmenu');
  }
  public function get_id_Daftarmenu($id)
  {
    return $this->db->get_where('daftarmenu', ['id' => $id])->row_array();
  }
}
