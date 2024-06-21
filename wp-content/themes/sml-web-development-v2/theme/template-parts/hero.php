<?php
    if(have_rows('hero_section')):
        while(have_rows('hero_section')): the_row();

        $heroVideo = get_sub_field('hero_video');
        $heroImage = get_sub_field('hero_image');
        $heroHeader = get_sub_field('hero_header');
        $heroHeaderSize = get_sub_field('hero_header_size');
        $heroHeaderTwo = get_sub_field('hero_header_two');
        $heroHeaderSizeTwo = get_sub_field('hero_header_size_two');
        $heroText = get_sub_field('hero_text', false, false);
        $heroButton = get_sub_field('hero_cta');
?>

<section class="hero w-screen max-h-[38rem] h-full absolute top-0 z-20">

        <video autoplay loop muted class="hero_image w-full h-full relative flex object-fill">
            <source src="<?php echo $heroVideo; ?>" />
        </video>
        <!-- <div class="hero_image h-full relative" style="background: url(<?php echo $heroImage ?>) lightgray 50% / cover no-repeat;"></div> -->

        <div class="hero-content container relative w-full h-auto top-[-27rem]">
            <div class="max-w-3xl lg:w-full max-h-80 lg:h-full bg-header-box rounded-3xl">
                <div class="px-9 py-5">
                    <<?php echo $heroHeaderSize ?> class="text-3xl text-white font-normal"><?php echo $heroHeader ?></<?php echo $heroHeaderSize ?>>
                    <<?php echo $heroHeaderSizeTwo ?> class="text-4xl text-white font-bold py-5"><?php echo $heroHeaderTwo ?></<?php echo $heroHeaderSizeTwo ?>>
                    <p class="text-white"><?php echo $heroText ?></p>
                    <a href="<?php echo $heroButton ?>" class="btn">Get in contact today</a>
                </div>
                
            </div>
        </div>
</section>

<?php
        endwhile;
    endif;
?>