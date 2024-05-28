<?php
    if(have_rows('testimonials')):
        while(have_rows('testimonials')): the_row();

        $testimonialTitle = get_sub_field('testimonial_title');
?>

<div class="services-frame absolute top-0 xl:w-[536px] xl:h-[99.16px] lg:w-[450px] md:w-[350px] sm:w-[250px] xs:w-[250px] w-56 flex items-center justify-center">
    <img src="/wp-content/uploads/2024/04/header-frame.svg" alt="" class="absolute w-[536px] h-[99.16px]">
    <h2 class="text-sp-blue"><?php echo $testimonialTitle; ?></h2>
</div>

<?php
    $args = array(
        'post_type' => 'testimonial',
    );
    $loop = new WP_Query( $args );

    
    ?>

        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
            <?php 
                    while( $loop->have_posts() ) : $loop->the_post();
                    ?>
                <div class="swiper-slide w-20">
                    
                    <h4><?php the_title(); ?></h4>
                </div>
            </div>
            <div class="swiper-navigation"></div>
        </div>

    <?php
            endwhile;
            wp_reset_postdata();
        endwhile;
    endif;
?>