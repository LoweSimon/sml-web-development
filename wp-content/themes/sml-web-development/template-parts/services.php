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
    <h2 class="text-2xl text-sp-blue font-bold"><?php echo $servicesTitle; ?></h2>
</div>

<div class="service-container flex justify-between w-full absolute top-44">
    <div class="ecomm block 2xl:w-[492px] 2xl:h-[634px]">
        <img src="/wp-content/uploads/2024/04/bnspyrd_stock_postal_steampunk_ochre_png_by_bnspyrd_d4n74ya.png" alt="" class="absolute 2xl:w-[492px] 2xl:h-[634px]">
        <div class="services-content block absolute top-5 2xl:w-[492px] 2xl:h-[634px]">
            <h3 class="flex justify-center items-center"><?php echo $ecommService; ?></h3>
            <?php echo $ecommDescription; ?>
        </div>
    </div>
    <div class="non-ecomm block 2xl:w-[492px] 2xl:h-[634px]">
        <img src="/wp-content/uploads/2024/04/bnspyrd_stock_postal_steampunk_ochre_png_by_bnspyrd_d4n74ya.png" alt="" class="absolute 2xl:w-[492px] 2xl:h-[634px]">
        <h3 class=""><?php echo $non_ecommService; ?></h3>
        <?php echo $non_ecommDescription; ?>
    </div>
</div>

<?php
        endwhile;
    endif;
?>