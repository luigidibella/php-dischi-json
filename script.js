const { createApp } = Vue;

createApp({

  data(){
    return{
      title: 'PHP Dischi JSON',
      apiUrl: 'server.php',
      list: [],
      newCard:{
        title:'',
        author:'',
        year:'',
        poster:'',
        genre:''
      }
    }
  },

  methods: {
    getApi(){
      axios.get(this.apiUrl)
        .then(result => {
          this.list = result.data;
          /* console.log(this.list); */
        })
    },
    addNewCard(){
      
      const data = new FormData();
      data.append('newCardTitle', this.newCard.title);
      data.append('newCardAuthor', this.newCard.author);
      data.append('newCardYear', this.newCard.year);
      data.append('newCardPoster', this.newCard.poster);
      data.append('newCardGenre', this.newCard.genre);

      axios.post(this.apiUrl, data)
        .then(result =>{
          this.list = result.data;
          /* console.log(result.data); */
          this.newCard.title = '';
          this.newCard.author = '';
          this.newCard.years = '';
          this.newCard.poster = '';
          this.newCard.genre = '';
        })
      
    },
    toggleLike(index){

      /* console.log(index); */

      const data = new FormData();
      data.append('indexToLike', index);

      axios.post(this.apiUrl, data)
        .then(result => {
          this.list = result.data
        })

    },
    removeCard(index){
      /* console.log(index); */
      const cardToDelete = this.list[index];

      if(confirm(`Sei sicuro di voler eliminare l'album ${cardToDelete.title}?`)){
        const data = new FormData();
        data.append('indexToDelete', index);
  
        axios.post(this.apiUrl, data)
          .then(result => {
            this.list = result.data
          })
      }

    }
  },

  mounted() {
    this.getApi();
  },

}).mount('#app')