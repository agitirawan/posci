<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Kasir_model
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

class Kasir_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }


  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function tambah_data_transaksi()
  {
    $insert_data = array(
      "id_transaksi" => $this->input->post('id_transaksi'),
      "nama" => $this->input->post('nama'),
      "jenis_pesanan" => $this->input->post('jenis_pesanan'),
      "id_user" => $this->input->post('id_user'),
      "telpon" => $this->input->post('telepon'),
      "type" => $this->input->post('type'),
      "status" => $this->input->post('status'),
      "tanggal" => $this->input->post('tanggal'),
      "tanggal_selesai" => $this->input->post('tanggal_selesai'),



    );
    $this->db->insert('transaksi');
    redirect('transaksi');
  }

  // ------------------------------------------------------------------------

}

/* End of file Kasir_model.php */
/* Location: ./application/models/Kasir_model.php */