<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sml-web-development
 */

?>

<header id="masthead" class="bg-black">
	<div class="container h-28 flex flex-row justify-between items-center sticky z-30">
		<div>
			<div class="sml-logo lg:w-64 w-56 h-16">
				<img src="/wp-content/uploads/2024/07/SMLWebDevelopment-logo-white.svg" alt="SML Web Development Logo" class="h-full w-full">
			</div>
		</div>

		<nav id="site-navigation" class="xl:w-1/2 lg:w-2/3 w-full md:relative absolute lg:top-0 top-[-150px] md:bg-transparent bg-black rounded-2xl" aria-label="<?php esc_attr_e( 'Main Navigation', 'sml-web-development' ); ?>">
			<button aria-controls="primary-menu" aria-expanded="false" class="hidden"><?php esc_html_e( 'Primary Menu', 'sml-web-development' ); ?></button>
			

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex md:flex-row flex-col text-2xl justify-between text-white" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav>
		<div class="nav-controls lg:hidden block text-white text-3xl">
			<i class="fa-solid fa-bars"></i>
		</div>
			<!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
