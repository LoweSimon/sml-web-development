<?php
    if(have_rows('about_me')):
        while(have_rows('about_me')): the_row();

        $aboutHeader = get_sub_field('about_me_header');
        $aboutText = get_sub_field('about_me_text', false, false);
        $aboutImage = get_sub_field('about_me_image');
?>

<section class="about-me container max-h-[30rem] h-full relative top-[34rem] flex flex-col">
    <div class="container flex flex-row justify-between">
        <div class="about-content w-1/2">
            <h2 class="text-2xl font-bold underline"><?php echo $aboutHeader ?></h2>
            <p><?php echo $aboutText ?></p>
        </div>
        <div class="about-image-container max-w-96 w-full h-auto">
            <img src="<?php echo $aboutImage ?>" alt="" class="w-full h-full">
        </div>
    </div>
</section>

<?php
        endwhile;
    endif;
?>