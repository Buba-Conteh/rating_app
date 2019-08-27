<?php
require_once('db.php');
$ratings=$db->query("SELECT * FROM ratings ORDER BY `created_at` DESC");
//  var_dump($ratings);
//  die;
 $ratings=$ratings->fetchAll();
//   var_dump($ratings);
//  die;
echo json_encode($ratings);