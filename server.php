<?php
// prendo il file json
$string = file_get_contents('list.json');

// var_dump($string);

// trasformarlo in array
$toDoList = json_decode($string);
// var_dump($toDoList);

// modificherò il file json

// vedo se è stata fatta una chiamata che ha un oggetto
if(isset($_POST['newTask'])){
    // creo una variabile che è uguale all'oggetto ricevuto
    $newTask = $_POST['newTask'];

    // metto l'oggetto nell'array
    $toDoList[] = $newTask;

    // aggiorno il file json
    file_put_contents('list.json', json_encode($toDoList));
}

// salvo il nuovo json nel nostro database list.json



// ritrasformarlo in json e impostare anche questa pagina php come file json

// non funziona finchè non faccio una chiamata Axios? No, perché c'erano i var_dump non commentati

header('Content-Type: application/json');
echo json_encode($toDoList);
