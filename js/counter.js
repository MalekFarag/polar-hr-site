const counters = document.querySelectorAll('.counter'),
      speed   = 3500;

        var waypoint = new Waypoint({

            element: document.querySelector('.wp1'),
            handler: function(direction){
                counters.forEach(counter => {
                        const updateCounter = () =>{
                        const target = +counter.getAttribute('data-target'),
                                count  = +counter.innerText,
                                inc = target / speed;
                    
                                if(count < target) {
                                counter.innerText = Math.ceil(count + inc);
                                setTimeout(updateCounter, 1);
                                }else{
                                count.innerText = target;
                                }
                        }
                    
                        updateCounter();
                        
                    })

            }
        })


      
      
      