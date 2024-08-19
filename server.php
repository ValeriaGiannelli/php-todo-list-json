<?php
// prendo il file json
$string = file_get_contents('list.json');

// var_dump($string);

// trasformarlo in array
$toDoList = json_decode($string);
// var_dump($toDoList);

// modificherò il file json

// vedo se è stata fatta una chiamata che ha un oggetto
if (isset($_POST['title'])) {
    // array associativi
    $newTask = [
        "title"=> $_POST['title'],
        "done"=> false,
        "description"=> $_POST['description']
    ];


    // metto l'oggetto nell'array
    $toDoList[] = $newTask;


    // aggiorno il file json
    file_put_contents('list.json', json_encode($toDoList));
}

// se esiste chiave indexToDelete allora cancella
if(isset($_POST['indexToDelete'])){
    // rimuovi l'elemento con l'indice dato
    array_splice($toDoList, $_POST['indexToDelete'], 1);

    // aggiorno il file json
    file_put_contents('list.json', json_encode($toDoList));
}


// ritrasformarlo in json e impostare anche questa pagina php come file json

// non funziona finchè non faccio una chiamata Axios? No, perché c'erano i var_dump non commentati

header('Content-Type: application/json');
echo json_encode($toDoList);


// $array = [1, 5, 7];

// $arrayAssoc = [
//     "numero" => 5,
//     "descrizione" => "ciao come va"
// ];

// $arrayAssoc['numero'] // 5

// $arrayDiOggetti = [
//     [
//         "titolo" => "ciao",
//         "descrizione" => "ciao come va"
//     ],
//     [
//         "titolo" => "ciao",
//         "descrizione" => "ciao come va"
//     ],
//     [
//         "titolo" => "ciao",
//         "descrizione" => "ciao come va"
//     ],
// ]
