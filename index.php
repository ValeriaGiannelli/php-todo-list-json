<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Vue</title>

    <!-- link a Vue 3.x -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- link axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- mio css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">

        <div id="container">
            <!-- foglio della lista -->
            <div class="card_list">
                <!-- titolo -->
                <h1>To Do List</h1>


                <!-- lista non rodinata -->
                <ul id="my_list">
                    <!-- qui andranno i contenuti dell'array in Vue -->
                    <li class="item_list" v-for="(task, index) in toDo" :key="index">

                        <!-- cosa c'è da fare -->
                        <p :class="task.done ? 'done' : ''" @click="doneUndone(index)">{{task.title}}</p>

                        <!-- icona per cancellarlo -->
                        <i v-show="task.done" class="fa-solid fa-xmark" @click="cancelItem(index)"></i>
                    </li>
                    
                </ul>


                <!-- input per nuovo elemento -->
                <input @keyup.enter="addTask" type="text" v-model="userInput">

                <!-- bottone che aggiunge elemento alla lista -->
                <button @click="addTask">Aggiungi</button>

            </div>

        </div>

    </div>

    <!-- link al main.js -->
    <script type="text/javascript" src="main.js"></script>

</body>

</html>