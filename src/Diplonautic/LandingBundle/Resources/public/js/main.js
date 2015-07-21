$(document).ready(function() {
    'use strict';
    
    $( "li#index_header" ).hover(function() {
        $( "li:after" ).remove;
        console.log( "ready!" );
    });
    //Carousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoWidht: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });
    $( "#test_collapse_manual" ).click(function(e) {
        console.log('aaa');
    });

});