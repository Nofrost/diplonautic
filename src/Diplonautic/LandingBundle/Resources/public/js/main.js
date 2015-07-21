$(document).ready(function() {
//    'use strict';
    console.log("DOM is ready");
    $( "li#index_header" ).hover(function() {
        $( "li:after" ).remove;
        console.log( "ready!" );
    });
    //Carousel
    $('.owl-carousel').owlCarousel({
        
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
                items:3,
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
    $(".main-marks").fitImages({fitMethod: 'resize'});
        
    
});
