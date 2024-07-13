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

<section class="services bg-gray-100">
    <div class="custom-shape-divider-top-1720880573 z-10">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container flex flex-row flex-wrap justify-between py-16 z-20 relative">
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
            <div class="second-service service-container flex-col md:mt-0 mt-8">
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
    <div class="custom-shape-divider-bottom-1720882309">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<?php
        endwhile;
    endif;
?>