<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sml-web-development
 */

?>

<footer id="colophon" class="bg-black">
    <div class="footer-contents container flex flex-row mt-10 pt-10">
        <div class="footer-left w-1/2">
            <img src="/wp-content/uploads/2024/07/SMLWebDevelopment-logo-white.svg" alt="">
            <a href="https://www.linkedin.com/in/simon-lowe-49799688/" target="_blank">
                <i class="fa-brands fa-linkedin text-white text-2xl"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=61558684135501" target="_blank">
                <i class="fa-brands fa-square-facebook text-white text-2xl"></i>
            </a>
            <a href="https://x.com/SimonLowe90" target="_blank">
                <i class="fa-brands fa-square-x-twitter text-white text-2xl"></i>
            </a>
        </div>
        <div class="footer-right w-1/2 text-white">
            <h4 class="uppercase text-white">Site Navigation</h4>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'footer-menu',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
                    )
                );
            ?>
        </div>
    </div>
    <div class="h-5 align-middle inline">
        <hr class=" text-white">
    </div>
</footer><!-- #colophon -->
