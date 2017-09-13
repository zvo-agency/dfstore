<?php

require '../db.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

try {
  $db = db();

  if ($_GET['category'] === 'meat')
    $table = 'prod_meat';
  else if ($_GET['category'] === 'accessoire')
    $table = 'prod_accessoire';
  else
    throw new Exception('$_GET["category"] must be "meat" or "accessoire"');

  $stmt = $db->prepare("
    SELECT
      `id`, `name`, `price`, `currency`, `unit`, `description`, `image`
    FROM
      `$table`
    WHERE
      `display` = 1
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
