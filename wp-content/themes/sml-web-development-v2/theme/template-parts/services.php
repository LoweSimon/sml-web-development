<?php
    if(have_rows('services_group')):
        while(have_rows('services_group')): the_row();

        $servicesHeader = get_sub_field('services_header');
        $servicesText = get_sub_field('services_text', false, false);
        $servicesButton = get_sub_field('services_button');
        $firstServiceHeader = get_sub_field('first_service_header');
        $firstServiceText = get_sub_field('first_service_text', false, false);
        $secondServiceHeader = get_sub_field('second_service_header');
        $secondServiceText = get_sub_field('second_service_text', false, false);
        $thirdServiceHeader = get_sub_field('third_service_header');
        $thirdServiceText = get_sub_field('third_service_text', false, false);
?>

<section class="services relative top-[31rem]">
    <div class="container flex flex-row flex-wrap justify-between py-16">
        <div class="left-content xl:w-1/3 lg:w-full">
            <h3 class="text-3xl font-bold"><?php echo $servicesHeader ?></h3>
            <p class="text-xl font-normal py-5"><?php echo $servicesText ?></p>
            <a href="<?php echo $servicesButton ?>" class="btn">Get in contact today</a>
        </div>
        <div class="right-content 2xl:w-1/2 xl:w-3/5 w-full flex flex-row flex-wrap justify-around">
            <div class="first-service service-container flex-col">
                <div class="inner-content p-4">
                    <i class="fa-solid fa-object-group text-primary-red text-5xl"></i>
                    <h4><?php echo $firstServiceHeader ?></h4>
                    <p><?php echo $firstServiceText ?></p>
                </div>
            </div>
            <div class="second-service service-container flex-col">
                <div class="inner-content p-4">
                    <i class="fa-solid fa-code text-primary-red text-5xl"></i>
                    <h4><?php echo $secondServiceHeader ?></h4>
                    <p><?php echo $secondServiceText ?></p>
                </div>
            </div>
            <div class="third-service service-container flex-col mt-8">
                <div class="inner-content p-4">
                    <i class="fa-solid fa-display text-primary-red text-5xl"></i>
                    <h4><?php echo $thirdServiceHeader ?></h4>
                    <p><?php echo $thirdServiceText ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
        endwhile;
    endif;
?>