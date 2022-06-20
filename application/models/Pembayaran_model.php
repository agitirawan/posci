<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Pembayaran_model_model
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

class Pembayaran_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function Semuadata_pembayaran()
  {
    return $this->db->get('pembayaran')->result_array();
  }
  public function proses_tambah_pembayaran()
  {
    $data = [
      "id_pembayaran" => $this->input->post('id_pembayaran'),
      "id_transaksi" => $this->input->post('id_transaksi'),
      "type" => $this->input->post('type'),
      "nominal" => $this->input->post('nominal'),
      "tanggal" => $this->input->post('tanggal'),
    ];
    $this->db->insert('pembayaran', $data);
  }
  public function proses_id_pembayaran($id_pembayaran)
  {
    return $this->db->get_where('pembayaran', ['id_pembayaran' => $id_pembayaran])->row_array();
  }
  public function proses_hapus_data($id_pembayaran)
  {
    $data = [
      "id_pembayaran" => $this->input->post('id_pembayaran'),
      "id_transaksi" => $this->input->post('id_transaksi'),
      "type" => $this->input->post('type'),
      "nominal" => $this->input->post('nominal'),
      "tanggal" => $this->input->post('tanggal'),
    ];
    $this->db->where('id_pembayaran', $this->input->post('id_pembayaran'));
    $this->db->update('pembayaran', $data);
  }



  // ------------------------------------------------------------------------

}

/* End of file Pembayaran_model_model.php */
/* Location: ./application/models/Pembayaran_model_model.php */