jQuery(document).ready(function($) {
    var myLazyLoad = new LazyLoad({
        // example of options object -> see options section
        threshold: 500,
        throttle: 30,
        show_while_loading: false,
    });
    $('.menu--trigger').on('click touchstart', function(e) {
        event.preventDefault();
        $('body').toggleClass('openmobile');
        $('header').toggleClass('openmobile');
    });
    $('.step--title').on('click touchstart', function(event) {
        event.preventDefault();
        $id = $(this).attr('id');
        if ($(this).hasClass('active')) {
            $(this).toggleClass('active');
            $(this).parent().parent().find('.block--step-content#' + $id).slideUp('fast').toggleClass('expanded');;
        } else {
            $('.step--title.active').removeClass('active');
            $(this).toggleClass('active');
            $(this).parent().parent().find('.block--step-content.expanded').slideToggle('fast').toggleClass('expanded');
            $(this).parent().parent().find('.block--step-content#' + $id).slideToggle('fast').toggleClass('expanded');
        }
    });
    $('.trigger--service-dsk').on('click touchstart', function(event) {
        event.preventDefault();
        $id = $(this).attr('id');
        if ($(this).hasClass('active')) {
            $(this).parent().parent().find('.block--service-content.expanded').slideUp('fast').removeClass('expanded');
            $(this).parent('.block--service.active').toggleClass('active');
            $(this).toggleClass('active');
        } else {
            $('.trigger--service-dsk').removeClass('active');
            $('.block--service').removeClass('active');
            $(this).toggleClass('active');
            $(this).parent('.block--service').toggleClass('active');
            $(this).parent().parent().find('.block--service-content.expanded').slideUp('fast').removeClass('expanded');
            $(this).parent().parent().find('.block--service-content#' + $id).slideToggle('fast').toggleClass('expanded');
        }
    });
    $('.trigger--service-mob').on('click touchstart', function(event) {
        event.preventDefault();
        $id = $(this).attr('id');
        if ($(this).hasClass('active')) {
            $(this).parent().parent().find('.block--service-steps-mob.expanded').slideUp('fast').removeClass('expanded');
            $(this).toggleClass('active');
        } else {
            $('.trigger--service-mob').removeClass('active');
            $(this).toggleClass('active');
            $(this).parent().parent().find('.block--service-steps-mob.expanded').slideUp('fast').removeClass('expanded');
            $(this).parent().find('.block--service-steps-mob#' + $id).slideToggle('fast').toggleClass('expanded');
        }
    });
});