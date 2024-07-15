<?php
    if(have_rows('5_reason_to_work_with_me')):
        while(have_rows('5_reason_to_work_with_me')): the_row();

        $fiveReasonsTitle = get_sub_field('five_reasons_title');
        $reasonOneTitle = get_sub_field('reason_one_title');
        $reasonOneDescription = get_sub_field('reason_one_description');
        $reasonTwoTitle = get_sub_field('reason_two_title');
        $reasonTwoDescription = get_sub_field('reason_two_description');
        $reasonThreeTitle = get_sub_field('reason_three_title');
        $reasonThreeDescription = get_sub_field('reason_three_description');
        $reasonFourTitle = get_sub_field('reason_four_title');
        $reasonFourDescription = get_sub_field('reason_four_description');
        $reasonFiveTitle = get_sub_field('reason_five_title');
        $reasonFiveDescription = get_sub_field('reason_five_description');
?>

<section class="reasons-to-work-with-me">
    <div class="custom-shape-divider-top-1721051400 z-10">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
        <div class="container py-16 z-20">
            <div class="reason-title mb-8">
                <h2 class="text-3xl underline flex justify-center text-center"><?php echo $fiveReasonsTitle; ?></h2>
            </div>
            <div class="w-full flex justify-center">
                <div class="reasons-container lg:w-3/4 w-full flex flex-row flex-wrap justify-around">
                    <div class="reason">
                        <div class="reason-one-icon text-3xl pr-4">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div class="reason-content flex flex-col">
                            <h4 class="pb-4"><?php echo $reasonOneTitle ?></h4>
                            <div class="reason-description">
                                <?php echo $reasonOneDescription ?>
                            </div>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-two-icon text-3xl pr-4">
                            <i class="fa-solid fa-thumbs-up"></i>
                        </div>
                        <div class="reason-content flex flex-col">
                            <h4 class="pb-4"><?php echo $reasonTwoTitle ?></h4>
                            <div class="reason-description">
                                <?php echo $reasonTwoDescription ?>
                            </div>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-three-icon text-3xl pr-4">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="reason-content flex flex-col">
                            <h4 class="pb-4"><?php echo $reasonThreeTitle ?></h4>
                            <div class="reason-description">
                                <?php echo $reasonThreeDescription ?>
                            </div>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-four-icon text-3xl pr-4">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="reason-content flex flex-col">
                            <h4 class="pb-4"><?php echo $reasonFourTitle ?></h4>
                            <div class="reason-description">
                                <?php echo $reasonFourDescription ?>
                            </div>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-five-icon text-3xl pr-4">

                        </div>
                        <div class="reason-content flex flex-col">
                            <h4 class="pb-4"><?php echo $reasonFiveTitle ?></h4>
                            <div class="reason-description">
                                <?php echo $reasonFiveDescription ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1721051432">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
</section>

<?php
        endwhile;
    endif;
?>