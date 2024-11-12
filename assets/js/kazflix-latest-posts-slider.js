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

// Select elements
const scrollContainer = document.getElementById('kazflixCarousel');
const scrollLeftButton = document.getElementById('kazflix-scroll-left');
const scrollRightButton = document.getElementById('kazflix-scroll-right');

// Set scroll amount
const scrollAmount = 300; // Adjust this value as needed for each scroll step

// Scroll left
scrollLeftButton.addEventListener('click', () => {
    alert("hello");
    scrollContainer.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
    });
});

// Scroll right
scrollRightButton.addEventListener('click', () => {
    scrollContainer.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
    });
});

// Optional: Show/hide buttons based on scroll position
function toggleScrollButtons() {
    const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
    scrollLeftButton.style.display = scrollContainer.scrollLeft > 0 ? 'block' : 'none';
    scrollRightButton.style.display = scrollContainer.scrollLeft < maxScrollLeft ? 'block' : 'none';
}

// Initialize button visibility
toggleScrollButtons();

// Update button visibility on scroll
scrollContainer.addEventListener('scroll', toggleScrollButtons);
