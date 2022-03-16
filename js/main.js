

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


// const urlParams = new URLSearchParams(window.location.search);

// const vm = new Vue({

//     data:{
//       isBurger: true,
//       isStart: true,
//       islightbox: true,
//       isHover: true,
//       thumbnail: '',

//       landing_page_instance: urlParams.get('landing-page'),

//     },


//     methods:{
//       openHover: function(){
//         this.isHover = false;
//       },

//       closeHover: function(){
//         this.isHover = true;
//       },

//       toggleBurger: function(){
//         this.isBurger = !this.isBurger;
//       },

//       openStart: function(){
//         this.isStart = !this.isStart;
//       },

//       closeStart: function(){
//         this.isStart = !this.isStart;
//       },

//       openTeam: function(){
//         let member = event.target.parentElement;
//         // console.log(member);
//         member.classList.toggle('expand');
//       },

//       openlb: function(){
//         this.islightbox = !this.islightbox;

//         this.thumbnail = event.target.style.backgroundImage;
//       },

//       closelb: function(){
//         this.islightbox = !this.islightbox;
//       },

      

//     },
//   }).$mount("#app");



//waypoints
let target1 = document.querySelectorAll('.t1');
if(typeof(document.querySelector('.wp1')) != 'undefined' && document.querySelector('.wp1') != null){
  var waypoint = new Waypoint({
    element: document.querySelector('.wp1'),
    handler: function(direction) {
      target1.forEach(tar => tar.classList.remove('animFadeUp'));
    }
  })
}


let target2 = document.querySelectorAll('.t2');

if(typeof(document.querySelector('.wp2')) != 'undefined' && document.querySelector('.wp2') != null){
  var waypoint = new Waypoint({
  element: document.querySelector('.wp2'),
  handler: function(direction) {
    target2.forEach(tar => tar.classList.remove('animFadeUp'));
  }
})
}


let target3 = document.querySelectorAll('.t3');

if(typeof(document.querySelector('.wp3')) != 'undefined' && document.querySelector('.wp3') != null){
  var waypoint = new Waypoint({
  element: document.querySelector('.wp3'),
  handler: function(direction) {
    target3.forEach(tar => tar.classList.remove('animFadeUp'));
  }
})
}



let target4 = document.querySelectorAll('.t4');

if(typeof(document.querySelector('.wp4')) != 'undefined' && document.querySelector('.wp4') != null){
  var waypoint = new Waypoint({
  element: document.querySelector('.wp4'),
  handler: function(direction) {
    target4.forEach(tar => tar.classList.remove('animFadeUp'));
  }
})
}


  


