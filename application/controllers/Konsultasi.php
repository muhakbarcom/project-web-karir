<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

  public $module = 'konsultasi';
  public $className = '';

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Konsultasi_model');
    $this->className = $this->router->fetch_class();
  }

  public function check_is_user_have_msg()
  {
    $check_is_user_have_msg = $this->Konsultasi_model->check_is_user_have_msg();
    return $check_is_user_have_msg;
  }

  public function user()
  {

    $data_konsultasi = $this->Konsultasi_model->get_user_msg();

    $data = array(
      'title' => $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'action' => base_url('Konsultasi/user_post'),
      'data_konsultasi' => $data_konsultasi,
    );
    $this->load->view('layout/header', $data);
    $this->load->view('konsultasi/user', $data);
    // $this->load->view('layout/footer', $data);
  }

  public function get_user_chat()
  {
    $check_is_user_have_msg = $this->check_is_user_have_msg();

    if ($check_is_user_have_msg > 0) {
      $data_konsultasi = $this->Konsultasi_model->get_user_msg();
    } else {
      $data_konsultasi = [];
    }

    $response = array(
      'status' => 'success',
      'data' => $data_konsultasi,
    );

    echo json_encode($response);
  }

  public function user_post()
  {
    $check_is_user_have_msg = $this->check_is_user_have_msg();
    $message = $this->input->post('msg');
    $id_user = $this->session->userdata('user_id');

    // jika pernah chat
    if ($check_is_user_have_msg > 0) {
      // cari id konsultasi
      $id_konsultasi = $this->Konsultasi_model->get_id_konsultasi($id_user);
      // insert data konsultasi detail
      $data_konsultasi_detail = array(
        'konsultasi_id' => $id_konsultasi,
        'from_id' => $id_user,
        'text' => $message,
        'created_at' => date('Y-m-d H:i:s'),
      );

      $this->Konsultasi_model->insert_detail($data_konsultasi_detail);
      $response = array(
        'status' => 'success',
        'message' => 'Konsultasi berhasil dikirim',
        'data' => $data_konsultasi_detail,
      );
    } else {
      // insert konsultasi baru
      $data_konsultasi = array(
        'from_id' => $id_user,
        'created_at' => date('Y-m-d H:i:s'),
      );
      $id_konsultasi = $this->Konsultasi_model->insert($data_konsultasi);

      // insert konsultasi detail
      $data_konsultasi_detail = array(
        'konsultasi_id' => $id_konsultasi,
        'from_id' => $id_user,
        'text' => $message,
        'created_at' => date('Y-m-d H:i:s'),
      );

      $this->Konsultasi_model->insert_detail($data_konsultasi_detail);
      $response = array(
        'status' => 'success',
        'message' => 'Konsultasi berhasil dikirim',
        'data' => $data_konsultasi_detail,
      );
    }
    $this->session->set_flashdata('message', $response['message']);
    redirect('Konsultasi/user');
  }

  public function admin($id_konsultasi = NULL)
  {

    $data_konsultasi = $this->Konsultasi_model->get_all();
    if ($id_konsultasi != NULL) {
      $data_konsultasi_detail = $this->Konsultasi_model->get_detail($id_konsultasi);
      $this->Konsultasi_model->read($id_konsultasi);
    } else {
      $data_konsultasi_detail = NULL;
    }
    $data = array(
      'title' => $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'data_konsultasi' => $data_konsultasi,
      'data_konsultasi_detail' => $data_konsultasi_detail,
      'id_konsultasi' => $id_konsultasi,
      'action' => base_url('Konsultasi/admin_post'),
    );
    $this->load->view('layout/header', $data);
    $this->load->view('konsultasi/admin', $data);
    // $this->load->view('layout/footer', $data);
  }

  public function admin_post()
  {
    $message = $this->input->post('msg');
    $id_user = $this->session->userdata('user_id');
    $id_konsultasi = $this->input->post('id_konsultasi');

    $data_konsultasi_detail = array(
      'konsultasi_id' => $id_konsultasi,
      'from_id' => $id_user,
      'text' => $message,
      'created_at' => date('Y-m-d H:i:s'),
    );

    $this->Konsultasi_model->insert_detail($data_konsultasi_detail);
    $response = array(
      'status' => 'success',
      'message' => 'Konsultasi berhasil dikirim',
      'data' => $data_konsultasi_detail,
    );

    $this->session->set_flashdata('message', $response['message']);
    redirect('Konsultasi/admin/' . $id_konsultasi);
  }
}

/* End of file Konsultasi.php */
