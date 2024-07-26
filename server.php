<?php
// prendo il file json
$toDoListJson = file_get_contents('list.json');

var_dump($toDoListJson);

// trasformarlo in array
$toDoList = json_decode($toDoListJson, true);
var_dump($toDoList);
// modificherò il file json







// ritrasformarlo in json e impostare anche questa pagina php come file json
// header ('Content-Type: application/json');

// echo json_encode($toDoList);
