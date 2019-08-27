<?php
$db = new PDO("mysql:host=localhost;dbname=rating", "root",3010451);
if (!$db) {
   echo "Problem connecting to the data base";
}