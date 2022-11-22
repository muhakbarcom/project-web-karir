<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->akbr_auth->must_login();
    if (!$this->akbr_auth->is_admin()) {
      show_404();
    }
    $this->load->model('Akbr_users_model');
    $this->load->model('Akbr_roles_model');
  }

  public function index()
  {
    $users = $this->akbr_auth->users();
    $data = array(
      'title' => 'Kelola User',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'users' => $users,
    );
    $this->load->view('layout/header', $data);
    $this->load->view('user/index', $data);
    $this->load->view('layout/footer', $data);
  }

  public function create()
  {
    $roles = $this->Akbr_roles_model->get_all();
    $data = array(
      'title' => 'Tambah User',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'first_name' => set_value('first_name'),
      'last_name' => set_value('last_name'),
      'email' => set_value('email'),
      'role' => set_value('role'),
      'id_user' => set_value('id_user'),
      'action' => site_url('users/create_action'),
      'roles' => $roles,
    );
    $data['message'] = '';


    $this->load->view('layout/header', $data);
    $this->load->view('user/user_form', $data);
    $this->load->view('layout/footer', $data);
  }

  public function create_action()
  {
    $this->_rules_create();

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', 'Failed to create user');
      $this->create();
    } else {
      $first_name = $this->input->post('first_name', TRUE);
      $last_name = $this->input->post('last_name', TRUE);
      $email = $this->input->post('email', TRUE);
      $role = $this->input->post('role', TRUE);
      $password = $this->input->post('password', TRUE);
      $password = password_hash($password, PASSWORD_DEFAULT);


      $data = array(
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $password,
        'role_id' => $role,
        'created_at' => strtotime(date('Y-m-d H:i:s')),
      );

      $this->Akbr_users_model->insert($data);

      $this->session->set_flashdata('message', 'Create Record Success');
      redirect(site_url('users'));
    }
  }

  public function delete($id_user)
  {
    $this->Akbr_users_model->delete($id_user);
    $this->session->set_flashdata('message', 'User berhasil dihapus');
    redirect('users');
  }

  public function edit($id_user)
  {
    $user = $this->akbr_auth->user($id_user);
    $roles = $this->Akbr_roles_model->get_all();
    $data = array(
      'title' => 'Edit User',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'first_name' => $user->first_name,
      'last_name' => $user->last_name,
      'email' => $user->email,
      'role_id' => $user->role_id,
      'id_user' => $user->id,
      'roles' => $roles,
      'action' => site_url('users/edit_action'),
    );

    $this->load->view('layout/header', $data);
    $this->load->view('user/user_form_edit', $data);
    $this->load->view('layout/footer', $data);
  }

  public function edit_action()
  {

    // validate form input
    $this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'trim|required');
    $this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'trim|required');
    $this->form_validation->set_rules('email', $this->lang->line('edit_user_validation_email_label'), 'trim|required|valid_email');

    if (isset($_POST) && !empty($_POST)) {

      // update the password if it was posted
      if ($this->input->post('password')) {
        $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[8]|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
      }

      $id_user = $this->input->post('id_user', TRUE);
      if ($this->form_validation->run() === TRUE) {
        $data = array(
          'first_name' => $this->input->post('first_name', TRUE),
          'last_name' => $this->input->post('last_name', TRUE),
          'email' => $this->input->post('email', TRUE),
        );

        // update the password if it was posted
        if ($this->input->post('password')) {
          $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        }

        // check to see if we are updating the user
        if ($this->Akbr_users_model->update($id_user, $data)) {
          // redirect them back to the admin page if admin, or to the base url if non admin
          $this->session->set_flashdata('message', 'User berhasil diupdate');
          redirect('users/edit/' . $id_user, 'refresh');
        } else {
          // redirect them back to the admin page if admin, or to the base url if non admin
          $this->session->set_flashdata('message', 'User gagal diupdate');
          redirect('users/edit/' . $id_user, 'refresh');
        }
      } else {
        $this->session->set_flashdata('error', 'Failed to update user');
        $this->edit($id_user);
      }
    }
  }

  public function _rules_create()
  {
    $this->form_validation->set_rules('first_name', 'first name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'last name', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'password', 'min_length[8]|trim|required');
    $this->form_validation->set_rules('password_confirm', 'password confirmation', 'trim|required|matches[password]');
  }
}

/* End of file Users.php */
