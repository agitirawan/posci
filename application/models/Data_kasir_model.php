<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Data_kasir_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Data_kasir_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function  all_transaksi()
  {
    return $this->db->get('transaksi')->result_array();
  }
  public function proses_tambah_transaksi()
  {
    $data = [
      "id_transaksi" => $this->input->post('id_transaksi'),
      "id_user" => $this->input->post('id_user'),
      "telepon" => $this->input->post('telepon'),
      "type" => $this->input->post('type'),
      "status" => $this->input->post('status'),
      "tanggal" => $this->input->post('tanggal'),
    ];
    $this->db->insert('transksi', $data);
  }

  public function proses_id_transaksi($id_transaksi)
  {
    return $this->db->get_where('transaksi', ['id_transaksi' => $id_transaksi])->row_array();
  }

  public function proses_hapus_data($id_transaksi)
  {
    $this->db->where('id_transaksi', $id_transaksi);
    $this->db->delete('transaksi');
  }
  public function proses_edit_data()
  {
    $data = [
      "id_transaksi" => $this->input->post('id_transaksi'),
      "id_user" => $this->input->post('id_user'),
      "telepon" => $this->input->post('telepon'),
      "type" => $this->input->post('type'),
      "status" => $this->input->post('status'),
      "tanggal" => $this->input->post('tanggal'),
    ];
    $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
    $this->db->update('transaksi', $data);
  }

  // ------------------------------------------------------------------------

}

/* End of file Data_kasir_model.php */
/* Location: ./application/models/Data_kasir_model.php */