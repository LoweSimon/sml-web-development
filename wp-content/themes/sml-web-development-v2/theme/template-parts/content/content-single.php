<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sml-web-development
 */

?>

<?php 
	if(have_rows('single_clients')):
		while(have_rows('single_clients')): the_row();

		$singleClientImage 			= get_sub_field('single_client_image');
		$singleClientTitle 			= get_sub_field('single_client_title');
		$singleClientDescription 	= get_sub_field('single_client_description');
		$singleClientLink 			= get_sub_field('single_client_link');
		$singleClientDate 			= get_sub_field('single_client_date');
		$category					= get_the_category();
?>

<section class="single-client">
	<div class="container">
		<h1 class="md:text-7xl sm:text-5xl text-4xl my-12"><?php echo $singleClientTitle; ?></h1>
		<div class="flex lg:flex-row flex-col gap-8">
			<div class="client-image-container max-w-1/2 w-full">
				<img src="<?php echo $singleClientImage; ?>" alt="" class="w-full">
				<div class="flex md:flex-row flex-col justify-between mt-8">
					<span>Go Live date: <?php echo $singleClientDate; ?></span>
					<span class="md:my-0 my-4">Platform: <?php echo $category[0]->name; ?></span>
					<a href="<?php echo $singleClientLink; ?>" target="_blank">Visit Site <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
				</div>
				<hr class="border border-primary-red mt-4">
			</div>
			<div class="single-client-content max-w-1/2 w-full">
				
				<?php echo $singleClientDescription; ?>
			</div>
		</div>
	</div>
</section>


<?php
		endwhile;
	endif;
?>