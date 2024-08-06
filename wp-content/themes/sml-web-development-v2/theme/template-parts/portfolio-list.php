<?php
    if(have_rows('shopify_portfolio')):
        while(have_rows('shopify_portfolio')): the_row();

        $shopifyTitle = get_sub_field('shopify_title');
        $shopifyImageOne = get_sub_field('shopify_portfolio_image_one');
        $shopifyTitleOne = get_sub_field('shopify_portfolio_title_one');
        $shopifyDescriptionOne = get_sub_field('shopify_portfolio_description_one');
        $shopifyLinkOne = get_sub_field('shopify_portfolio_link_one');
        $shopifyImageTwo = get_sub_field('shopify_portfolio_image_two');
        $shopifyTitleTwo = get_sub_field('shopify_portfolio_title_two');
        $shopifyDescriptionTwo = get_sub_field('shopify_portfolio_description_two');
        $shopifyLinkTwo = get_sub_field('shopify_portfolio_link_two');
        $shopifyImageThree = get_sub_field('shopify_portfolio_image_three');
        $shopifyTitleThree = get_sub_field('shopify_portfolio_title_three');
        $shopifyDescriptionThree = get_sub_field('shopify_portfolio_description_three');
        $shopifyLinkThree = get_sub_field('shopify_portfolio_link_three');
        
        $wordpressTitle = get_sub_field('wordpress_title');
        $wordpressImageOne = get_sub_field('wordpress_portfolio_image_one');
        $wordpressTitleOne = get_sub_field('wordpress_portfolio_title_one');
        $wordpressDescriptionOne = get_sub_field('wordpress_portfolio_description_one');
        $wordpressLinkOne = get_sub_field('wordpress_portfolio_link_one');
        $wordpressImageTwo = get_sub_field('wordpress_portfolio_image_two');
        $wordpressTitleTwo = get_sub_field('wordpress_portfolio_title_two');
        $wordpressDescriptionTwo = get_sub_field('wordpress_portfolio_description_two');
        $wordpressLinkTwo = get_sub_field('wordpress_portfolio_link_two');
        $wordpressImageThree = get_sub_field('wordpress_portfolio_image_three');
        $wordpressTitleThree = get_sub_field('wordpress_portfolio_title_three');
        $wordpressDescriptionThree = get_sub_field('wordpress_portfolio_description_three');
        $wordpressLinkThree = get_sub_field('wordpress_portfolio_link_three');
?>

<section class="portfolio-list">
    <div class="container">
        <div class="shopify-list-header flex flex-row mt-12">
            <h2 class="underline my-auto"><?php echo $shopifyTitle ?></h2>
            <div class="shopify-list-logo ml-4">
                <img src="/wp-content/uploads/2024/08/Shopify_Icon.svg" alt="Shopify Icon">
            </div>
        </div>

        <div class="shopify-list-container flex flex-col">
            <div class="shopify-item-one flex md:flex-row-reverse flex-col max-h-96 h-full my-16">
                <div class="shopify-item-content md:ml-8 ml-0">
                    <h3 class="pb-8"><?php echo $shopifyTitleOne ?></h3>
                    <div class="shopify-one-description pb-8"><?php echo $shopifyDescriptionOne ?></div>
                    <div class="text-black hover:text-primary-red visited:text-primary-red">
                        <a href="<?php echo $shopifyLinkOne ?>">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <div class="shopify-item-image max-h-96 max-w-[40rem]">
                    <img src="<?php echo $shopifyImageOne ?>" alt="DietBud Image" class="h-full w-full">
                </div>
            </div>
            
            <div class="shopify-item-two flex md:flex-row flex-col">
                <div class="shopify-item-content md:mr-8 m-0">
                    <h3 class="pb-8"><?php echo $shopifyTitleTwo ?></h3>
                    <div class="shopify-one-description pb-8"><?php echo $shopifyDescriptionTwo ?></div>
                    <div class="text-black hover:text-primary-red visited:text-primary-red">
                        <!-- <a href="<?php echo $shopifyLinkTwo ?>">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a> -->
                    </div>
                </div>
                <div class="shopify-item-image max-h-96 max-w-[40rem]">
                    <img src="<?php echo $shopifyImageTwo ?>" alt="" class="h-full w-full">
                </div>
            </div>

            <div class="shopify-item-three flex md:flex-row-reverse flex-col max-h-96 h-full my-16">
                <div class="shopify-item-content md:ml-8 ml-0">
                    <h3 class="pb-8"><?php echo $shopifyTitleThree ?></h3>
                    <div class="shopify-one-description pb-8"><?php echo $shopifyDescriptionThree ?></div>
                    <div class="text-black hover:text-primary-red visited:text-primary-red">
                        <!-- <a href="<?php echo $shopifyLinkThree ?>">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a> -->
                    </div>
                </div>
                <div class="shopify-item-image max-h-96 max-w-[40rem]">
                    <img src="<?php echo $shopifyImageThree ?>" alt="" class="h-full w-full">
                </div>
            </div>
        </div>

        <!-- <div class="wordpress-list-header flex flex-row mt-12">
            <h2 class="underline my-auto"><?php echo $wordpressTitle ?></h2>
            <div class="wordpress-list-logo ml-4">
                <i class="fa-brands fa-wordpress text-7xl"></i>
            </div>
        </div>
        <div class="wordpress-list-container flex flex-col">
            <div class="wordpress-item-one flex md:flex-row-reverse flex-col max-h-96 h-full my-16">
                <div class="shopify-item-content md:ml-8 ml-0">
                    <h3 class="pb-8"><?php echo $wordpressTitleOne ?></h3>
                    <div class="shopify-one-description pb-8"><?php echo $wordpressDescriptionOne ?></div>
                    <div class="text-black hover:text-primary-red visited:text-primary-red">
                    <a href="<?php echo $wordpressLinkOne ?>">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <div class="wordpress-item-image max-h-96 max-w-[40rem]">
                    <img src="<?php echo $wordpressImageOne ?>" alt="" class="h-full w-full">
                </div>
            </div>
            
            <div class="wordpress-item-two flex md:flex-row flex-col">
                <div class="wordpress-item-content md:mr-8 m-0">
                    <h3 class="pb-8"><?php echo $wordpressTitleTwo ?></h3>
                    <div class="wordpress-one-description pb-8"><?php echo $wordpressDescriptionTwo ?></div>
                    <div class="text-black hover:text-primary-red visited:text-primary-red">
                        <a href="<?php echo $wordpressLinkTwo ?>">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <div class="wordpress-item-image max-h-96 max-w-[40rem]">
                    <img src="<?php echo $wordpressImageTwo ?>" alt="" class="h-full w-full">
                </div>
            </div>

            <div class="wordpress-item-three flex md:flex-row-reverse flex-col max-h-96 h-full my-16">
                <div class="wordpress-item-content md:ml-8 ml-0">
                    <h3 class="pb-8"><?php echo $wordpressTitleThree ?></h3>
                    <div class="wordpress-one-description pb-8"><?php echo $wordpressDescriptionThree ?></div>
                    <div class="text-black hover:text-primary-red visited:text-primary-red">
                        <a href="<?php echo $wordpressLinkThree ?>">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <div class="wordpress-item-image max-h-96 max-w-[40rem]">
                    <img src="<?php echo $wordpressImageThree ?>" alt="" class="h-full w-full">
                </div>
            </div>
        </div> -->
    </div>
</section>

<?php
        endwhile;
    endif;
?>