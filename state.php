<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/plain');

if (!isset($_GET['state'])) 
  echo file_get_contents('state'); 
else 
  if($_GET['secret']==37709) file_put_contents("state",$_GET['state']);

?>