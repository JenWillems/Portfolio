import './bootstrap';
import 'slick-carousel/slick/slick.min.js';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

// Ensure jQuery is available
import $ from 'jquery';

window.$ = window.jQuery = $;

$(document).ready(function(){
    $('.your-slider').slick({
        slidesToShow: 3,  // Number of slides to show at once
        slidesToScroll: 1, // Number of slides to scroll
        autoplay: true,    // Auto slide
        autoplaySpeed: 2000, // Time between slides
        dots: true,        // Show navigation dots
        arrows: true       // Show next/prev arrows
    });
});



