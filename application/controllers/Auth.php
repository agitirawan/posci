<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Auth
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('level') == "admin") {
            redirect('dashboard', 'refresh');
        } elseif ($this->session->userdata('level') == "kasir") {
            redirect('kasir', 'refresh');
        } elseif ($this->session->userdata('level') == "user") {
            redirect('user/menu', 'resfresh');
        }

        $data['title'] = 'admin Login';
        $this->load->view('auth/login.php', $data);
    }

    public function login()
    {
        $data['title'] = 'kasir Login';
        $this->load->view('auth/login.php', $data);
    }

    public function register()
    {
        if ($this->session->userdata('level') == "user") {
            redirect('user', 'refresh');
        }
        //$data['title'] = 'User Register';
        //$this->load->view('auth/register.php', $data);
    }

    public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars(MD5($this->input->post('pw')));

        $ceklogin = $this->Auth_model->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row);
            //kita set userdata pada session dengan nama user dan isi uername kita isikan username yang ada pada $row
            $this->session->set_userdata('kasir', $row->username);
            $this->session->set_userdata('level', $row->level);

            //var_dump($row);
            if ($this->session->userdata('level') == "admin") {
                redirect('dashboard');
            } elseif ($this->session->userdata('level') == "kasir") {
                redirect('kasir');
            } elseif ($this->session->userdata('level') == "user") {
                redirect('user');
            }
        } else {
            $data['pesan'] = 'email dan password anda salah';
            $data['title'] = 'Login';
            $this->load->view('auth/login.php', $data);
        }
    }

    public function proses_register()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pw', 'Password', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'User Register';
            $this->load->view('auth/register.php', $data);
        } else {
            $this->Auth_model->register();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat, akun anda berhasil dibuat.
          </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect();
    }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */