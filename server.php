<?php
// prendo il file json
$string = file_get_contents('list.json');

// var_dump($string);

// trasformarlo in array
$toDoList = json_decode($string);
// var_dump($toDoList);

// modificherò il file json







// ritrasformarlo in json e impostare anche questa pagina php come file json

// non funziona finchè non faccio una chiamata Axios?

header('Content-Type: application/json');
echo json_encode($toDoList);
