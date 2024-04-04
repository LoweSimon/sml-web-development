<?php
    if(have_rows('hero')):
        while(have_rows('hero')): the_row();

        $title = get_sub_field('hero_title');
?>

<div class="header-border">
        <h1 class="w-[750px] text-6xl font-bold text-center"><?php echo $title; ?></h1>
</div>

<?php
    endwhile;
endif;
?>