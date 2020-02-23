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

    $('.footer__cookies').on('click', () => {
        $(".modal").addClass("show");
    }) 

    if($(".btn-cookie").length > 0){
        $( ".cookie-accept" ).click(function(event) {
            event.preventDefault();
            acceptTCookies();
            declineGCookies();
            declineFCookies();
            $(".modal").removeClass("show");
            $(".modal").modal("hide");
        });
        $( ".cookie-conf" ).click(function(event) {
            event.preventDefault();
            $('.modal-content__info').addClass('hidden');
            $('.modal-content__configuration').removeClass('hidden');
        });
        $( ".cookies__btn-back" ).click(function(event) {
            $('.modal-content__info').removeClass('hidden');
            $('.modal-content__configuration').addClass('hidden');
        });
        $('.cookies__btn-save').on('click', () => {
            if ($('[name=techCookies]').is(":checked")) {
                acceptTCookies();
            } else {
                declineTCookies();
            }

            if ($('[name=analCookies]').is(":checked")) {
                acceptGCookies();
            } else {
                declineGCookies();
                cookieName = "analyticsCookiesAgreement";
                cookieValue = "false";
                document.cookie = cookieName +"=" + cookieValue;
            }

            if ($('[name=funcCookies]').is(":checked")) {
                acceptFCookies();
            } else {
                declineFCookies();
            }
            $(".modal").removeClass("show");
            $(".modal").modal("hide");
        });
    }
});

const acceptTCookies = () => {
    cookieName = "cookiesAgreement";
    cookieValue = "true";
    document.cookie = cookieName +"=" + cookieValue;
}

const declineTCookies = () => {
    cookieName = "cookiesAgreement";
    cookieValue = "false";
    document.cookie = cookieName +"=" + cookieValue;
} 

const acceptGCookies = () => {
    cookieName = "analyticsCookiesAgreement";
    cookieValue = "true";
    document.cookie = cookieName +"=" + cookieValue;
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-67738816-1', 'auto');
    ga('send', 'pageview');
}

const declineGCookies = () => {
    document.cookie = `_ga=; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/;`;
    document.cookie = `_gat=; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/;`;
    document.cookie = `_gid=; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/;`;
    window['ga-disable-UA-67738816-1'] = true;
}


const acceptFCookies = () => {
    cookieName = "funcCookiesAgreement";
    cookieValue = "true";
    document.cookie = cookieName +"=" + cookieValue;
}

const declineFCookies = () => {
    document.cookie = `funcCookiesAgreement=; expires = Thu, 01 Jan 1970 00:00:00 GMT`;
}