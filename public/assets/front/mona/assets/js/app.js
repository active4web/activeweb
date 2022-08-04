

$(document).ready(function($) {

    $('#sync1').owlCarousel({
        rtl: true,
        loop: true,
        nav: false,
        items: 1,
        dots:false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

//////////////////////////////////////////////////

    $('#sync12').owlCarousel({
        rtl: true,
        loop: true,
        nav: false,
        items: 1,
        margin:15,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        
    });



      $("#clintgallery").owlCarousel({
      autoplay:true,
      nav: false,
      rtl: true,
      dots: true,
      margin:20,
      loop:false,
      items:4,
      dots: false,
      responsive:{
          0:{
              items: 1,
          },

          479:{
              items: 1
          },
          550:{
            items: 2
          },
          768:{
              items: 2
          },
          991:{
              items: 3
          },
          1200: {
              items: 4
          }
      }
  });
  $('.our-works .sliderleft').click(function(){
    $('#clintgallery').find('.owl-next').click();
  });
  $('.our-works .sliderright').click(function(){
    $(' #clintgallery').find('.owl-prev').click();
  });


  ///////////////////////////////////////////////////////////////////////////


   


     $('.MooobMenu ul>li').click(function(){
      $('.MooobMenu ul>li>ul').toggleClass('active');
      $(this).siblings().find('ul').slideUp(200)
      $(this).find('ul').slideToggle(200)
    })
    $('.OpenMenu').click(function(){
      $('.BadMenu,.OpenMenu').toggleClass('active');
    });

    if($(window).width() < 1024){
      $('.MooobMenu ul>li ul').parent().find('>a').click(function(e){
        e.preventDefault();
      });
    }

    $(window).resize(function(){
      if($(this).width() < 1024){
        $('.MooobMenu ul>li ul').parent().find('>li').click(function(e){
          e.preventDefault();
        });
      }      
    });


    ////////////////////////////////////////////////////////////
    
    $("#slidergallery,#clintgallery").owlCarousel({
      autoplay:true,
      nav: false,
      rtl: true,
      dots: true,
      margin:20,
      loop:false,
      items:4,
      dots: false,
      responsive:{
          0:{
              items: 1,
              dots: false,
              nav: true,
          },

          479:{
              items: 3
          },
          768:{
              items: 3
          },
          991:{
              items: 3
          },
          1200: {
              items: 4
          }
      }
  });
  $('.recent-works .sliderleft').click(function(){
    $('#slidergallery , #clintgallery').find('.owl-next').click();
  });
  $('.recent-works .sliderright').click(function(){
    $('#slidergallery , #clintgallery').find('.owl-prev').click();
  });
////////////////////////////////////////////////////////////////////////////////////

 $('.clients-carousel').owlCarousel({
    autoplay: true,
    loop: true,
     rtl: true,
    margin: 15,
    dots: false,
    slideTransition: 'linear',
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    autoplaySpeed: 4500,
    responsive: {
      0: {
        items: 2
      },
      500: {
        items: 3
      },
      600: {
        items: 4
      },
      800: {
        items: 5
      },
      1200: {
        items: 6
      }

    }
  });


});
//////////////////////////////////////////////////


$(document).ready(function($) {
    
    // Lightgallery

    if ($('#pro_popup').length > 0) {
        $('#pro_popup').lightGallery({
            thumbnail: true,
            selector: 'a'
        });
    }
    
    if ($('#lightgallery').length > 0) {
        $('#lightgallery').lightGallery({
            thumbnail: true,
            selector: 'a'
        });
    }


    


});
