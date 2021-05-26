require('./bootstrap');

let app = new Vue({
  el: '#root',
  data: {
    id: null,
  },

  methods: {
    deleteComic: function(id){
      this.id = id;
    },

    dismiss: function(){
      this.id = null;
    },
  }
})
