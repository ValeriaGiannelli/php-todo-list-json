// estraggo il metodo din vue
const { createApp } = Vue;

// creao l'istanza dell'app vue e la collego al contenitore

createApp({
    data(){
        return{

        }
    },
    method: {
        takeList(){
            // chiamata API al server.php per prendere la lista
            
        }
    },
    mounted(){
        // quando pagina caricata faccio partire la chiamata per prendere la lista
        this.takeList();

    }
}).mount("#app");