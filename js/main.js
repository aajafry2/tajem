(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();

        //YTPlayer call here.
        $('.our-story-area').YTPlayer({
            fitToBackground: true,
            videoId: 'LSmgKRx5pBo'
        });
        //magnificPopup call here.
        $('.video-play-icon').magnificPopup({
            type: 'video'
        });
        //lightSlider
        $(".testimonial-list").lightSlider({
            item: 1,
            //auto: true,
            loop: true,
            gallery: true,
            thumbItem:5
        });
            
        //sticky
        $(".header-area").sticky({topSpacing:0});
        //smoothScroll

        smoothScroll.init({
            speed: 1000,
            easing: 'Linear',
            offset: 0
        });
        
       
        
    });


    jQuery(window).load(function(){

        
    });


}(jQuery));	