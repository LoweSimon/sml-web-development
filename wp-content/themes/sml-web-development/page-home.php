<?php
    /**
     * Template Name: Homepage
     */
?>

<?php
    get_header();
?>

<section class="hero container top-72 relative justify-center flex">
    <?php include get_template_directory() . '/template-parts/hero.php'; ?>
</section>

<section class="about-me container top-72 relative justify-center flex">
    <?php include get_template_directory() . '/template-parts/about-me.php'; ?>
</section>

<section class="services container top-72 relative justify-center flex">
    <?php include get_template_directory() . '/template-parts/services.php'; ?>
</section>

<section class="why-work-with-me container top-72 relative justify-center flex">
    <?php include get_template_directory() . '/template-parts/why-work-with-me.php'; ?>
</section>

<section class="testimonials container top-72 relative justify-center flex">
    <?php include get_template_directory() . '/template-parts/testimonials.php'; ?>
</section>




<?php
    get_footer();
?>