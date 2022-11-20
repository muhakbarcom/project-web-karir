<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

  public $module = 'artikel';
  public $className = '';

  public function __construct()
  {
    parent::__construct();
    $this->load->model('artikel_model');
    $this->className = $this->router->fetch_class();
  }


  public function index()
  {
    $search_data = $this->input->get('search');
    $articles = $this->artikel_model->get_all($search_data);
    $data = array(
      'title' => $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'articles' => $articles,
      'search_data' => set_value('search', $search_data),
    );
    $this->load->view('layout/header', $data);
    $this->load->view($this->module . '/index', $data);
    $this->load->view('layout/footer', $data);
  }

  public function list()
  {
    $this->akbr_auth->must_login();
    if (!$this->akbr_auth->is_admin()) {
      show_404();
    }
    $artikel = $this->artikel_model->get_all();
    $data = array(
      'title' => 'Kelola ' . $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'artikel' => $artikel,
    );
    $this->load->view('layout/header', $data);
    $this->load->view($this->module . '/list', $data);
    $this->load->view('layout/footer', $data);
  }

  public function create()
  {

    $this->akbr_auth->must_login();
    if (!$this->akbr_auth->is_admin()) {
      show_404();
    }
    $data = array(
      'title' => 'Tambah ' . $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'id' => set_value('id'),
      'judul' => set_value('judul'),
      'kategori' => set_value('kategori'),
      'isi' => set_value('isi'),
      'gambar' => set_value('gambar'),
      'action' => site_url($this->className . '/create_action'),
      'kategori_artikel' => config_item('kategori_artikel'),
    );
    $this->load->view('layout/header', $data);
    $this->load->view($this->module . '/form', $data);
    $this->load->view('layout/footer', $data);
  }


  public function create_action()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', 'Fail to create ' . $this->module . ' data');
      $this->create();
    } else {
      $judul = $this->input->post('judul', TRUE);
      $isi = $this->input->post('isi', TRUE);
      $kategori = $this->input->post('kategori', TRUE);
      $tanggal = date('Y-m-d');

      // if there is no file uploaded
      if (empty($_FILES['gambar']['name'])) {
        $gambar = 'default.jpg';
      } else {
        $config['upload_path']          = './assets/uploads/artikel/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $config['file_name']            = 'artikel-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
          $this->session->set_flashdata('error', $this->upload->display_errors());
          redirect(site_url($this->className . '/create'));
        } else {
          $gambar = $this->upload->data('file_name');
        }
      }
      $data = array(
        'judul' => $judul,
        'isi' => $isi,
        'kategori' => $kategori,
        'tanggal' => $tanggal,
        'gambar' => $gambar,
      );

      $this->artikel_model->insert($data);

      $this->session->set_flashdata('success', 'Success to create ' . $this->module . ' data');
      redirect(site_url($this->className . '/list'));
    }
  }

  public function edit($id)
  {
    $artikel = $this->artikel_model->get_by_id($id);
    $data = array(
      'title' => 'Edit ' . $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'judul' => $artikel->judul,
      'kategori' => $artikel->kategori,
      'gambar' => $artikel->gambar,
      'isi' => $artikel->isi,
      'id' => $artikel->id,
      'kategori_artikel' => config_item('kategori_artikel'),
      'action' => site_url($this->className . '/edit_action'),
    );

    $this->load->view('layout/header', $data);
    $this->load->view($this->module . '/form', $data);
    $this->load->view('layout/footer', $data);
  }

  public function edit_action()
  {

    $this->_rules();
    $id = $this->input->post('id', TRUE);
    if (isset($_POST) && !empty($_POST)) {
      if ($this->form_validation->run() === TRUE) {
        $data = array(
          'artikel_name' => $this->input->post('artikel_name', TRUE),
          'artikel_url' => $this->input->post('artikel_url', TRUE),
        );
        // check to see if we are updating the user
        if ($this->artikel_model->update($id, $data)) {
          // redirect them back to the admin page if admin, or to the base url if non admin
          $this->session->set_flashdata('success', $this->module . ' berhasil diupdate');
          redirect($this->className . '/edit/' . $id, 'refresh');
        } else {
          // redirect them back to the admin page if admin, or to the base url if non admin
          $this->session->set_flashdata('error', $this->module . ' gagal diupdate');
          redirect($this->className . '/edit/' . $id, 'refresh');
        }
      } else {
        $this->session->set_flashdata('error', 'Failed to update ' . $this->module);
        $this->edit($id);
      }
    } else {
      $this->session->set_flashdata('error', 'Failed to update ' . $this->module);
      $this->edit($id);
    }
  }

  public function detail($id)
  {
    $artikel = $this->artikel_model->get_by_id($id);
    $articles = $this->artikel_model->get_all();

    $data = array(
      'title' => 'Detail ' . $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'artikel' => $artikel,
      'articles' => $articles,
      'kategori_artikel' => config_item('kategori_artikel'),
    );

    $this->load->view('layout/header', $data);
    $this->load->view($this->module . '/detail', $data);
    $this->load->view('layout/footer', $data);
  }

  public function delete($id)
  {
    $this->artikel_model->delete($id);
    $this->session->set_flashdata('message', $this->module . ' berhasil dihapus');
    redirect($this->className . '/list');
  }

  public function _rules()
  {
    $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
    $this->form_validation->set_rules('isi', 'isi', 'trim|required');
    $this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
  }
}

/* End of file artikel.php */
