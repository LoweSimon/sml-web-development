<?php
    if(have_rows('hero_section')):
        while(have_rows('hero_section')): the_row();

        $heroImage = get_sub_field('hero_image');
        $heroHeader = get_sub_field('hero_header');
        $heroHeaderSize = get_sub_field('hero_header_size');
        $heroHeaderTwo = get_sub_field('hero_header_two');
        $heroHeaderSizeTwo = get_sub_field('hero_header_size_two');
        $heroText = get_sub_field('hero_text');
        $heroButton = get_sub_field('hero_cta');
?>

<section class="hero w-screen max-h-[38rem] h-full absolute top-0 z-20">
        <div class="hero_image h-full" style="background: url(<?php echo $heroImage ?>) lightgray 50% / cover no-repeat;"></div>

        <div class="hero-content container relative">
            <<?php echo $heroHeaderSize ?>><?php echo $heroHeader ?></<?php echo $heroHeaderSize ?>>
            <<?php echo $heroHeaderSizeTwo ?>><?php echo $heroHeaderTwo ?></<?php echo $heroHeaderSizeTwo ?>>
            <?php echo $heroText ?>
            <a href="<?php echo $heroButton ?>">Get in contact today</a>
        </div>
</section>

<?php
        endwhile;
    endif;
?>