<?php class Menu_model extends CI_Model
{
  function get_all_Menu()
  {
    return $this->db->get('menu')->result_array();;
  }
  public function Tampil_data()
  {
    $data = [
      "ukuran" => $this->input->post('ukuran'),
      "keterangan" => $this->input->post('keterangan'),
      "Harga" => $this->input->post('Harga'),
    ];
    $this->db->insert('menu', $data);
  }
  public function get_id_paket($id)
  {
    return $this->db->get_where('menu', ['id' => $id])->row_array();
  }
}
