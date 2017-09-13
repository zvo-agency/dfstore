<?php
require_once 'config.php';

function db() {
  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',
    DB_USER, DB_PASS,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  if (!$db)
    exit('{"result":"error","errno":500}');
  return $db;
}
?>
