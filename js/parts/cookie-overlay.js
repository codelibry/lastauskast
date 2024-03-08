import $ from 'jquery';

function checkCookiesAccepted() {
    const cookiesOverlay = $('.cookies--overlay');
    const body = $('body');
    const siteWrap = $('#site--wrap');

    $(document).on('ready', function () {
        const cookie = getCookies();

        if (cookie) {
            body.css('overflow', 'unset');
            siteWrap.fadeIn();
            cookiesOverlay.fadeOut();
        } else {
            body.css('overflow', 'hidden');
            siteWrap.fadeOut();
            cookiesOverlay.fadeIn();
        }
    })

    $(document).on('click', '.cky-btn-accept', function () {
        const cookie = getCookies();

        if (cookie) {
            body.css('overflow', 'unset');
            siteWrap.fadeIn();
            cookiesOverlay.fadeOut();
        } else {
            body.css('overflow', 'hidden');
            siteWrap.fadeOut();
            cookiesOverlay.fadeIn();
        }
    })
}

function getCookies() {
    const cookieVal = document.cookie
        .split('; ')
        .find(row => row.startsWith('cookieyes-consent'))
        .split('=')[1]

    if (cookieVal) {
        const functionalVal = cookieVal
            .split(',')
            .find(part => part.includes('functional'))
            .split(':')[1]

        if (functionalVal == 'yes') {
            return true;
        }
    }
}

export {checkCookiesAccepted}