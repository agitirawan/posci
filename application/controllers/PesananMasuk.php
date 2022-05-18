<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesananmasuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') !== 'Login') {
        //   redirect('/');
        // }
        $this->load->model('PesananMasuk_model');
    }

    public function index()
    {
        $this->load->view('include/header.php');
        $this->load->view('PesananMasuk');
        $this->load->view('include/footer.php');
    }

    public function read()
    {
        header('Content-type: application/json');
        if ($this->pesananMasuk->read()->num_rows() > 0) {
            foreach ($this->PesananMasuk_model->read()->result() as $pesananMasuk) {
                $data[] = array(
                    'nama' => $pesananMasuk->nama,
                    'alamat' => $pesananMasuk->alamat,
                    'tgl_pesanan' => $pesananMasuk->tgl_pesanan,
                    'jumlah' => $pesananMasuk->jumlah,
                    'telepon' => $pesananMasuk->telepon,
                    'detail_pesanan' => $pesananMasuk->detail_pesanan,
                    'action' => '<button class="btn btn-sm btn-success" onclick="edit(' . $pesananMasuk->id . ')">Edit</button> <button class="btn btn-sm btn-danger" onclick="remove(' . $pesananMasuk->id . ')">Delete</button>'
                );
            }
        } else {
            $data = array();
        }
        $pelanggan = array(
            'data' => $data
        );
        echo json_encode($pelanggan);
    }

    public function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tgl_pesanan' => $this->input->post('tgl_pesanan'),
            'jumlah' => $this->input->post('jumlah'),
            'detail_pesanan' => $this->input->post('detail_pesanan'),
            'telepon' => $this->input->post('telepon'),

        );
        if ($this->PesananMasuk_model->create($data)) {
            echo json_encode('sukses');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        if ($this->PesananMasuk_model->delete($id)) {
            echo json_encode('sukses');
        }
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jumlah' => $this->input->post('telepon'),
            'tgl_pesanan' => $this->input->post('tgl_pesanan'),
            'detail_pesanan' => $this->input->post('detail_pesanan'),
            'telepon' => $this->input->post('telepon'),

        );
        if ($this->pelanggan_model->update($id, $data)) {
            echo json_encode('sukses');
        }
    }

    public function get_pelanggan()
    {
        $id = $this->input->post('id');
        $pesananmasuk = $this->pesananMasuk_model->getSupplier($id);
        if ($pesananmasuk->row()) {
            echo json_encode($pesananmasuk->row());
        }
    }

    public function search()
    {
        header('Content-type: application/json');
        $PesananMasuk = $this->input->post('PesananMasuk');
        $search = $this->PesananMasuk_model->search($PesananMasuk);
        foreach ($search as $PesananMasuk) {
            $data[] = array(
                'id' => $PesananMasuk->id,
                'text' => $PesananMasuk->nama
            );
        }
        echo json_encode($data);
    }
}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */