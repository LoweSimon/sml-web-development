<section class="testimonials">
    <div class="container py-8">
        <?php
            $args = array(
                'post_type' => 'testimonials',
            );

            $the_query = new WP_Query( $args );
            if( $the_query->have_posts() ) :
                while( $the_query->have_posts() ): $the_query->the_post();
                ?>
                <div class="text-center">
                    <h3><?php echo the_title(); ?></h3>
                    <?php echo the_content(); ?>
                </div>

        <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
</section>