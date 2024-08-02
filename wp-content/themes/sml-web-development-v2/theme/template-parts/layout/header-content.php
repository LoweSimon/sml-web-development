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
		<nav x-data="{ open: false }" class="xl:w-2/3 w-full">
			<div class="flex lg:hidden justify-end" x-cloak>
				<button @click="open = !open" class="nav-controls text-white text-3xl">
					<i x-show="!open" class="fa-solid fa-bars"></i>
					<i x-show="open" class="fa-solid fa-xmark pt-[14.5rem]"></i>
				</button>
			</div>

			<!-- Mobile Nav -->
			<div x-show="open"  class="text-white block lg:hidden bg-black w-full" x-cloak>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'mobile-menu',
							'menu_id'        => 'mobile-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-col gap-8 text-2xl" aria-label="submenu">%3$s</ul>',
						)
					);
				?>
			</div>

			<!-- Desktop Nav -->
			<div class="text-white hidden lg:flex gap-x-4 justify-end">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-row text-2xl xl:gap-16 lg:gap-8" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</div>
		</nav>

		<style>
			[x-cloak] { display: none !important; }
		</style>

		<!-- <nav id="site-navigation" class="xl:w-1/2 lg:w-2/3 w-full md:relative absolute lg:top-0 top-[-150px] md:bg-transparent bg-black rounded-2xl" aria-label="<?php esc_attr_e( 'Main Navigation', 'sml-web-development' ); ?>">
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
		</nav> -->
		
			<!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
