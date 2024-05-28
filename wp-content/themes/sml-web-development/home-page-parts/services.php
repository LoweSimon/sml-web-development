<?php
    if(have_rows('services')):
        while(have_rows('services')): the_row();

        $servicesTitle = get_sub_field('services_title');
        $designTitle = get_sub_field('design');
        $designDescription = get_sub_field('design_description');
        $developTitle = get_sub_field('develop');
        $developDescription = get_sub_field('develop_description');
        $deployTitle = get_sub_field('deploy');
        $deployDescription = get_sub_field('deploy_description');
        $service_image = get_sub_field('service_image');
?>

<div class="services-frame absolute top-0 xl:w-[536px] xl:h-[99.16px] lg:w-[450px] md:w-[350px] sm:w-[250px] xs:w-[250px] w-56 flex items-center justify-center">
    <img src="/wp-content/uploads/2024/04/header-frame.svg" alt="" class="absolute w-[536px] h-[99.16px]">
    <h2 class="text-sp-blue"><?php echo $servicesTitle; ?></h2>
</div>

<div class="swiper mySwiper left-0 top-40 xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] w-72 h-[40rem] skew-x-2">
    <div class="swiper-wrapper">
      <div class="swiper-slide design flex xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] w-56 h-20 justify-center items-center">
        <img src="/wp-content/uploads/2024/04/parchment-background-scaled.jpg" alt="" class="absolute xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] h-full opacity-80">
          <div class="services-content flex flex-col relative top-14 h-full w-3/4 mx-auto">
              <h3 class="flex justify-center items-center underline mb-5 text-black"><?php echo $designTitle; ?></h3>
              <div class="text-center text-black">
                  <?php echo $designDescription; ?>
              </div>
              <div class="service-icon flex mb-5 mx-auto w-full h-1/2 items-center justify-center">
                <i class="fa-solid fa-palette sm:text-[18rem] text-[10rem] opacity-40"></i>
              </div>
          </div>
      </div>
      <div class="swiper-slide development flex xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] w-56 h-20 justify-center items-center">
        <img src="/wp-content/uploads/2024/04/parchment-background-scaled.jpg" alt="" class="absolute xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] h-full opacity-80">
        <div class="services-content flex flex-col relative top-14 h-full w-3/4 mx-auto">
            <h3 class="flex justify-center items-center underline mb-5 text-black"><?php echo $developTitle; ?></h3>
            <div class="text-center text-black">
                <?php echo $developDescription; ?>
            </div>
            <div class="service-icon flex mb-5 mx-auto w-full h-1/2 items-center justify-center">
              <i class="fa-solid fa-code sm:text-[18rem] text-[10rem] opacity-40"></i>
            </div>
        </div>
      </div>
      <div class="swiper-slide deployment flex xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] w-56 h-20 justify-center items-center">
        <img src="/wp-content/uploads/2024/04/parchment-background-scaled.jpg" alt="" class="absolute xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] h-full opacity-80">
        <div class="services-content flex flex-col relative top-14 h-full w-3/4 mx-auto">
            <h3 class="flex justify-center items-center underline mb-5 text-black"><?php echo $deployTitle; ?></h3>
            <div class="text-center text-black">
                <?php echo $deployDescription; ?>
            </div>
            <div class="service-icon flex mb-5 mx-auto w-full h-1/2 items-center justify-center">
              <i class="fa-solid fa-gear sm:text-[18rem] text-[10rem] opacity-40"></i>
            </div>
        </div>
      </div>
  </div>
  <div class="swiper-pagination"></div>
</div>

<div class="image-container w-[31rem] h-[40rem] absolute top-40 right-20 xl:flex hidden">
  <img src="<?php echo $service_image; ?>" alt="" class="h-full w-full" >
</div>




<?php
        endwhile;
    endif;
?>