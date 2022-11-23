<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function get_youtube_id($youtube_url)
{
  $youtubeId = explode("?v=", $youtube_url);
  $youtubeId = $youtubeId[1];
  return $youtubeId;
}

function get_youtube_thumb($youtube_url)
{
  $youtubeId = get_youtube_id($youtube_url);
  return "https://img.youtube.com/vi/$youtubeId/hqdefault.jpg";
}

function get_images_from_articles($id_articles)
{
  $CI = &get_instance();
  $CI->load->model('Artikel_model');
  $artikel = $CI->Artikel_model->get_by_id($id_articles);
  $body = $artikel->isi;
  preg_match_all('/<img[^>]+>/i', $body, $result);
  return $result[0];
}

function get_thumb_articles($id_articles)
{
  return get_images_from_articles($id_articles)[0];
}

function get_user_fullname($id_user)
{
  $CI = &get_instance();
  $CI->load->model('Akbr_users_model');
  $user = $CI->Akbr_users_model->get_by_id($id_user);
  return $user->first_name . ' ' . $user->last_name;
}

function get_latest_chat($id_konsultasi)
{
  $CI = &get_instance();
  $CI->db->where('konsultasi_id', $id_konsultasi);
  $CI->db->order_by('id', 'DESC');
  $CI->db->limit(1);
  $query = $CI->db->get('konsultasi_detail');
  return $query->row()->text;
}
function get_latest_read_status($id_konsultasi)
{
  $CI = &get_instance();
  $CI->db->where('konsultasi_id', $id_konsultasi);
  $CI->db->order_by('id', 'DESC');
  $CI->db->limit(1);
  $query = $CI->db->get('konsultasi_detail');
  return $query->row()->is_read;
}

function get_total_unread_msg($id_konsultasi)
{
  $CI = &get_instance();
  $CI->db->where('konsultasi_id', $id_konsultasi);
  $CI->db->order_by('id', 'DESC');
  $query = $CI->db->get('konsultasi_detail');
  return $query->num_rows();
}
