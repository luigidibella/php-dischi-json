const { createApp } = Vue;

createApp({

  data(){
    return{
      title: 'PHP Dischi JSON',
      apiUrl: 'server.php',
      list: []
    }
  },

  methods: {
    getApi(){
      axios.get(this.apiUrl)
        .then(result => {
          this.list = result.data;
          console.log(this.list);
        })
    }
  },

  mounted() {
    this.getApi();
  },

}).mount('#app')