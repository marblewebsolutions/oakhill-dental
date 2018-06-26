
/**
 * Base js file that can be used on any page.
 * Do not include page specific js.
 */
 
/*global $*/

// jQuery include
window.$ = window.jQuery = require('jquery');
$window = $(window);

function preloadImages() {
    var preloaded = function($img) {
        $($img).removeClass('preload');
    }
    
    var preloadImg = $(".preload");
    for (var i = 0; i < preloadImg.length; i++) {
        if (preloadImg[0].complete) {
            // Already loaded, call the handler directly
            preloaded();
        }
        else {
            // Not loaded yet, register the handler
            preloadImg.on('load', preloaded(preloadImg[i]));
        }
    }
}

preloadImages();


