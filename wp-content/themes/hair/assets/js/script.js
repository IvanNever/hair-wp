jQuery(document).ready(function(){

    //Slick slider
    jQuery('.gallery__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="/wp-content/themes/hair/assets/img/chevron-thin-left.svg" alt="prev-arrow"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="/wp-content/themes/hair/assets/img/chevron-thin-right.svg" alt="next-arrow"></button>',
        responsive: [
            {
              breakpoint: 1000,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });

    //Smooth scroll and page up
    jQuery(window).scroll( function() {
        if(jQuery(this).scrollTop() > 600) {
            jQuery('.page-up').fadeIn();
        } else {
            jQuery('.page-up').fadeOut();
        }
    });

    jQuery(function(){
        jQuery("a[href*='#']").click(function(){
            const _href = jQuery(this).attr("href");
            jQuery("html, body").animate({scrollTop: jQuery(_href).offset().top+"px"});
            return false;
        });
    });

    //Animations
    new WOW().init();

  });