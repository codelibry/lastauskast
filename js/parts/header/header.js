import $ from 'jquery';

function header() {
    $('.header__toggle, .header__close').on('click', function () {
        $('body').toggleClass('header--active');

        if($('body').hasClass('header--active')) {
            $('body, html').addClass('overflow-hidden');
        } else {
            $('body, html').removeClass('overflow-hidden');
        }
    });
}

function stikyHeader() {
    const header = $('.header');

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
            header.addClass('header-fixed');
            header.removeClass('header-unfixed');
        } else if ($(window).scrollTop() < 50 && header.hasClass('header-fixed')) {
            header.addClass('header-unfixed');
            header.removeClass('header-fixed');
        }
    })
}

export {header, stikyHeader};