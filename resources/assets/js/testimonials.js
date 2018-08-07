function Testimonials() {
    function initializeTesimonials() {
        var $reviewsTable = $('table.rad');
        var $reviews = $reviewsTable.find('tr.rad');
        var $moreBtn = $('.more');
        var reviewCount = $reviews.length;
        var showingCount = 10; // Initially show 10 reviews
        
        if (reviewCount < 10) {
            // Show all, no need to hide any
            return;
        }
        
        showReviews($reviews, showingCount);
        
        $moreBtn.click(function() {
            showingCount += 5;
            
            if (showingCount > reviewCount) {
                showingCount = reviewCount;
            }
            
            showReviews($reviews, showingCount);
        });
        
        function showReviews($reviews, amount) {
            $reviews.hide();
            for (var i = 0; i < amount; i++) {
                $($reviews[i]).show();
            }
        }
    }
    
    initializeTesimonials();
}

$(document).ready(function() {
   Testimonials(); 
});