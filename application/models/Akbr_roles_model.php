<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akbr_roles_model extends CI_Model
{
  public $table = 'roles';
  public $id = 'id';
  public $order = 'DESC';

  function __construct()
  {
    parent::__construct();
  }

  // get all
  function get_all()
  {
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->result();
  }

  // get data by id
  function get_by_id($id)
  {
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row();
  }

  // insert
  function insert($data)
  {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  // update
  function update($id, $data)
  {
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
  }

  // delete
  function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
  }
}

/* End of file Akbr_roles_model.php */
