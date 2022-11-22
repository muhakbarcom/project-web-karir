<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi_model extends CI_Model
{
  public $table = 'konsultasi';
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

  function get_detail($id)
  {
    $this->db->where('konsultasi_id', $id);
    return $this->db->get('konsultasi_detail')->result();
  }

  function get_id_konsultasi($id_user)
  {
    $this->db->select('id');
    $this->db->where('from_id', $id_user);
    $this->db->order_by('id', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get($this->table);
    return $query->row()->id;
  }

  function check_is_user_have_msg()
  {
    $id_user = $this->session->userdata('user_id');
    $this->db->where('from_id', $id_user);
    $this->db->order_by($this->id, $this->order);
    return $this->db->get($this->table)->num_rows();
  }

  function get_user_msg()
  {
    $id_user = $this->session->userdata('user_id');
    $this->db->from('konsultasi');
    $this->db->join('konsultasi_detail', 'konsultasi.id = konsultasi_detail.konsultasi_id');
    $this->db->where('konsultasi.from_id', $id_user);
    $this->db->order_by('konsultasi.id', $this->order);
    return $this->db->get()->result();
  }

  function get_konsultasi_limit($limit)
  {
    $this->db->order_by($this->id, $this->order);
    $this->db->limit($limit);
    return $this->db->get($this->table)->result();
  }

  function get_articles($limit, $start, $search = null)
  {
    if ($search != null) {
      $this->db->or_like('judul', $search);
      $this->db->or_like('kategori', $search);
    }
    $this->db->order_by($this->id, $this->order);
    $this->db->limit($limit, $start);
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
  function insert_detail($data)
  {
    $this->db->insert('konsultasi_detail', $data);
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

/* End of file konsultasi_model.php */
