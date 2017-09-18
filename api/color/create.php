<?php

require '../db.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

try {
  $db = db();
  
  $stmt = $db->prepare("
    INSERT 
      INTO `colors`
    SET
      `name` = ?,
      `code` = ? 
  ");

  $stmt->execute([
    $_POST['name'],
    $_POST['code']  
  ]);
  
  exit('{"result":"success"}');  
} catch (PDOException $e) {
  exit('{"result":"error","PDOException":"'.$e->getMessage().'"}');
} catch (Exception $e) {
  exit('{"result":"error","Exception":"'.$e->getMessage().'"}');
}
