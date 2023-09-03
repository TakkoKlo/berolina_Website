<?php

function urlToDomain($url) {
  $lastElement = explode('/', $url);
  $lastElement = end($lastElement);

  $lastElement = explode('.', $lastElement)[0];
  $endOfUrl = '/zimmer';

  $string = implode(array_slice(explode('/', preg_replace('/https?:\/\/(www\.)?/', '', $url)), 0, 1)) . '/' . $lastElement;

  return $string;
}
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}

set_url(urlToDomain($_SERVER['REQUEST_URI']));

?>