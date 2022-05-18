<?php class MenuSaji_model extends CI_Model
{
  function get_all_MenuSaji()
  {
    return $this->db->get('menu_saji')->result_array();;
  }
  public function Proses_Tambah_data()
  {
    $data = [
      "Nama Makanan" => $this->input->post('namamakanan'),
      "Nama Minuman" => $this->input->post('namaminuman'),
      "Gambar" => $this->input->post('gambar'),
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
