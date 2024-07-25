<?php
    /**
     * Template Name: Homepage
     */
?>

<?php 
    get_header();
?>

<?php 
    include('template-parts/hero.php');
    include('template-parts/about-me.php');
    include('template-parts/services.php');
    include('template-parts/reasons-to-work-with-me.php');
    include('template-parts/testimonials.php');
    include('template-parts/call-to-action-long.php');  
?>

<?php 
    get_footer();
?>