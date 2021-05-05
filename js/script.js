/*
Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l’utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi.
- Attraverso l’utilizzo di Axios: al caricamento
della pagina axios chiederà attraverso una
chiamata API i dischi a php e li stamperà
attraverso vue.
Utilizzare: Html, Sass, JS, Vue, Axios, Php
Opzionale:
- Attraverso un’altra chiamata API, filtrare gli
album per genere
*/

const app = new Vue ({
  el: "#app",
  data: {
    albumList: [],
  },
  mounted: function(){

    axios.get('http://localhost/es50/php-ajax-dischi/api.php')
    .then( (response) => {
      this.albumList = response.data;
      // console.log(this.albumList);
    });
  },
});
