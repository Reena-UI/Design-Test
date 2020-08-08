$( document ).ready(function() {
  $('#Market_list').owlCarousel({
      loop:true,
      margin:10,
      dots:false,
      nav:false,
      autoplay:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              
          },
          600:{
              items:2,
              
          },
          900:{
              items:3,
             
          },
          1000:{
              items:4,
             
          }
      }
  })
  $('#Trader_list').owlCarousel({
      loop:true,
      margin:30,
      dots:false,
      nav:false,
      autoplay:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:2,
              
          },
          600:{
              items:3,
              
          },
          900:{
              items:4,
             
          },
          1000:{
              items:6,
             
          }
      }
  })
  });

  wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animate__animated ', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
  }
  )
  wow.init();
 
  $(window).on('load', function(){     
    $('#LocationModal').modal('show');
     }); 

