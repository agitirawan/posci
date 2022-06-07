<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{

    public function get_all_transaksi()
    {
        return $this->db->get('transaksi')->result_array();;
    }

    public function proses_tambah_data()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal'),
            "qty" => $this->input->post('qty'),
            "gambar" => $this->input->post('gambar'),
            "total_bayar" => $this->input->post('total_bayar'),
            "jumlah_tunai" => $this->input->post('jumlah_tunai'),
            "pelanggan" => $this->input->post('pelanggan'),
        ];
        $this->db->insert('transaksi', $data);
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
    }

    public function get_id_Transaksi($id)
    {
        return $this->db->get_where('transaksi', ['id' => $id])->row_array();
    }
}

/* End of file Pelanggan_model.php */
/* Location: ./application/models/Pelanggan_model.php */