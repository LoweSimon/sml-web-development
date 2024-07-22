<?php
    if(have_rows('thin_hero_section')):
        while(have_rows('thin_hero_section')): the_row();

        $thinHeroImage = get_sub_field('thin_hero_image');
        $thinHeroHeader = get_sub_field('thin_hero_header');
        $thinHeroDescription = get_sub_field('thin_hero_description');
?>

<section class="thin-hero relative max-h-[36rem] h-full w-full">
    <div class="thin-hero-image h-full w-full">
        <img src="<?php echo $thinHeroImage ?>" alt="" class="w-full h-full">
    </div>
    <div class="container">
        <div class="max-w-[60rem] lg:w-full max-h-[24rem] lg:h-full sm:h-full bg-header-box shadow-[#BF000080] shadow-lg rounded-3xl flex justify-center items-center text-center">
            <div class="thing-hero-content absolute flex flex-col text-white">
                <h1 class="md:text-6xl sm:text-[2.75rem] text-xl text-white font-bold py-5"><?php echo $thinHeroHeader ?></h1>
                <div class="thin-hero-description">
                    <?php echo $thinHeroDescription; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
        endwhile;
    endif;
?>