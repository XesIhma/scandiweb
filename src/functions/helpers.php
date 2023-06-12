<?php 

function formatUrl($url){
  $prefix = '/products';

  if (substr($url, 0, strlen($prefix)) == $prefix) return substr($url, strlen($prefix));

}