<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sml-web-development
 */

?>

<div
  x-data="{ userDropdownOpen: false, mobileNavOpen: false }"
>
  <!-- Page Header -->
  <header
    id="page-header"
    class="flex flex-none items-center shadow-sm bg-black relative z-30 lg:h-28"
  >
    <div class="container mx-auto px-4 lg:px-8 xl:max-w-7xl">
      <div class="flex justify-between py-4">
        <!-- Left Section -->
        <div class="flex items-center">
          <!-- Logo -->
          <a
            href="/"
            class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300"
          >
		  	<div class="sml-logo lg:w-64 w-56 h-16">
				<img src="/wp-content/uploads/2024/07/SMLWebDevelopment-logo-white.svg" alt="SML Web Development Logo" class="h-full w-full">
			</div>
          </a>
          <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="flex items-center gap-2 lg:gap-5">
          <!-- Desktop Navigation -->
          <nav class="hidden items-center gap-2 lg:flex">
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
          <!-- END Desktop Navigation -->

          <!-- Toggle Mobile Navigation -->
          <div class="lg:hidden">
            <button
              x-on:click="mobileNavOpen = !mobileNavOpen"
              type="button"
              class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
            >
              <svg
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
                class="hi-solid hi-menu inline-block size-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
          <!-- END Toggle Mobile Navigation -->
        </div>
        <!-- END Right Section -->
      </div>

      <!-- Mobile Navigation -->
      <div x-cloak x-show="mobileNavOpen" class="lg:hidden">
        <nav
          class="flex flex-col gap-2 border-t border-gray-200 py-4 dark:border-gray-700"
        >

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
          
        </nav>
      </div>
      <!-- END Mobile Navigation -->
    </div>
  </header>
  <!-- END Page Header -->
