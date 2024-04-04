<?php
    if(have_rows('about_me')):
        while(have_rows('about_me')): the_row();

        $about_title = get_sub_field('about_me_title');
        $description = get_sub_field('about_me_description');
        $image = get_sub_field('about_me_image');
?>

<h2 class="flex"><?php echo $about_title; ?></h2>
<p class="flex"><?php echo $description; ?></p>
<img src="<?php echo $image; ?>" alt="">

<?php 
    endwhile;
endif;
?>