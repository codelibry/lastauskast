import $  from 'jquery';
import 'slick-carousel';

function basicSliders(){
    $('.js-slider').each(function(){
        let slider = $(this);

        slider.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            infinite: true,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 7000,
            pauseOnHover: true,
            touchThreshold: 10,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1
                    }
                },
            ]
        });
        
        slider.on('init', function(){
            $(window).trigger('heightChanges');
        });
    });
}

export { basicSliders };
