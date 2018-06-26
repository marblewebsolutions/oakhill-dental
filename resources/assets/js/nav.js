/* global $ */
/* global $window */

function navStickToTop() {
    var $nav = $('nav');
    var navTop = $nav.offset().top;
    
    $(window).on('scroll', function() {
        if ($window.scrollTop() >= navTop) {
            $nav.addClass('fixed-top');
        } else {
            $nav.removeClass('fixed-top');
        }
    });
}

navStickToTop();