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
      })
      
    }
  },

  mounted() {
    this.getApi();
  },

}).mount('#app')