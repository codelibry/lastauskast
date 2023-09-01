import $  from 'jquery';

function header(){
    $('.header__toggle, .header__close').on('click',function(){
        $('body').toggleClass('header--active');
    });

    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 10) {
                $("body").addClass('scrolled');
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("body").removeClass('scrolled');
            }
        });
    });
}

export { header };