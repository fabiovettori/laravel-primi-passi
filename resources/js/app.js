require('./bootstrap');

var $ = require( "jquery" );

$(document).ready(function(){
    if ($('title').attr('title-page') == 'contacts') {
        alert('this is a contacts page')
    };

    if ($('title').attr('title-page') == 'home') {
        alert('this is a home page')
    };
})
