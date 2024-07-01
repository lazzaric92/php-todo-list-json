<?php 
header("Content-type: application/json");

$rawData = file_get_contents("./db/tasksList.json");
$todo = json_decode($rawData, true);
$todo = array_filter($todo, fn($element) => $element["done"] === false);
if(isset($_GET["newText"])){
    // todo: aggiungo un task
    // > aggiungo un elemento
    $todo[] = ["text" => $_GET["newText"], "done" => false];
    // > codifico da php a json
    $jsonTodoData = json_encode($todo);
    // # scrivo e salvo nel file il nuovo json
    file_put_contents("./db/todoList.json", $jsonTodoData);
    http_response_code(200);
} else {
    $jsonTodoData = json_encode($todo);
    file_put_contents("./db/todoList.json", $jsonTodoData);
}






echo file_get_contents("./db/todoList.json");



?>