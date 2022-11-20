<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Artikel_model');
    $this->load->model('Videos_model');
  }


  public function index()
  {
    // select artikel limit
    $data_artikel = $this->Artikel_model->get_artikel_limit(3);
    $data_videos = $this->Videos_model->get_videos_limit(3);
    $data = array(
      'title' => 'Home',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'data_artikel' => $data_artikel,
      'data_videos' => $data_videos,
    );
    $this->load->view('layout/header', $data);
    $this->load->view('index', $data);
    $this->load->view('layout/footer', $data);
  }
}

/* End of file Main.php */
