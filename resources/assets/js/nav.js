/* global $ */
/* global $window */

function Navigation() {
    var $nav = $('nav');
    
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
            if ($window.outerWidth() > 800 && $mobileToggle.hasClass('active')) {
                closeMobileNav();
            }
        });
    }
    
    initializeMobileNav();
}

Navigation();