<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tmb_model extends CI_Model
{
  public $table = 'tmb';
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

  function get_tmb($limit, $start, $search = null)
  {
    if ($search != null) {
      $this->db->or_like('tmb_name', $search);
    }
    $this->db->order_by($this->id, $this->order);
    $this->db->limit($limit, $start);
    return $this->db->get($this->table)->result();
  }

  function get_tmb_limit($limit)
  {
    $this->db->order_by($this->id, $this->order);
    $this->db->limit($limit);
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

    if ($this->db->affected_rows() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  // delete
  function delete($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->table);
  }
}

/* End of file tmb_model.php */
