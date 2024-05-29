document.addEventListener('DOMContentLoaded', function () {
    let totop = $('.totop');
    let symbol = totop.data('symbol');
    let speed = totop.data('speed');
    let position = totop.data('position');
    let space = totop.data('space');
    let title = totop.data('title');
    let xs = totop.data('x');
    let sm = totop.data('sm');
    let md = totop.data('md');
    let lg = totop.data('lg');
    let xl = totop.data('xl');
    let xxl = totop.data('xxl');
    let show = totop.data('show');
    let pulse = totop.data('pulse');
    let easing = totop.data('easing');
    let width = totop.data('width');
    let cssclass = totop.data('cssclass');
    let alt = totop.data('alt');
    let delay = totop.data('delay');
    flight(symbol, alt, speed, position, space, title, xs, sm, md, lg, xl, xxl, show, pulse, easing, width, cssclass, delay)
})

function flight(symbol, alt, speed, position, space, title, xs, sm, md, lg, xl, xxl, show, pulse, easing, width, cssclass, delay) {
    speed = parseInt(speed);
    show = parseInt(show);
    let effect = '';

    if (pulse === 1) {
        effect = 'kdstotop-pulse';
    }
    jQuery('body').append('<div id="flight" style="' + position + ':' + space + 'px;bottom:' + space + 'px"></div>');

    jQuery('#flight').append('<i class="' + xs + ' ' + sm + ' ' + md + ' ' + lg + ' ' + xl + ' ' + xxl + ' ' + cssclass + '"><img alt="' + alt + '" src="' + symbol + '" width="' + width + '" class="' + effect + '" title="' +
        title + '"</i>');

    flight = jQuery("#flight");

    jQuery(window).scroll(function () {
        if (document.body.scrollTop > show || document.documentElement.scrollTop > show) {

            jQuery('#flight').fadeIn(delay);

        } else {

            jQuery('#flight').fadeOut(delay);
        }
    });
    $(flight).click(function () {
        jQuery("html,body").animate({scrollTop: 0}, speed, easing);
    })
}