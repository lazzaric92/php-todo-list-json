<?php 
$rawData = file_get_contents("./db/todolist.json");
$data = json_decode($rawData, true);
var_dump($data);


?>