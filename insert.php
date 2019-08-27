<?php
require_once('db.php');

$rate=$_GET['rate'];
$inset=$db->prepare("INSERT INTO ratings (rated) VALUES('$rate')");
 
 $inset=$inset->execute();
 var_dump($_GET['email']);
 die;