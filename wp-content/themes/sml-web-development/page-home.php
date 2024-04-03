<?php
    /**
     * Template Name: Homepage
     */
?>

<?php
    get_header();
?>


<?php
    if(have_rows('hero')):
        while(have_rows('hero')): the_row();

        $title = get_sub_field('hero_title');
?>

<section class="hero container top-72 relative justify-center flex">
    <div class="header-border">
        <h1 class="w-[750px] text-6xl font-bold text-center"><?php echo $title; ?></h1>
    </div>
</section>


<?php
    endwhile;
endif;
?>

<?php
    get_footer();
?>