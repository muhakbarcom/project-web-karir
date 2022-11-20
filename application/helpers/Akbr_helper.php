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
