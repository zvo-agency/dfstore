<?php

require '../db.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

try {
  $db = db();
  
  $stmt = $db->prepare("
    INSERT 
      INTO `sizes`
    SET
      `label` = ?
  ");

  $stmt->execute([
    $_POST['label']
  ]);
  
  exit('{"result":"success"}');  
} catch (PDOException $e) {
  exit('{"result":"error","PDOException":"'.$e->getMessage().'"}');
} catch (Exception $e) {
  exit('{"result":"error","Exception":"'.$e->getMessage().'"}');
}
