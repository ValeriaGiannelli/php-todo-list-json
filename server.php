<?php
// prendo il file json
$toDoList = file_get_contents('list.json');

var_dump($toDoList);

// qui si faranno le chiamate axios

// dovrà prendere il file json -> trasformarlo per modificarlo -> ritrasformarlo in json e impostare anche questa pagina php come file json
