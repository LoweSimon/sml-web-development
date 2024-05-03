<?php
    /**
     * Template Name: Contact
     */

     get_header();
?>

<section class="contact-title h-32">
    <?php include get_template_directory() . '/contact-page-parts/contact-title.php'; ?>
</section>

<section class="general-content">
    <?php include get_template_directory() . '/contact-page-parts/general-content.php'; ?>
</section>

<section class="contactform">
    <?php include get_template_directory() . '/contact-page-parts/contact-form.php'; ?>
</section>

<?php
    get_footer();
?>