const featuredWorkDiv = document.querySelector('.featuredWorkDiv video'),
      heroDiv        = document.querySelector('.heroDiv video');


    const mediaQuery1 = window.matchMedia('(min-width: 0px)');
    const mediaQuery2 = window.matchMedia('(min-width: 500px)');
    const mediaQuery3 = window.matchMedia('(min-width: 1400px)');


    if (mediaQuery2.matches){
        
        featuredWorkDiv.innerHTML = "<source src='videos/featured/tablet.mp4' type='video/mp4' defer>";
        heroDiv.innerHTML = "<source src='videos/hero/tablet.mp4' type='video/mp4'>";
    }
    if (mediaQuery3.matches){
        
        featuredWorkDiv.innerHTML = "<source src='videos/featured/desktop.mp4' type='video/mp4' defer>";
        heroDiv.innerHTML = "<source src='videos/hero/desktop.mp4' type='video/mp4'>";
    }else{
        featuredWorkDiv.innerHTML = "<source src='videos/featured/mobile.mp4' type='video/mp4' defer>";
        heroDiv.innerHTML = "<source src='videos/hero/mobile.mp4' type='video/mp4'>";
    }