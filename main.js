// estraggo il metodo din vue
const { createApp } = Vue;

// creao l'istanza dell'app vue e la collego al contenitore

createApp({
    data() {
        return {
            // dato che inserisce la persona
            userInput: '',
            apiUrl: 'server.php',
            toDo: []
        }
    },
    methods: {
        takeList() {
            // console.log("get api");
            // chiamata API al server.php per prendere la lista
            axios.get(this.apiUrl)
                .then(response => {
                    // console.log(response.data);
                    this.toDo = response.data;
                })
        },
        // funzione che con una chiamata post va ad inserire l'elemento che scrive l'utente
        addTask() {
            // console.log('add');
            // scrivo l'oggetto che deve inviare
            const data = {
                "title": this.userInput,
                "description": "imparare fondamenti"
            }

            // console.log(data);
            // faccio la chiamata che trasmetterà l'oggetto creato prima
            axios.post(this.apiUrl, data, {
                headers: {'Content-Type': 'multipart/form-data'}
            })
                .then(response =>{
                    console.log(response.data);
                    this.toDo = response.data;
            })

            this.userInput = '';
        }
    },
    mounted() {
        // quando pagina caricata faccio partire la chiamata per prendere la lista
        this.takeList();

    }
}).mount("#app");