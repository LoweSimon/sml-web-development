/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.getElementsByClassName("nav-controls").addEventListener("click", navOpen);

function navOpen() {
    document.getElementsByClassName("nav-controls").innerHTML = "Clicked";
}

jQuery(function() {
    jQuery('.nav-controls').click(function() {
        $('#site-navigation').toggleClass('top-[0px]');
    })
})