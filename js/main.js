

const urlParams = new URLSearchParams(window.location.search);

Vue.createApp({
  data(){

    return{
      isMenu: false,
      image: null,
      landing_page_instance: urlParams.get('landing-page'),

    }

  },

  setup() {
    
  },

  methods: {

    toggle_menu(){
      this.isMenu = !this.isMenu;
    }

  },

  components: {

    // button with different styles



  },

  mounted() {

  }

}).mount('#app')

