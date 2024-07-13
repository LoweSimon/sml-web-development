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
        <div class="container py-16">
            <div class="reason-title mb-8">
                <h2 class="text-3xl underline flex justify-center text-center"><?php echo $fiveReasonsTitle; ?></h2>
            </div>
            <div class="w-full flex justify-center">
                <div class="reasons-container lg:w-3/4 w-full flex flex-row flex-wrap justify-around">
                    <div class="reason">
                        <div class="reason-one-icon text-3xl pb-2">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <h4 class="pb-4"><?php echo $reasonOneTitle ?></h4>
                        <div class="reason-description">
                            <?php echo $reasonOneDescription ?>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-two-icon text-3xl pb-2">
                            <i class="fa-solid fa-thumbs-up"></i>
                        </div>
                        <h4 class="pb-4"><?php echo $reasonTwoTitle ?></h4>
                        <div class="reason-description">
                            <?php echo $reasonTwoDescription ?>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-three-icon text-3xl pb-2">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <h4 class="pb-4"><?php echo $reasonThreeTitle ?></h4>
                        <div class="reason-description">
                            <?php echo $reasonThreeDescription ?>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-four-icon text-3xl pb-2">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <h4 class="pb-4"><?php echo $reasonFourTitle ?></h4>
                        <div class="reason-description">
                            <?php echo $reasonFourDescription ?>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason-five-icon text-3xl pb-2">

                        </div>
                        <h4 class="pb-4"><?php echo $reasonFiveTitle ?></h4>
                        <div class="reason-description">
                            <?php echo $reasonFiveDescription ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
        endwhile;
    endif;
?>