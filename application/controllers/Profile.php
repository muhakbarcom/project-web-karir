<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    $this->akbr_auth->must_login();
    $this->load->model('Akbr_users_model');
  }


  public function index()
  {
    $user = $this->akbr_auth->user();
    $data = array(
      'title' => 'Profile',
      'titleapp' => config_item('title'),
      'descapp' => config_item('desc'),
      'socmed' => config_item('socmed'),
      'first_name' => $user->first_name,
      'last_name' => $user->last_name,
      'email' => $user->email,
      'id_user' => $user->id,
      'action' => site_url('profile/profile_action'),
    );

    $this->load->view('layout/header', $data);
    $this->load->view('Profile/index', $data);
    $this->load->view('layout/footer', $data);
  }

  public function profile_action()
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
          $user = $this->akbr_auth->user();
          $session = array(
            'user_id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'created_at' => $user->created_at,
            'role' => $user->role_id,
            'is_login' => TRUE,
          );

          $this->session->set_userdata($session);

          $this->session->set_flashdata('message', 'User berhasil diupdate');
          redirect('profile', 'refresh');
        } else {
          // redirect them back to the admin page if admin, or to the base url if non admin
          $this->session->set_flashdata('message', 'User gagal diupdate');
          redirect('profile', 'refresh');
        }
      } else {
        $this->session->set_flashdata('error', 'Failed to update user');
        $this->index();
      }
    }
  }
}

/* End of file Profile.php */
