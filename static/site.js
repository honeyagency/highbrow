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
});