require('./bootstrap');

let app = new Vue({
  el: '#root',
  data: {
    show: false,
  },
  methods: {
    deleteComic: function(){
      this.show = true;
    },
    dismiss: function(){
      this.show = false;
    },
  }
})
