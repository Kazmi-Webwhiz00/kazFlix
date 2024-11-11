document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.kazflix-scroll-wrapper');
    const scrollAmount = 300; // Adjust scroll amount per click

    // Scroll Left Button
    document.querySelector('#kazflix-scroll-left').addEventListener('click', () => {
        scrollContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    // Scroll Right Button
    document.querySelector('#kazflix-scroll-right').addEventListener('click', () => {
        scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
});