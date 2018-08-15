/* global $ */
/* global $window */

var Home = function() {
    function initializeTopBar() {
        var $topBar = $('.header-top');
        var topBarHeight = $topBar.height();
        var navHeight = $('.nav').height();
            
        function topBarStickToTop() {
            if ($window.outerWidth() > 768) {
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
        }
        
        topBarStickToTop();
        
        // Offsets may change on resizing window
        $(window).resize(function() {
            topBarStickToTop();
        });
    }
    
    // Stick nav to top after scroll threshold
    function initializeNav() {
        var $nav = $('.nav');
        
        function navStickToTop() {
            if ($window.outerWidth() > 768) {
                var navOffsetTop = $nav.offset().top;
            
                if ($window.scrollTop() < navOffsetTop) {
                    $nav.addClass('relative');
                } else {
                    $nav.removeClass('relative');
                }
                    
                $(window).on('scroll', function() {
                    if ($window.scrollTop() < navOffsetTop) {
                        $nav.addClass('relative');
                    } else {
                        $nav.removeClass('relative');
                    }
                });
            } else {
                $nav.removeClass('relative');
            }
        }
        
        navStickToTop();
        
        // Offsets may change on resizing window
        $(window).resize(function() {
            navStickToTop();
        });
    }
    
    function initializeHeaderImageScroll() {
        var $bgImg = $('.header-img');
        var $window = $(window);
        var windowHeight = $window.outerHeight();
        var topHeaderHeight = $('.header-top').height();
        var navHeight = $('.nav').height();
        
        // Background position constants
        var startPos = 10; // 10% down to start
        var range = 50; // Can move up to 50% down
        
        
        $window.scroll(function() {
            var scrollTop = $(window).scrollTop();
            var bgPosPer =  (((scrollTop) / (windowHeight - topHeaderHeight - navHeight)) * range + startPos) + "%";
            console.log(bgPosPer);
            $bgImg.css('background-position', "0 " + bgPosPer);
        })
    }
    
    initializeTopBar();
    initializeNav();
    initializeHeaderImageScroll();
}


// Call Home 
$(document).ready(function() {
    Home();
});

