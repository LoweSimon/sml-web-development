<?php
    if(have_rows('services')):
        while(have_rows('services')): the_row();

        $servicesTitle = get_sub_field('services_title');
        $ecommService = get_sub_field('e_comm_service');
        $ecommDescription = get_sub_field('e_comm_service_description');
        $non_ecommService = get_sub_field('non_e_comm_service_title');
        $non_ecommDescription = get_sub_field('non_e_comm_service_description');
        $service_image = get_sub_field('service_image');
?>

<div class="services-frame absolute top-0 xl:w-[536px] xl:h-[99.16px] lg:w-[450px] md:w-[350px] sm:w-[250px] xs:w-[250px] w-56 flex items-center justify-center">
    <img src="/wp-content/uploads/2024/04/header-frame.svg" alt="" class="absolute w-[536px] h-[99.16px]">
    <h2 class="text-sp-blue"><?php echo $servicesTitle; ?></h2>
</div>

<div class="swiper mySwiper left-0 top-40 xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem]">
    <div class="swiper-wrapper">
      <div class="swiper-slide ecomm flex xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] justify-center items-center">
      <img src="/wp-content/uploads/2024/04/parchment-background-scaled.jpg" alt="" class="absolute xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] opacity-80">
        <div class="services-content flex flex-col absolute translate-x-[3.125rem] top-14 h-full xl:w-[25rem] lg:w-80">
            <h3 class="flex justify-center items-center underline"><?php echo $ecommService; ?></h3>
            <div class="absolute top-16">
                <?php echo $ecommDescription; ?>
            </div>
        </div>
      </div>
      <div class="swiper-slide non-ecomm flex xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] justify-center items-center">
        <img src="/wp-content/uploads/2024/04/parchment-background-scaled.jpg" alt="" class="absolute xl:w-[31rem] xl:h-[40rem] md:w-96 md:h-[35rem] opacity-80">
        <div class="services-content flex flex-col absolute translate-x-[3.125rem] top-14 h-full xl:w-[25rem] lg:w-80">
            <h3 class="flex justify-center items-center underline"><?php echo $non_ecommService; ?></h3>
            <div class="absolute top-16">
                <?php echo $non_ecommDescription; ?>
            </div>
        </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
</div>

<div class="image-container w-[31rem] h-[40rem] absolute top-40 right-20">
  <img src="<?php echo $service_image; ?>" alt="" class="h-full w-full" >
</div>




<?php
        endwhile;
    endif;
?>