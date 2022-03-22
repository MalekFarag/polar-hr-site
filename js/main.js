

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

//WAYPOINTS 
  
  //HEADER

  let header = document.querySelector('.main_header');

  // header init
  header.classList.add('top_header');
  let back_to_top = document.querySelector('#back_to_top');
  var waypoint = new Waypoint({
    element: document.querySelector('.header_waypoint'),
    handler: function (direction) {

      if(direction == 'down'){
        header.classList.remove('top_header');
        back_to_top.classList.remove('hide')
      }

      if(direction == 'up'){
        header.classList.add('top_header');
        back_to_top.classList.add('hide')
      }
      
    }
  });


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