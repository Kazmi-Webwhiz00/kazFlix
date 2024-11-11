document.addEventListener("DOMContentLoaded", function() {
    const slider = document.getElementById('kazflixSlider-mobile');
    const dots = document.querySelectorAll('.kazflix-dot-mobile');

    // Determine width based on screen size for smooth scrolling calculations
    function getItemWidth() {
        return slider.offsetWidth * 0.9; // Responsive width for mobile
    }

    // Function to scroll to a specific slide
    function scrollToSlide(index) {
        const itemWidth = getItemWidth();
        slider.scrollTo({
            left: itemWidth * index,
            behavior: 'smooth'
        });
        updateActiveDot(index);
    }

    // Function to update active dot based on slide
    function updateActiveDot(index) {
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
    }

    // Initial active dot
    updateActiveDot(0);

    // Add click event to each dot for navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => scrollToSlide(index));
    });

    // Update dot based on scroll position
    slider.addEventListener('scroll', () => {
        const scrollPosition = slider.scrollLeft;
        const activeIndex = Math.round(scrollPosition / getItemWidth());
        updateActiveDot(activeIndex);
    });

    // Adjust scroll and dot on window resize for responsive behavior
    window.addEventListener('resize', () => {
        const activeIndex = Math.round(slider.scrollLeft / getItemWidth());
        scrollToSlide(activeIndex); // Ensure we stay on the correct slide after resizing
    });
});
