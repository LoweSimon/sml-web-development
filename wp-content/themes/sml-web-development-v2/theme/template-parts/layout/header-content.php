<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sml-web-development
 */

?>

<header id="masthead" class="container h-28 flex flex-row justify-between items-center sticky z-30">

	<div>
		<div class="image-placeholder lg:w-52 w-36 h-16 bg-gray-500"></div>
	</div>

	<nav id="site-navigation" class="xl:w-1/2 lg:w-2/3 w-full md:relative absolute md:top-0 top-[-150px] md:bg-transparent bg-black rounded-2xl" aria-label="<?php esc_attr_e( 'Main Navigation', 'sml-web-development' ); ?>">
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
	<div class="nav-controls md:hidden block text-white text-3xl">
		<i class="fa-solid fa-bars"></i>
	</div>
		<!-- #site-navigation -->

</header><!-- #masthead -->
