import $ from 'jquery';

function checkCookiesAccepted() {
    $(document).on('ready', function () {
        const body = $('body');
        const cookie = getCookies();

        if (cookie) {
            body.removeClass('cookies--noaccepted').removeClass('cookies--rejected').removeClass('cookies--preferences');
            body.addClass('cookies--accepted');
        } else {
            body.addClass('cookies--noaccepted');
        }
    })

    $(document).on('click', '.cky-btn-accept', function () {
        const body = $('body');

        body.removeClass('cookies--noaccepted').removeClass('cookies--rejected').removeClass('cookies--preferences');
        body.addClass('cookies--accepted');
    })

    $(document).on('click', '.cky-btn-reject', function () {
        const body = $('body');

        body.removeClass('cookies--accepted').removeClass('cookies--noaccepted').removeClass('cookies--preferences');
        body.addClass('cookies--rejected');
    })

    $(document).on('click', '.cky-btn-preferences', function () {
        const body = $('body');

        body.removeClass('cookies--accepted').removeClass('cookies--noaccepted').removeClass('cookies--rejected');
        body.addClass('cookies--preferences');
    })
}

function getCookies() {
    const cookies = document.cookie
        .split('; ')
        .find(row => row.startsWith('cookieyes-consent'))
        .split('=')[1]

    if (cookies) {
        const cookiesAction = cookies
            .split(',')
            .find(part => part.includes('action'))
            .split(':')[1]

        if (cookiesAction == 'yes') {
            return true;
        }
    }
}

export {checkCookiesAccepted}