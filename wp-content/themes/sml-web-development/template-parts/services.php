<?php
    if(have_rows('services')):
        while(have_rows('services')): the_row();

        $servicesTitle = get_sub_field('services_title');
        $ecommService = get_sub_field('e_comm_service');
        $ecommDescription = get_sub_field('e_comm_service_description');
        $non_ecommService = get_sub_field('non_e_comm_service_title');
        $non_ecommDescription = get_sub_field('non_e_comm_service_description');
?>

<div class="services-frame absolute top-0 xl:w-[536px] xl:h-[99.16px] lg:w-[450px] md:w-[350px] sm:w-[250px] xs:w-[250px] w-56 flex items-center justify-center">
    <img src="/wp-content/uploads/2024/04/header-frame.svg" alt="" class="absolute w-[536px] h-[99.16px]">
    <h2 class="text-sp-blue"><?php echo $servicesTitle; ?></h2>
</div>

<div class="service-container flex justify-between w-full absolute top-44 container">

    <div class="ecomm flex xl:w-[31rem] xl:h-[40rem] justify-center items-center">
        <img src="/wp-content/uploads/2024/04/bnspyrd_stock_postal_steampunk_ochre_png_by_bnspyrd_d4n74ya.png" alt="" class="absolute xl:w-[31rem] xl:h-[40rem] opacity-80">
        <div class="services-content flex flex-col absolute xl:top-14 xl:w-[25rem]">
            <h3 class="flex justify-center items-center underline"><?php echo $ecommService; ?></h3>
            <div class="absolute xl:top-16">
                <?php echo $ecommDescription; ?>
            </div>
        </div>
    </div>

    <div class="non-ecomm flex xl:w-[31rem] xl:h-[40rem] justify-center items-center">
        <img src="/wp-content/uploads/2024/04/bnspyrd_stock_postal_steampunk_ochre_png_by_bnspyrd_d4n74ya.png" alt="" class="absolute xl:w-[31rem] xl:h-[40rem] opacity-80">
        <div class="services-content flex flex-col absolute xl:top-14 xl:w-[25rem]">
            <h3 class="flex justify-center items-center underline"><?php echo $non_ecommService; ?></h3>
            <div class="absolute xl:top-16">
                <?php echo $non_ecommDescription; ?>
            </div>
        </div>
    </div>

</div>

<?php
        endwhile;
    endif;
?>