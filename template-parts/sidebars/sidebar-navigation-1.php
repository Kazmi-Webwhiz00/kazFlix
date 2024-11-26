<?php
/**
 * Sidebar Navigation Template
 *
 * @package KazFlix
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<aside class="sidebar-navigation">
    <!-- Mobile Search and Back Button -->
    <div class="search-container">
        <button class="back-button" id="kazflix-side-bar-back-button">
            <!-- Back Button SVG Icon -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#AAADBE" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
            </svg>
        </button>
        <div class="search-bar">
            <!-- Search SVG Icon -->
            <svg fill="#AAADBE" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.71 20.29 18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7"/>
            </svg>
            <input type="text" placeholder="Search">
        </div>
</div>

    <nav>
        <ul class="sidebar-menu">
            <li><a href="#"><i class="icon-home"></i> <span>Home</span></a></li>
            <li><a href="#"><i class="icon-recent"></i> <span>Recently played</span></a></li>
            <li><a href="#"><i class="icon-new"></i> <span>New</span></a></li>
            <li><a href="#"><i class="icon-trending"></i> <span>Trending now</span></a></li>
            <li><a href="#"><i class="icon-updated"></i> <span>Updated</span></a></li>
            <li><a href="#"><i class="icon-originals"></i> <span>Originals</span></a></li>
            <hr>
            <li><a href="#"><i class="icon-two-player"></i> <span>2 Player</span></a></li>
            <li><a href="#"><i class="icon-action"></i> <span>Action</span></a></li>
            <li><a href="#"><i class="icon-adventure"></i> <span>Adventure</span></a></li>
            <li><a href="#"><i class="icon-basketball"></i> <span>Basketball</span></a></li>
            <li><a href="#"><i class="icon-beauty"></i> <span>Beauty</span></a></li>
            <li><a href="#"><i class="icon-bike"></i> <span>Bike</span></a></li>
            <li><a href="#"><i class="icon-car"></i> <span>Car</span></a></li>
            <li><a href="#"><i class="icon-card"></i> <span>Card</span></a></li>
            <li><a href="#"><i class="icon-casual"></i> <span>Casual</span></a></li>
            <li><a href="#"><i class="icon-clicker"></i> <span>Clicker</span></a></li>
            <li><a href="#"><i class="icon-controller"></i> <span>Controller</span></a></li>
            <li><a href="#"><i class="icon-dress-up"></i> <span>Dress Up</span></a></li>
            <li><a href="#"><i class="icon-driving"></i> <span>Driving</span></a></li>
            <li><a href="#"><i class="icon-escape"></i> <span>Escape</span></a></li>
            <li><a href="#"><i class="icon-flash"></i> <span>Flash</span></a></li>
            <li><a href="#"><i class="icon-fps"></i> <span>FPS</span></a></li>
        </ul>
    </nav>
</aside>
