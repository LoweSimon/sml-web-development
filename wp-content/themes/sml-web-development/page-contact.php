<?php
    /**
     * Template Name: Contact
     */

     get_header();
?>

<section class="contact-title container h-14 relative top-56">
    <?php include get_template_directory() . '/contact-page-parts/contact-title.php'; ?>
</section>

<section class="general-content container h-14 relative top-60">
    <?php include get_template_directory() . '/contact-page-parts/general-content.php'; ?>
</section>

<section class="contactform container relative sm:top-72 sm:h-[50rem] top-96 mb-80">
    <?php include get_template_directory() . '/contact-page-parts/contact-form.php'; ?>
</section>

<?php
    get_footer();
?>