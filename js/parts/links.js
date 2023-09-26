import $ from 'jquery';

function setVisitedLinkColor () {
    const link = $('a[href^="mailto:"], a[href^="tel:"]');

    link.on('click', function () {
        $(this).css('color', '#626c84')
    })
}

export {setVisitedLinkColor}