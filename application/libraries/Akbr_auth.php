<?php

/**
 * Name:    Akbr Auth
 * Author:  Muhakbarcom
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Akbr_auth
 */
class Akbr_auth
{

  public function __construct()
  {
    $this->CI = &get_instance();
    $this->CI->load->model('Akbr_auth_model');
    $this->CI->load->config('akbr');
  }


  public function is_logged_in()
  {
    $recheck = $this->CI->Akbr_auth_model->recheck_session();

    return $recheck;
  }

  public function is_admin()
  {
    $recheck = $this->is_logged_in();

    if ($recheck) {
      if ($this->CI->session->userdata('role') === $this->CI->config->item('admin_id')) {
        return TRUE;
      } else {
        return FALSE;
      }
    } else {
      return FALSE;
    }
  }

  public function get_user_id()
  {
    $user_id = $this->session->userdata('user_id');
    if (!empty($user_id)) {
      return $user_id;
    }
    return NULL;
  }

  public function user($id = NULL)
  {
    // if no id was passed use the current users id
    $id = isset($id) ? $id : $this->session->userdata('user_id');

    $result = $this->CI->Akbr_users_model->get_by_id($id);

    return $result;
  }
  public function users()
  {

    $result = $this->CI->Akbr_users_model->get_all();

    return $result;
  }

  public function auth()
  {
    if ($this->is_logged_in()) {
      redirect('main');
    }
  }

  public function must_login()
  {
    if (!$this->is_logged_in()) {
      redirect('auth');
    }
  }

  public function get_user_data()
  {
    if ($this->is_logged_in()) {
      $first_name = $this->CI->session->userdata('first_name');
      $last_name = $this->CI->session->userdata('last_name');

      $this->CI->load->model('Akbr_roles_model');
      $role = $this->CI->Akbr_roles_model->get_by_id($this->CI->session->userdata('role'));
      $role_name = $role->name;


      return $first_name . ' ' . $last_name . ' (' . $role_name . ')';
    } else {
      return '';
    }
  }
}
