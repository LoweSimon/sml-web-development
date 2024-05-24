<?php
    $args = array(
        'post_type' => 'testimonial',
        'post_status' => 'publish'
    );
    $loop = new WP_Query( $args );

    
    ?>

        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-20">
                    <?php 
                    while( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <h4><?php the_title(); ?></h4>
                </div>
            </div>
            <div class="swiper-navigation"></div>
        </div>

    <?php
    endwhile;
    wp_reset_postdata();
?>