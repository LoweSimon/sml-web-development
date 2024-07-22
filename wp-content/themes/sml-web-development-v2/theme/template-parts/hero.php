<?php
    if(have_rows('hero_section')):
        while(have_rows('hero_section')): the_row();

        $heroOption = get_sub_field('hero_option');
        $heroVideo = get_sub_field('hero_video');
        $heroImage = get_sub_field('hero_image');
        $heroHeader = get_sub_field('hero_header');
        $heroHeaderSize = get_sub_field('hero_header_size');
        $heroHeaderTwo = get_sub_field('hero_header_two');
        $heroHeaderSizeTwo = get_sub_field('hero_header_size_two');
        $heroText = get_sub_field('hero_text');
        $heroButton = get_sub_field('hero_cta');
?>

<section class="hero w-screen max-h-screen h-[88vh] relative top-0 z-20">

        <?php if($heroOption == 'video'): ?>
            <video autoplay loop muted class="hero_image w-full h-full absolute flex object-fill">
                <source src="<?php echo $heroVideo; ?>" />
            </video>
        <? else : ?>
            <div class="hero_image h-full w-full absolute" style="background: url(<?php echo $heroImage ?>) lightgray 50% / cover no-repeat;"></div>
        <?php endif; ?>

        <div class="hero-content container relative w-full h-[88vh] flex justify-center items-center">
            <div class="max-w-[60rem] lg:w-full max-h-[24rem] lg:h-full sm:h-full bg-header-box shadow-[#BF000080] shadow-lg rounded-3xl flex justify-center items-center text-center">
                <div class="px-9 py-5 flex flex-col justify-center">
                    <<?php echo $heroHeaderSize ?> class="md:text-[2rem] sm:text-xl md:pt-0 sm:pt-4 text-white font-normal"><?php echo $heroHeader ?></<?php echo $heroHeaderSize ?>>
                    <<?php echo $heroHeaderSizeTwo ?> class="md:text-6xl sm:text-[2.75rem] text-xl text-white font-bold py-5"><?php echo $heroHeaderTwo ?></<?php echo $heroHeaderSizeTwo ?>>
                    <div class="text-white">
                        <?php echo $heroText ?>
                    </div>
                    <?php if($heroButton != ''): ?>
                        <a href="<?php echo $heroButton ?>" class="btn mx-auto">Get in contact today</a>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>

        <div class="scroll-down absolute w-full flex flex-col justify-center bottom-4 text-center">
            <p class="text-white">Keep scrolling to find out more</p>
            <i class="fa-solid fa-circle-chevron-down text-3xl text-white"></i>
        </div>
</section>

<?php
        endwhile;
    endif;
?>