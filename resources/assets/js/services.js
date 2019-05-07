function Services() {
    function initalizeServiceTiles() {
        var $tilesContainer = $('.tiles');
        var $tiles = $tilesContainer.find('.tile');
        
        $tiles.each(function() {
            var $tile = $(this);
            var $moreButton = $tile.find('.cover-button');
            var $moreInfo = $tile.find('.more-info');
            var $close = $tile.find('.close');
            
            $moreInfo.addClass('transition');
            
            $tile.click(function(e) {
                if ($tile.hasClass('no-cover')) {
                    return;
                }
                
                if ($(e.target).hasClass('close')) {
                    // Close button clicked
                    $('body').removeClass('no-scroll');
                    $moreInfo.removeClass('active');
                } else {
                    closeAllModals();
                    $('body').addClass('no-scroll');
                    $moreInfo.addClass('active');
                }
            });
            
            // Change More Info to Active
            $moreButton.click(function() {
                $('body').addClass('no-scroll');
                $moreInfo.addClass('active');
            });
        });
        
        function closeAllModals() {
            $('body').removeClass('no-scroll');
            $tiles.find('.more-info').removeClass('active')
        }
    }
    
    initalizeServiceTiles();
}

Services();
