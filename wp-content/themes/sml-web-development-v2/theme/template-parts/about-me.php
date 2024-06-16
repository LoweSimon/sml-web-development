<?php
    if(have_rows('about_me')):
        while(have_rows('about_me')): the_row();

        $aboutHeader = get_sub_field('about_me_header');
        $aboutText = get_sub_field('about_me_text', false, false);
        $aboutImage = get_sub_field('about_me_image');
?>

<section class="about-me h-full relative top-[31rem] flex flex-col bg-gray-200">
    <div class="container flex lg:flex-row flex-col lg:justify-between items-center py-16">
        <div class="about-content lg:w-1/2 w-full">
            <h2 class="text-2xl font-bold underline pb-10"><?php echo $aboutHeader ?></h2>
            <p><?php echo $aboutText ?></p>
        </div>
        <div class="about-image-container max-w-96 w-full h-auto lg:pt-0 pt-5">
            <img src="<?php echo $aboutImage ?>" alt="" class="w-full h-full">
        </div>
    </div>
</section>

<?php
        endwhile;
    endif;
?>