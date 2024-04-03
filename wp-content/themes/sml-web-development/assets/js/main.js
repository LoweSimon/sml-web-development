jQuery(function($) {

    window.onscroll = function() {
        scrollRotate();
    }

    function scrollRotate() {
        let image = document.getElementsByClassName("nav-gear");
        image.style.transform = "rotate(" + window.pageXOffset/2 + "deg)";
    }

    $('.open-nav').click(function() {
        $('.nav-links').toggleClass('top-[5%]');
        $('.nav-links').toggleClass('top-[-100%]');
        $('.open-nav').toggleClass('hidden');
        $('.close-nav').toggleClass('hidden');
    })

    $('.close-nav').click(function() {
        $('.nav-links').toggleClass('top-[14%]');
        $('.nav-links').toggleClass('top-[-100%]');
        $('.open-nav').toggleClass('hidden');
        $('.close-nav').toggleClass('hidden');
    })

})