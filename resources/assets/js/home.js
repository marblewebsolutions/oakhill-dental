/* global $ */
/* global $window */

var Home = function() {
    function initializeTopBar() {
        function topBarStickToTop() {
            var $topBar = $('.header-top');
            var topBarHeight = $topBar.height();
            var navHeight = $('.nav').height();
            var welcomeBlockOffsetTop = $('.block.welcome').offset().top;
            
            if ($window.scrollTop() >= welcomeBlockOffsetTop - navHeight - topBarHeight) {
                $topBar.removeClass('fixed-top');
            } else {
                $topBar.addClass('fixed-top');
            }
            
            $(window).on('scroll', function() {
                if ($window.scrollTop() >= welcomeBlockOffsetTop - navHeight - topBarHeight) {
                    $topBar.removeClass('fixed-top');
                } else {
                    $topBar.addClass('fixed-top');
                }
            });
        }
        
        topBarStickToTop();
        
        // Offsets may change on resizing window
        $(window).resize(function() {
            topBarStickToTop();
        });
    }
    
    // Stick nav to top after scroll threshold
    function initializeNav() {
        function navStickToTop() {
            var $nav = $('.nav');
            var navOffsetTop = $nav.offset().top;
            
            if ($window.scrollTop() >= navOffsetTop) {
                $nav.addClass('fixed-top');
            } else {
                $nav.removeClass('fixed-top');
            }
                
            $(window).on('scroll', function() {
                if ($window.scrollTop() >= navOffsetTop) {
                    $nav.addClass('fixed-top');
                } else {
                    $nav.removeClass('fixed-top');
                }
            });
        }
        
        navStickToTop();
        
        // Offsets may change on resizing window
        $(window).resize(function() {
            navStickToTop();
        });
    }
    
    initializeTopBar();
    initializeNav();
}


// Call Home 
$(document).ready(function() {
    Home();
});

