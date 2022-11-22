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
