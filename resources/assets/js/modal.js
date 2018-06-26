/**
 * Modal
 */

/**
 * Initialize modal
 */
var initializeModal = function() {
    var $modal, $modalClose, $modalToggle;

    $modal = $('.modal');
    $modalToggle = $('.modal-toggle');
    $modalClose = $('.modal-close');

    // Private Functions
    var closeModal = function() {
        $modal.removeClass('active');
    };

    var openModal = function() {
        $modal.addClass('active');
    };

    // Trigger to open mobile menu
    $modalToggle.click(function(e) {
        e.preventDefault();

        openModal();
    });

    // Trigger to close mobile menu
    $modalClose.click(function(e) {
        e.preventDefault();

        closeModal();
    });
    
    $(document).click(function(e) {
        if ($modal.hasClass('active') && $(e.target).hasClass('modal')) {
            closeModal();
        }
    })
};

initializeModal();