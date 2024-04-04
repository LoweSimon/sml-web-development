<?php
    if(have_rows('hero')):
        while(have_rows('hero')): the_row();

        $title = get_sub_field('hero_title');
?>

<div class="absolute xl:w-[900px] lg:w-[800px] md:w-[700px] sm:w-[600px]">
    <img src="wp-content/uploads/2024/04/frame.svg" alt="" class="hidden sm:block">
</div>
<div class="header-border absolute lg:top-32 md:top-24 sm:top-20">
        <h1 class="xl:w-[750px] xl:text-6xl lg:w-[650px] lg:text-5xl md:w-[550px] md:text-5xl sm:w-[450px] sm:text-4xl text-3xl top-5 font-bold text-center"><?php echo $title; ?></h1>
</div>

<?php
    endwhile;
endif;
?>