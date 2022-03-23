

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



// TEXT REPLACE 
const target = document.getElementById('replace');
let texts = ['Selling Products', 'Innovation', 'Changing The World', 'Providing Quality Services', ]

var i = 0;

function changeText(){

  setInterval(function(){
    target.classList.add('hide')

    setTimeout(function(){
      target.innerHTML = texts[i];
      if(i < ( texts.length - 1 ) ){
        i++;
      }else{
        i = 0;
      }

      setTimeout(function(){
        target.classList.remove('hide')
      }, 100)
    }, 200)
    
  }, 5000)
}

changeText();