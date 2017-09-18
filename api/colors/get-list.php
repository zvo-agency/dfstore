<?php

require '../db.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

try {
  $db = db();

    $stmt = $db->prepare("
    SELECT
      `id`, `name`, `code`
    FROM
      `colors`
  ");

  $stmt->execute();
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
  exit(json_encode([
    'result' => 'success',
    'items' => $res
  ]));
} catch (PDOException $e) {
  exit('{"result":"error","PDOException":"'.$e->getMessage().'"}');
} catch (Exception $e) {
  exit('{"result":"error","Exception":"'.$e->getMessage().'"}');
}
