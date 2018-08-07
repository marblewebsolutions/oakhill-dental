/* global $ */
/* global $window */

function Navigation() {
    var $nav = $('nav');
    
    function initializeNavPosition() {
        if ($('.view').hasClass('home')) {
            return;
        }
        
        var navTop = $nav.offset().top;
        
        $(window).on('scroll', function() {
            if ($window.scrollTop() >= navTop) {
                $nav.addClass('fixed-top');
            } else {
                $nav.removeClass('fixed-top');
            }
        });
    }
    
    function initializeMobileNav() {
        var $mobileToggle = $nav.find('.mobile-nav-toggle');
        var $mobileNav = $('.nav-mobile');
        
        function openMobileNav() {
            $mobileToggle.addClass('active');
            $mobileNav.slideDown(150);
        }
        
        function closeMobileNav() {
            $mobileToggle.removeClass('active');
            $mobileNav.slideUp(150);
        }
        
        $mobileToggle.click(function(e) {
            e.preventDefault();
            
            if ($mobileToggle.hasClass('active')) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });
        
        $window.resize(function() {
            if ($window.outerWidth() > 768 && $mobileToggle.hasClass('active')) {
                closeMobileNav();
            }
        });
    }
    
    $(document).ready(function() {
        initializeNavPosition();
        initializeMobileNav();
    });
    
    $(window).resize(function() {
        initializeNavPosition();
    });
}

Navigation();