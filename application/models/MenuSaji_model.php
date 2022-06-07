<?php class MenuSaji_model extends CI_Model
{
  function get_all_menu_saji()
  {
    return $this->db->get('menu_saji')->result_array();;
  }
  public function proses_tambah_data_pesananmasuk()
  {
    $data = [
      "Nama Makanan" => $this->input->post('namamakanan'),
      "Nama Minuman" => $this->input->post('namaminuman'),
      "Harga" => $this->input->post('Harga'),
    ];
    $this->db->insert('menu_saji', $data);
  }
  public function hapus_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('Menu_saji');
  }
  public function get_id_MenuSaji($id)
  {
    return $this->db->get_where('menu_saji', ['id' => $id])->row_array();
  }
}
