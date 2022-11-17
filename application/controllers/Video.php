<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array(
      'title' => 'Video',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
    );
    $this->load->view('layout/header', $data);
    $this->load->view('video/index', $data);
    $this->load->view('layout/footer', $data);
  }

  public function list()
  {
    $this->akbr_auth->must_login();
    if (!$this->akbr_auth->is_admin()) {
      show_404();
    }
  }
}

/* End of file Video.php */
