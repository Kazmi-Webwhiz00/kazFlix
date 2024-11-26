jQuery(document).ready(function($) {
    $('#kazflix-side-bar-toogle, #kazflix-side-bar-toogle-mobile').on('click', function() {
        $('.sidebar-area').toggle();
    });

    $('#kazflix-side-bar-back-button').on('click', function() {
        $('.sidebar-area').hide();

    });

    $('#kazflix-back-to-top-button').on('click', function() {

        const mainContent = $('.content-area'); // Select your main content div
        mainContent.animate({ scrollTop: 0 }, 500); // Animate scrolling within this div
    });
    
    
    
// Scroll right
$('.kazflix-scroll-button.right-button').on('click', function () {
    $(this).closest('.kazflix-scroll-wrapper').animate({ scrollLeft: '+=200' }, 'smooth'); // Adjust 200 as needed
});

// Scroll left
$('.kazflix-scroll-button.left-button').on('click', function () {
    $(this).closest('.kazflix-scroll-wrapper').animate({ scrollLeft: '-=200' }, 'smooth'); // Adjust 200 as needed
});


});
