<?php class Paket_model extends CI_Model
{
  function get_all_Paket()
  {
    return $this->db->get('paket')->result_array();;
  }
  public function Tampil_data()
  {
    $data = [
      "ukuran" => $this->input->post('ukuran'),
      "keterangan" => $this->input->post('keterangan'),
      "Harga" => $this->input->post('Harga'),
    ];
    $this->db->insert('paket', $data);
  }
  public function get_id_paket($id)
  {
    return $this->db->get_where('paket', ['id' => $id])->row_array();
  }
}
