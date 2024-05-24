jQuery(function($) {
    

    $('.open-nav').click(function() {
        $('.nav-links').toggleClass('top-[-55px]');
        $('.nav-links').removeClass('top-[-240px]');
        $('.open-nav').toggleClass('hidden');
        $('.close-nav').toggleClass('hidden');
    })

    $('.close-nav').click(function() {
        $('.nav-links').toggleClass('top-[-240px]');
        $('.open-nav').toggleClass('hidden');
        $('.close-nav').toggleClass('hidden');
    })
})