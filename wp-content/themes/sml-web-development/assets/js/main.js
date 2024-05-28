jQuery(function($) {
    

    $('.open-nav').click(function() {
        $('.nav-links').removeClass('top-[-240px]');
        $('.nav-links').addClass('top-20');
        $('.open-nav').toggleClass('hidden');
        $('.close-nav').toggleClass('hidden');
    })

    $('.close-nav').click(function() {
        $('.nav-links').addClass('top-[-240px]');
        $('.nav-links').removeClass('top-20');
        $('.open-nav').toggleClass('hidden');
        $('.close-nav').toggleClass('hidden');
    })

    $(document).scroll(function () {
        let $nav = $('.header');
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
})