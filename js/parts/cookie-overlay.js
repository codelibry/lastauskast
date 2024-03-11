import $ from 'jquery';

function checkCookiesAccepted() {
    $(document).on('ready', function () {
        const body = $('body');
        const cookie = getCookies();

        if (cookie) {
            body.removeClass('cookies--noaccepted');
        } else {
            body.addClass('cookies--noaccepted');
        }
    })

    $(document).on('click', '.cky-btn-accept', function () {
        const body = $('body');
        const cookie = getCookies();

        if (cookie) {
            body.removeClass('cookies--noaccepted');
        } else {
            body.addClass('cookies--noaccepted');
        }
    })
}

function getCookies() {
    const cookies = document.cookie
        .split('; ')
        .find(row => row.startsWith('cookieyes-consent'))
        .split('=')[1]

    if (cookies) {
        const functionalVal = cookies
            .split(',')
            .find(part => part.includes('functional'))
            .split(':')[1]

        if (functionalVal == 'yes') {
            return true;
        }
    }
}

export {checkCookiesAccepted}