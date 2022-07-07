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

    public function login($email, $pw)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email,);
        $this->db->where('pw', $pw,);

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
            'email' => htmlspecialchars($this->input->post('email', true)),
            'pw' => htmlspecialchars(MD5($this->input->post('pw'))),
            'telepon' => htmlspecialchars($this->input->post('telepon', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),



        ];
        $this->db->insert('user', $data);
    }
    public function logout()
    {
    }
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */