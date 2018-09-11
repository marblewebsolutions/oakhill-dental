function Team() {
    function initializeMemberSlide() {
        var $teamBlock = $('.block-team');
        var $members = $('.team-member');
        var memberCount = $('.team-member').length;
        var windowWidth = $('.block-team').width();
        var extraMargin = 120;
        
        // Slide variables
        var $arrowLeft = $('.arrow-left');
        var $arrowRight = $('.arrow-right');
        var currentMember = 0;
        
        setBlockHeight();
        positionSlides();
        
        $arrowLeft.click(function(e) {
            currentMember -= 1;
            if (currentMember < 0) {
                currentMember = 0;
            }
            
            setArrows();
            
            positionSlides();
        });
        
        $arrowRight.click(function(e) {
            currentMember += 1;
            if (currentMember >= memberCount) {
                currentMember = memberCount - 1;
            }
            
            setArrows();
            
            positionSlides();
        });
        
        $(window).resize(function() {
            windowWidth = $('.block-team').width();
            positionSlides(false);
        });
        
        function positionSlides(animate = true) {
            for (var i = 0; i < memberCount; i++) {
                var $member = $($members[i]);
                if (animate) {
                    $member.animate({left: (i - currentMember) * windowWidth}, 500);
                } else {
                    $member.css('left', (i - currentMember) * windowWidth);
                }
            }
        }
        
        function setArrows() {
            if (currentMember == 0) {
                $arrowLeft.css('visibility', 'hidden');
                $arrowRight.css('visibility', 'visible');
            } else if (currentMember == memberCount - 1) {
                $arrowLeft.css('visibility', 'visible');
                $arrowRight.css('visibility', 'hidden');
            } else {
                $arrowLeft.css('visibility', 'visible');
                $arrowRight.css('visibility', 'visible');
                
            }
        }
        
        function setBlockHeight() {
            var maxHeight = 0;
        
            // Determine minimum height of team member container
            $members.each(function() {
                var $member = $(this);
                
                if ($member.height() > maxHeight) {
                    maxHeight = $member.height();
                }
            });
            
            if ($(window).outerWidth < 768) {
                $teamBlock.css('height', maxHeight + extraMargin);
            } else {
                $teamBlock.css('height', '');
            }
            
            $(window).resize(function() {
                if ($(window).outerWidth < 768) {
                    $teamBlock.css('height', maxHeight + extraMargin);
                } else {
                    $teamBlock.css('height', '');
                }
            });
        }
    }
    
    initializeMemberSlide();
}

Team();