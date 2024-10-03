const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',

            // creo una variabile per inserire i dati ottenuti dalla chiamata api
            discs: [],
        }
    },
    methods: {
        // creo una funzione che si occupi di fare la chiamata API
        apiDiscs() {
            axios
                .get('http://localhost:8888/php-dischi-json/api.php')
                .then(res => {
                    // i dati ottenuti dalla funzione li metto dentro la variabile
                    this.discs = res.data;
                });
        }
    },
    created() {
        // richiamo la funzione nel momento della creazione
        this.apiDiscs();
    },
}).mount('#app')