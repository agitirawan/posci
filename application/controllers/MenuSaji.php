<?php class MenuSaji extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('MenuSaji_model');
    }

    function index()
    {
        $data['menusaji'] = $this->MenuSaji_model->get_all_menu_saji();
        $this->load->view('templates/header.php');
        $this->load->view('menu_saji/index.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function proses_tambah_data()
    {
        $this->MenuSaji_model->proses_tambah_data();
        redirect('menu_saji');
    }
    public function proses_edit_data_menusaji()
    {
        $this->MenuSaji_model->proses_edit_menusaji();
        redirect('menu_saji');
    }
    public function hapus_data($id)
    {
        $this->MenuSaji_model->hapus_data($id);
        redirect('menu_saji');
    }
    public function edit_data($id)
    {
        $data['menu_saji'] = $this->MenuSaji_model->get_id_MenuSaji($id);
        $this->load->view('templates/header.php');
        //$this->load->view('MenuSaji/MenuSaji.php');
        $this->load->view('edit_menusaji.php', $data);
        $this->load->view('templates/footer.php');
    }
}
