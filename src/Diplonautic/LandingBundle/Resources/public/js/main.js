$(document).ready(function() {
    'use strict';
    
    $( "li#index_header" ).hover(function() {
        $( "li:after" ).remove;
        console.log( "ready!" );
    });
;});