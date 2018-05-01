$(document).ready(function() {
//    'use strict';
    console.log("DOM is ready");
    $( "li#index_header" ).hover(function() {
        $( "li:after" ).remove;
        console.log( "ready!" );
    });
    //Carousel
    $('.owl-carousel').owlCarousel({
//      center: true,
        loop:true,
        margin:10,
        autoHeight: true,
        stagePadding: 0,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
        
    });
    
  
    $(".item.cap-bot").fitImages();
    var imgWidth = $('.item.cap-bot img').width();
    $('.caption.simple-caption').css({width: imgWidth});
    // $(".main-marks").fitImages();
    if($(".cookie-bar").length > 0){
        $( ".cookie-ok" ).click(function(event) {
          event.preventDefault();
          $( ".cookie-bar" ).slideUp( "slow");
        });
        cookieName = "cookiesAgreement";
        cookieValue = "true";
        document.cookie = cookieName +"=" + cookieValue;
        console.log(document.cookie);
    }
//    window.dispatchEvent(new Event('resize'));
});