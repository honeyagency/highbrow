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

    function toggleServiceDsk(e) {
        $id = e.attr('id');
        $more = 'Read More';
        $less = 'Read Less';
        if (e.hasClass('active')) {
            e.parent().parent().find('.block--service-content.expanded').slideUp('fast').removeClass('expanded');
            e.parent('.block--service.active').toggleClass('active');
            e.toggleClass('active');
            e.text($more);
        } else {
            $('.trigger--service-dsk').removeClass('active').text($more);;
            $('.block--service').removeClass('active');
            e.toggleClass('active');
            e.parent('.block--service').toggleClass('active');
            e.parent().parent().find('.block--service-content.expanded').slideUp('fast').removeClass('expanded');
            e.parent().parent().find('.block--service-content#' + $id).slideToggle('fast').toggleClass('expanded');
            e.text($less);
        }
    }
    $('.trigger--service-dsk').on('click touchstart', function(event) {
        event.preventDefault();
        e = $(this);
        toggleServiceDsk(e);
    });

    function toggleServiceMob(e) {
        $id = e.attr('id');
        $more = 'Read More';
        $less = 'Read Less';
        if (e.hasClass('active')) {
            e.parent().parent().find('.block--service-steps-mob.expanded').slideUp('fast').removeClass('expanded');
            e.toggleClass('active');
            e.text($more);
        } else {
            $('.trigger--service-mob').removeClass('active').text($more);
            e.toggleClass('active');
            e.parent().parent().find('.block--service-steps-mob.expanded').slideUp('fast').removeClass('expanded');
            e.parent().find('.block--service-steps-mob#' + $id).slideToggle('fast').toggleClass('expanded');
            e.text($less);
        }
    }
    $('.trigger--service-mob').on('click touchstart', function(event) {
        event.preventDefault();
        e = $(this);
        toggleServiceMob(e);
    });
    if ($('.section--services').is('[data-active]')) {
        $data = $('.section--services').attr('data-active');
        e = $(this).find('[data-name="' + $data + '"]').find('a');
        if ($(".hidden--mob").css("display") == "none") {
            toggleServiceMob(e);
        } else {
            toggleServiceDsk(e);
        }

        $('html, body').animate({
            scrollTop: $(".section--services").offset().top
        }, 400);
    }
});