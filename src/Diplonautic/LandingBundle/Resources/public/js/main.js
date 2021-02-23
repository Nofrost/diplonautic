$(document).ready(function() {
//    'use strict';
    $( "li#index_header" ).hover(function() {
        $( "li:after" ).remove;
    });

    if ($(".modal.show").length) modalShow(); 
    
    $('.footer__cookies').on('click', () => {
        $(".modal").addClass("show");
        $('.modal-content__info').addClass('hidden');
        $('.modal-content__configuration').removeClass('hidden');
        modalShow();
    })
});

const acceptGCookies = () => {
    cookieName = "analytics_agreement";
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
    document.cookie = `analytics_agreement=; expires = Thu, 01 Jan 1970 00:00:00 GMT`;
    document.cookie = `_ga=; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/; domain=.diplonautic.com;`;
    document.cookie = `_gat=; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/; domain=.diplonautic.com;`;
    document.cookie = `_gid=; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/; domain=.diplonautic.com;`;
    window['ga-disable-UA-67738816-1'] = true;
}


const acceptCookies = (name) => {
    if (name === "analytics_agreement") {
        acceptGCookies();
    } else {
        document.cookie = name +"=" + true;
    }
}
const declineCookies = (name) => {
    if (name === "analytics_agreement") {
        declineGCookies();
    } else {
        document.cookie = `${name}=; expires = Thu, 01 Jan 1970 00:00:00 GMT`;
    }
}

const checkCookies = () => {
    $(':checkbox').each(function() {
        const name = $(this).attr('name');
        if($(this).is(":checked")) {
            acceptCookies(name);
        } else {
            declineCookies(name);
        }
    });
}

const modalShow = () => {
    $('body').css('position','fixed');
    if($(".btn-cookie").length > 0){
        $( ".cookie-accept" ).click(function(event) {
            event.preventDefault();
            checkCookies();
            $(".modal").removeClass("show");
            $(".modal").modal("hide");
            $('body').css('position','unset');
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
            checkCookies();
            $(".modal").removeClass("show");
            $(".modal").modal("hide");
            $('body').css('position','unset');
        });
    }
    $('.clickable').on('click', function(event) {
        const id = $(this).attr('id');
        const activeElements = Array.from(document.getElementsByClassName('active'));
        activeElements.forEach((el) => {
            el.classList.remove("active");
        });
        $('.checks .flex-cell:not(.hide), .info .flex-cell:not(.hide)').addClass('hide');
        $(this).addClass('active');
        $(`.${id}`).removeClass('hide');
        $(`.${id}`).addClass('active');
    });
};