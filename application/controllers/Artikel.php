<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Artikel',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
    );
    $this->load->view('layout/header', $data);
    $this->load->view('artikel/index', $data);
    $this->load->view('layout/footer', $data);
  }

  public function list()
  {
    if (!$this->ion_auth->is_admin()) {
      $this->session->set_flashdata('error', 'Hanya Admin yang dizinkan mengakses halaman ini');
      redirect('');
    }
  }
}

/* End of file Artikel.php */
