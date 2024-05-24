<?php
    /**
     * Template Name: Homepage
     */
?>

<?php
    get_header();
?>

<section class="hero container top-60 relative justify-center flex xl:h-[504px] lg:h-[448px] md:h-[392px] sm:h-[336px] xs:h-[108px] h-[144px]">
    <?php include get_template_directory() . '/home-page-parts/hero.php'; ?>
</section>

<section class="about-me container top-[26rem] relative justify-center flex lg:h-[720px] md:h-[1035px] sm:h-[1000px] xs:h-[900px] h-[700px]">
    <?php include get_template_directory() . '/home-page-parts/about-me.php'; ?>
</section>

<section class="services container top-[36rem] h-[51rem] relative justify-center flex">
    <?php include get_template_directory() . '/home-page-parts/services.php'; ?>
</section>

<section class="why-work-with-me container top-72 relative justify-center flex">
    <?php include get_template_directory() . '/home-page-parts/why-work-with-me.php'; ?>
</section>

<section class="testimonials container top-[40rem] relative justify-center flex">
    <?php include get_template_directory() . '/home-page-parts/testimonials.php'; ?>
</section>




<?php
    get_footer();
?>