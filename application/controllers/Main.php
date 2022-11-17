<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{


  public function index()
  {
    $data = array(
      'title' => 'Home',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
    );
    $this->load->view('layout/header', $data);
    $this->load->view('index', $data);
    $this->load->view('layout/footer', $data);
  }
}

/* End of file Main.php */
