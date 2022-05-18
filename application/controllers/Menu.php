<?php class Daftarmenu extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->model('Daftarmenu_model');
  }

  function index()
  {
    $data['Daftarmenu'] = $this->Daftarmenu_model->get_all_Daftarmenu();
    //$this->load->view('include/header.php');
    $this->load->view('Daftarmenu.php', $data);
    //$this->load->view('include/footer.php');
  }
  public function proses_tambah_data()
  {
    $this->Daftarmenu_model->proses_tambah_data();
    redirect('Daftarmenu');
  }
  public function proses_edit_data_Daftarmenu()
  {
    $this->Daftarmenu->proses_edit_data_Daftarmenu();
    redirect('Daftarmenu');
  }
  public function hapus_data($id)
  {
    $this->Daftarmenu_model->hapus_data($id);
    redirect('Daftarmneu');
  }
  public function edit_data($id)
  {
    $data['Daftarmenu'] = $this->Daftarmenu_model->get_id_Daftarmenu($id);
    //$this->load->view('include/header.php');
    //$this->load->view('MenuSaji/MenuSaji.php');
    $this->load->view('edit_data.php', $data);
    //$this->load->view('include/footer.php');
  }
}
