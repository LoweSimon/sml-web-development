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
    <div class="footer-contents container flex md:flex-row flex-col my-10 pt-10 z-20 relative">
        <div class="footer-left md:w-1/2 w-full">
            <img src="/wp-content/uploads/2024/07/SMLWebDevelopment-logo-white.svg" alt="">
            <div class="shopify-partner-logo sm:w-2/5 md:h-2/5 w-full md:my-4 my-10">
                <img src="/wp-content/uploads/2024/07/ShopifyPlus_Primary_Inverted.svg" alt="" class="w-full h-full">
            </div>
            <div class="social-icons-container flex flex-row gap-8 mt-4">
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
        </div>
        <div class="footer-right md:w-1/2 w-full md:pt-0 pt-8 text-white">
            <h4 class="uppercase text-white">Site Navigation</h4>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'footer-menu',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
                    )
                );
            ?>
        </div>
    </div>
    <div class="h-5 align-middle inline z-20 relative">
        <hr class=" text-white">
    </div>

    <div class="copyright container text-white text-sm relative z-20 flex justify-center py-4">
        <span>SML Web Development &copy; <?php echo date('Y'); ?></span>
    </div>
</footer><!-- #colophon -->
