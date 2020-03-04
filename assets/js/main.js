(function ($) {
    "use strict";
    jQuery(document).ready(function($){
       
        /**-------------------------------
         * - wow js init
         * ---------------------------**/
        new WOW().init();

        /**-------------------------------
         * - magnific popup activation 
         * -----------------------------**/
        $('.popup-youtube').magnificPopup({
            type: 'video'
        });
        $('.imagepopup').magnificPopup({
            type: 'image'
        });
        
        /**-----------------------
         *  counter activation
         * ---------------------**/
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

        /**------------------------
         *  Team Carousel
         * ---------------------**/
        var $teamCarousel = $('.team-carousel');
        $teamCarousel.owlCarousel({
                loop: true,
                autoplay: true,
                autoPlayTimeout: 1000,
                margin:30,
                dots:false,
                nav:false,
                responsive: {
                    0: {
                        items: 1
                    },
                    501: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    },
                    1920: {
                        items: 4
                    }
                }
            });
            
        /**------------------------
         *  Testimonial Carousel
         * ---------------------**/
        var $blogSlider = $('.blogSlider');
        $blogSlider.owlCarousel({
                loop: true,
                autoplay: true,
                autoPlayTimeout: 1000,
                margin:30,
                dots:true,
                nav:false,
                navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    450: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1920: {
                        items: 3
                    }
                }
            });

            /**------------------------------
             *client-review
             * ---------------------------**/
            var $clientReview = $('.client-review');
            $clientReview.owlCarousel({
                loop: true,
                autoplay: true,
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    414: {
                        items: 1
                    },
                    768: {
                        items: 2,
                        margin: 30
                    },
                    1200: {
                        items: 1
                    }
                }
            });

            /**------------------------------
             * Product Details  carousel
             * ---------------------------**/
            
            var $productdetails = $('#product-details');
            $productdetails.owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                items: 1,
                center: true,
                nav: false,
                thumbs: true,
                thumbImage: false,
                thumbsPrerendered: true,
                thumbContainerClass: 'owl-thumbs',
                thumbItemClass: 'owl-thumb-item',
            });
        });
        /*-----------------------------
            Cart Page Quantity 
        -----------------------------*/
        $(document).on('click','.qtminus',function(){
            var el = $(this);
            var $tselector = el.parent().find('.qttotal').selector;
            var total = $($tselector).text();
            if( total >= 1 ){
                total--;
            }
            $($tselector).text(total);
        });
        $(document).on('click','.qtplus',function(){
            var el = $(this);
            var $tselector = el.parent().find('.qttotal').selector;
            var total = $($tselector).text();
            total++;
            $($tselector).text(total);
        });
            /*-------------------
                back to top
            --------------------*/
            $(document).on('click', '.back-to-top', function () {
                $("html,body").animate({
                    scrollTop: 0
                }, 2000);
            });

    
    
    $(window).on('scroll', function () {

        var $window = $(window);

        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
        if ($window.scrollTop()) {
            $(".prymery-menu").addClass('nav-fixed');
        } else {
            $(".prymery-menu").removeClass('nav-fixed');
        }


    });

    $(window).on('load',function(){

        /*---------------------
            Preloader
        -----------------------*/
        var preLoder = $("#preloader");
        preLoder.addClass('hide');
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);

    });

  
           

}(jQuery));	
