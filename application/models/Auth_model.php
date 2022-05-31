<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Auth_model
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

class Auth_model extends CI_Model
{

  public function login($username, $password)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username,);
    $this->db->where('password', $password,);

    $query = $this->db->get();
    if ($query->num_rows() == 1) //jika data ditemukan
    {
      return $query->result();
    } else {
      return false;
    }
  }

  public function register()
  {
    $data = [
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'username' => htmlspecialchars($this->input->post('username', true)),
      'password' => htmlspecialchars(MD5($this->input->post('password'))),
      'email' => htmlspecialchars($this->input->post('email', true)),
      'notelp' => htmlspecialchars($this->input->post('notelp', true)),
      'level' => 'user',
    ];
    $this->db->insert('user', $data);
  }
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */