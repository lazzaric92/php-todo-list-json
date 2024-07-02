<?php 
header("Content-type: application/json");

$rawData = file_get_contents("./db/tasksList.json");


if(isset($_GET["status"])){
    $status = $_GET["status"];
    if($status == 0){
        $filteredData = json_decode($rawData, true);
        $filteredData = array_filter($filteredData, fn($element) => $element["done"] === false);
        $jsonFilteredData = json_encode($filteredData);
        file_put_contents("./db/filteredList.json", $jsonFilteredData);
        header("Location: ./index.php");
    } elseif ($status == 1){
        $filteredData = json_decode($rawData, true);
        $filteredData = array_filter($filteredData, fn($element) => $element["done"] === true);
        $jsonFilteredData = json_encode($filteredData);
        file_put_contents("./db/filteredList.json", $jsonFilteredData);
        header("Location: ./index.php");
    } else {
        $filteredData = json_decode($rawData, true);
        $jsonFilteredData = json_encode($filteredData);
        file_put_contents("./db/filteredList.json", $jsonFilteredData);
        header("Location: ./index.php");
    }
}


echo file_get_contents("./db/filteredList.json");



?>