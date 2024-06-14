<?php
    if(have_rows('about_me')):
        while(have_rows('about_me')): the_row();

        $aboutHeader = get_sub_field('about_me_header');
        $aboutText = get_sub_field('about_me_text', false, false);
        $aboutImage = get_sub_field('about_me_image');
?>

<section class="about-me max-h-[30rem] h-full absolute flex flex-col">
    <div class="container">
        <div class="about-content">
            <h2><?php echo $aboutHeader ?></h2>
            <p><?php echo $aboutText ?></p>
        </div>
        <div class="about-image-container">
            <img src="<?php echo $aboutImage ?>" alt="">
        </div>
    </div>
</section>

<?php
        endwhile;
    endif;
?>