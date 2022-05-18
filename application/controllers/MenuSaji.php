<?php class MenuSaji extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('MenuSaji_model');
    }

    function index()
    {
        $data['MenuSaji'] = $this->MenuSaji_model->get_all_MenuSaji();
        $this->load->view('include/header.php');
        $this->load->view('MenuSaji/MenuSaji.php', $data);
        $this->load->view('include/footer.php');
    }
    public function proses_tambah_data()
    {
        $this->MenuSaji_model->proses_tambah_data();
        redirect('MenuSaji');
    }
    public function proses_edit_data_menusaji()
    {
        $this->MenuSaji_model->proses_edit_menusaji();
        redirect('MenuSaji');
    }
    public function hapus_data($id)
    {
        $this->MenuSaji_model->hapus_data($id);
        redirect('MenuSaji');
    }
    public function edit_data($id)
    {
        $data['Menusaji'] = $this->MenuSaji_model->get_id_MenuSaji($id);
        $this->load->view('include/header.php');
        //$this->load->view('MenuSaji/MenuSaji.php');
        $this->load->view('edit_data.php', $data);
        $this->load->view('include/footer.php');
    }
}
