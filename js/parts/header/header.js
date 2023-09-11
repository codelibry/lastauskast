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

    $('.menu-item__parent a').on('click', function (e) {
        e.preventDefault();

        const parentMenuItem = $(this).closest('.menu-item');
        const subMenu = parentMenuItem.find('.sub-menu');

        parentMenuItem.toggleClass('menu-open');

        if (parentMenuItem.hasClass('menu-open')) {
            subMenu.css('height', subMenu[0].scrollHeight + 'px');
        } else {
            subMenu.css('height', 0);
        }
    });
}

function stikyHeader() {
    const header = $('.header');

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 30) {
            header.addClass('header-fixed');
        } else if ($(window).scrollTop() < 30 && header.hasClass('header-fixed')) {
            header.removeClass('header-fixed');
        }
    })
}

export {header, stikyHeader};