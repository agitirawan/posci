<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Transaksi_model
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

class Transaksi_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function insert_data()
  {
    $insert_data = array(
      "id_transaksi" => $this->input->post('id_transaksi'),
      "nama" => $this->input->post('nama'),
      "jenis_pesanan" => $this->input->post('jenis_pesanan'),
      "id_user" => $this->input->post('id_user'),
      "telpon" => $this->input->post('telpon'),
      "type" => $this->input->post('id_user'),
      "status" => $this->input->post('status'),
      "tanggal" => $this->input->post('id_user'),
      "tanggal_selesai" => $this->input->post('tanggal_selesai'),



    );
    $this->db->insert('transaksi');
    redirect('transaksi');
  }


  // ------------------------------------------------------------------------

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */