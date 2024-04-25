<?php
    if(have_rows('hero')):
        while(have_rows('hero')): the_row();

        $title = get_sub_field('hero_title');
?>

<div class="absolute xl:w-[900px] lg:w-[800px] md:w-[700px] sm:w-[600px]">
    <img src="wp-content/uploads/2024/04/frame.svg" alt="" class="hidden sm:block">
</div>
<div class="header-border absolute lg:top-32 md:top-24 sm:top-20">
        <h1 class="xl:w-[750px] lg:w-[650px] md:w-[550px] sm:w-[450px] top-5 text-center"><?php echo $title; ?></h1>
</div>

<?php
    endwhile;
endif;
?>