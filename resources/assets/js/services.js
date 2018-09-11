function Services() {
    function initalizeServiceTiles() {
        var $tilesContainer = $('.tiles');
        var $tiles = $tilesContainer.find('.tile');
        
        var tilesContainerHeight = $tilesContainer.height();
        var tilesContainerWidth = $tilesContainer.width();
        var infoPadding = 30; // px
        
        var isMobile = ($(window).outerWidth() < 768);
        
        $tiles.each(function() {
            var $tile = $(this);
            var $moreButton = $tile.find('.cover-button');
            var $moreInfo = $tile.find('.more-info');
            var $close = $tile.find('.close');
            
            var num = $tile.attr('num');
            var tileHeight = $tile.height();
            var tileWidth = $tile.width();
            
            // More Info Active
            $moreButton.click(function() {
                $('body').addClass('no-scroll');
                
                $moreInfo.addClass('active');
                
                /*if (isMobile) {
                    $moreInfo.css('position', 'fixed');
                    $moreInfo.css('height', '90vh');
                    $moreInfo.css('width', '90vw');
                    $moreInfo.css('left', '0');
                    $moreInfo.css('right', '0');
                    $moreInfo.css('bottom', '0');
                    $moreInfo.css('top', '0');
                    $moreInfo.css('margin', 'auto');
                    $moreInfo.css('z-index', '10000');
                } else {
                    $moreInfo.css('position', 'absolute');
                    $moreInfo.css('height', tilesContainerHeight - (2 * infoPadding));
                    $moreInfo.css('width', tilesContainerWidth - (2 * infoPadding));
                    $moreInfo.css('left', -1 * ((num - 1) % 3) * tileWidth + infoPadding);
                    if (num > 3) {
                        $moreInfo.css('top', -1 * tileHeight + infoPadding);
                    } else {
                        $moreInfo.css('top', infoPadding);
                    }
                    $moreInfo.css('margin', '');
                    $moreInfo.css('z-index', '');
                }*/
                
            });
            
            // More Info Inactive
            $close.click(function() {
                $('body').removeClass('no-scroll');
                
                $moreInfo.css('height', '');
                $moreInfo.css('width', '');
                $moreInfo.css('left', '');
                $moreInfo.css('top', '');
                $moreInfo.removeClass('active'); 
            });
            
            $(window).resize(function() {
                tileHeight = $tile.height();
                tileWidth = $tile.width();
                
                if ($tile.hasClass('active')) {
                    $moreInfo.css('height', tilesContainerHeight - (2 * infoPadding));
                    $moreInfo.css('width', tilesContainerWidth - (2 * infoPadding));
                    $moreInfo.css('left', -1 * ((num - 1) % 3) * tileWidth + infoPadding);
                    if (num > 3) {
                        $moreInfo.css('top', -1 * tileHeight + infoPadding);
                    } else {
                        $moreInfo.css('top', infoPadding);
                    }
                }
            });
        });
        
        $(window).resize(function() {
            tilesContainerHeight = $tilesContainer.height();
            tilesContainerWidth = $tilesContainer.width();
            
            isMobile = ($(window).outerWidth() < 768);
        });
    }
    
    initalizeServiceTiles();
}

Services();
