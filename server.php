<?php 
header("Content-type: application/json");

$rawData = file_get_contents("./db/tasksList.json");
$todo = json_decode($rawData, true);
$todo = array_filter($todo, fn($element) => $element["done"] === false);
$jsonTodoData = json_encode($todo);
file_put_contents("./db/todoList.json", $jsonTodoData);
// var_dump($rawData, $todo);

echo file_get_contents("./db/todoList.json");



?>