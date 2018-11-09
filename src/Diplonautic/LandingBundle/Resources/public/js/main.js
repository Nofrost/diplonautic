$(document).ready(function() {
//    'use strict';
    $( "li#index_header" ).hover(function() {
        $( "li:after" ).remove;
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

    if($(".btn-cookie").length > 0){
        $( ".cookie-accept" ).click(function(event) {
            event.preventDefault();
            cookieName = "cookiesAgreement";
            cookieValue = "true";
            document.cookie = cookieName +"=" + cookieValue+ ";domain=."+ document.location.host +";path=/";
            $(".modal").removeClass("show");
            $(".modal").modal("hide");
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-67738816-1', 'auto');
            ga('send', 'pageview');
        });
        $( ".cookie-decline" ).click(function(event) {
            event.preventDefault();
            cookieName = "cookiesAgreement";
            cookieValue = "false";
            document.cookie = cookieName +"=" + cookieValue+ ";domain=."+ document.location.host +";path=/";
            $(".modal").removeClass("show");
            $(".modal").modal("hide");
        });
    }
//    window.dispatchEvent(new Event('resize'));
});