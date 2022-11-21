<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tmb extends CI_Controller
{

  public $module = 'tmb';
  public $className = '';

  public function __construct()
  {
    parent::__construct();
    $this->load->model('tmb_model');
    $this->className = $this->router->fetch_class();
  }


  public function index()
  {
    $this->load->library('pagination');

    //konfigurasi pagination
    $config['base_url'] = site_url('tmb/index'); //site url
    $config['total_rows'] = $this->db->count_all('tmb'); //total row
    $config['per_page'] = 6;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = '>>';
    $config['prev_link']        = '<<';
    $config['full_tag_open']    = '<div class="blog-pagination"><ul class="justify-content-center">';
    $config['full_tag_close']   = '</ul></div>';
    $config['num_tag_open']     = '<li><a href="#">';
    $config['num_tag_close']    = '</a></li>';
    $config['cur_tag_open']     = '<li class="active"><a href="#">';
    $config['cur_tag_close']    = '</a></li>';
    $config['next_tag_open']    = '<li>';
    $config['next_tagl_close']  = '</li>';
    $config['prev_tag_open']    = '<li>';
    $config['prev_tagl_close']  = '</li>';
    $config['first_tag_open']   = '<li>';
    $config['first_tagl_close'] = '</li>';
    $config['last_tag_open']    = '<li>';
    $config['last_tagl_close']  = '</li>';

    $this->pagination->initialize($config);

    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $search_data = $this->input->get('search');
    $limit = $config['per_page'];
    $start = $data['page'];
    $tmb = $this->tmb_model->get_tmb($limit, $start, $search_data);
    $data = array(
      'title' => $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'tmb' => $tmb,
      'search_data' => set_value('search', $search_data),
    );
    $data['pagination'] = $this->pagination->create_links();
    $this->load->view('layout/header', $data);
    $this->load->view($this->module . '/index', $data);
    $this->load->view('layout/footer', $data);
  }

  function get_tmb()
  {
    if (isset($_POST["limit"], $_POST["start"])) {
      $limit = $_POST["limit"];
      $start = $_POST["start"];
      if ($_POST["search"] != '') {
        $search = $_POST["search"];
      } else {
        $search = null;
      }
      $result = $this->tmb_model->get_tmb($limit, $start, $search);

      foreach ($result as $row) {
        $output[] = array(
          'id' => $row->id,
          'tmb_name' => $row->tmb_name,
          'tmb_url' => $row->tmb_url,
          'tmb_thumb' => get_youtube_thumb($row->tmb_url)
        );
      }
      echo json_encode($output);
    }
  }

  public function list()
  {
    $this->akbr_auth->must_login();
    if (!$this->akbr_auth->is_admin()) {
      show_404();
    }
    $tmb = $this->tmb_model->get_all();
    $data = array(
      'title' => 'Kelola ' . $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'tmb' => $tmb,
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
      'tmb_name' => set_value('tmb_name'),
      'tmb_url' => set_value('tmb_url'),
      'action' => site_url($this->className . '/create_action'),
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
      $tmb_name = $this->input->post('tmb_name', TRUE);
      $tmb_url = $this->input->post('tmb_url', TRUE);


      $data = array(
        'tmb_name' => $tmb_name,
        'tmb_url' => $tmb_url,
      );

      $this->tmb_model->insert($data);

      $this->session->set_flashdata('success', 'Success to create ' . $this->module . ' data');
      redirect(site_url($this->className . '/list'));
    }
  }

  public function edit($id)
  {
    $tmb = $this->tmb_model->get_by_id($id);
    $data = array(
      'title' => 'Edit ' . $this->module,
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'tmb_name' => $tmb->tmb_name,
      'tmb_url' => $tmb->tmb_url,
      'id' => $tmb->id,
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
          'tmb_name' => $this->input->post('tmb_name', TRUE),
          'tmb_url' => $this->input->post('tmb_url', TRUE),
        );
        // check to see if we are updating the user
        if ($this->tmb_model->update($id, $data)) {
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

  public function delete($id)
  {
    $this->tmb_model->delete($id);
    $this->session->set_flashdata('message', $this->module . ' berhasil dihapus');
    redirect($this->className . '/list');
  }

  public function _rules()
  {
    $this->form_validation->set_rules('tmb_name', 'Judul', 'trim|required');
    $this->form_validation->set_rules('tmb_url', 'Link', 'trim|required');
  }
}

/* End of file tmb.php */
