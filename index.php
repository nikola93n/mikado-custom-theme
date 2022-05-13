<?php get_header(); ?>


<!-- Start Hero Section -->
<section class="hero d-flex align-items-center">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-xs-12 col-lg-6">
                <?php $title = get_field( 'title', false, false ); ?>
                <?php if ( ! empty( $title ) ) : ?>
                <h1 class="mt-5 pt-3 mt-lg-0 pt-lg-0"><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php $paragraph = get_field( 'paragraph', false, false ); ?>
                <?php if ( ! empty( $paragraph ) ) : ?>
                <p class="my-4 lh-lg"><?php echo $paragraph; ?></p>
                <?php endif; ?>
                <?php $button = get_field('button'); ?>
                <?php $button_url = get_field('button_url'); ?>
                <?php if(!empty($button)) : ?>
                <?php if(!empty($button_url)) : ?>
                <a href="<?php echo $button_url; ?>" class="btn btn-primary"><?php echo $button; ?></a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php $activate_tilt = get_field ('activate_tilt');?>
            <div class="col-xs-12 col-lg-6 justify-content-evenly" <?php echo $activate_tilt; ?>>
                <?php $hero_image = get_field( 'hero_image' ); ?>
                <?php if ( ! empty( $hero_image ) ) : ?> <img src="<?php echo $hero_image['url']?>"
                    alt="<?php echo $hero_image['alt'] ?>" class="img-fluid hero-img mx-auto py-5 pb-lg-5">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
</div>
<!-- End Hero Section -->
<!-- Start Info Section -->
<section id="info" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php $about_image = get_field ( 'about_image' ); ?>
                <?php if(!empty($about_image)) : ?> <img src="<?php echo $about_image['url'] ?>"
                    alt="<?php echo $about_image['alt']; ?>" class="img-fluid">
                <?php endif;?>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <?php $about_info = get_field('about_info'); ?>
                <?php if(!empty($about_info)) : ?>
                <p class="heading-top"><?php echo $about_info; ?></p>
                <?php endif; ?>
                <?php $about_title = get_field('about_title', false, false); ?>
                <?php if(!empty($about_title)) : ?>
                <h2><?php echo $about_title; ?></h2>
                <?php endif; ?>
                <?php $about_paragraph = get_field ( 'about_paragraph', false, false ); ?>
                <?php if(!empty($about_paragraph)) : ?>
                <p class="py-3"><?php echo $about_paragraph; ?></p>
                <?php endif; ?>
                <ul class="pe-5">

                    <?php $about_icons_first_line_icon = get_field ( 'about_icons_first_line_icon', false, false ); ?>
                    <?php $about_icons_first_line_text = get_field ( 'about_icons_first_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_first_line_icon)) : ?>
                    <?php if(!empty($about_icons_first_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_first_line_icon; ?>"></i></span><span><?php echo $about_icons_first_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_second_line_icon = get_field ( 'about_icons_second_line_icon', false, false ); ?>
                    <?php $about_icons_second_line_text = get_field ( 'about_icons_second_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_second_line_icon)) : ?>
                    <?php if(!empty($about_icons_second_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_second_line_icon; ?>"></i></span><span><?php echo $about_icons_second_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_third_line_icon = get_field ( 'about_icons_third_line_icon', false, false ); ?>
                    <?php $about_icons_third_line_text = get_field ( 'about_icons_third_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_third_line_icon)) : ?>
                    <?php if(!empty($about_icons_third_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_third_line_icon; ?>"></i></span><span><?php echo $about_icons_third_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_fourth_line_icon = get_field ( 'about_icons_fourth_line_icon', false, false ); ?>
                    <?php $about_icons_fourth_line_text = get_field ( 'about_icons_fourth_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_fourth_line_icon)) : ?>
                    <?php if(!empty($about_icons_fourth_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_fourth_line_icon; ?>"></i></span><span><?php echo $about_icons_fourth_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_fifth_line_icon = get_field ( 'about_icons_fifth_line_icon', false, false ); ?>
                    <?php $about_icons_fifth_line_text = get_field ( 'about_icons_fifth_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_fifth_line_icon)) : ?>
                    <?php if(!empty($about_icons_fifth_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_fifth_line_icon; ?>"></i></span><span><?php echo $about_icons_fifth_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_sixth_line_icon = get_field ( 'about_icons_sixth_line_icon', false, false ); ?>
                    <?php $about_icons_sixth_line_text = get_field ( 'about_icons_sixth_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_sixth_line_icon)) : ?>
                    <?php if(!empty($about_icons_sixth_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_sixth_line_icon; ?>"></i></span><span><?php echo $about_icons_sixth_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Info Section -->
<!-- Start Counter Section -->
<?php $background_image_and_color_background_image = get_field('background_image_and_color_background_image'); ?>
<?php $background_image_and_color_background_color = get_field('background_image_and_color_background_color'); ?>
<section id="awards" style="background-image: url(<?php echo $background_image_and_color_background_image['url']; ?>); background-color:
<?php echo $background_image_and_color_background_color; ?>">
    <div class="container">
        <div class="row">
            <?php $numbers_section_one_first_icon = get_field('numbers_section_one_first_icon'); ?>
            <?php $numbers_section_one_number = get_field('numbers_section_one_number'); ?>
            <?php $numbers_section_one_first_description = get_field('numbers_section_one_first_description'); ?>
            <?php if(!empty($numbers_section_one_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_one_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_one_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_one_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_one_first_description; ?></div>
            </div>
            <?php endif; ?>


            <?php $numbers_section_two_first_icon = get_field('numbers_section_two_first_icon'); ?>
            <?php $numbers_section_two_number = get_field('numbers_section_two_number'); ?>
            <?php $numbers_section_two_first_description = get_field('numbers_section_two_first_description'); ?>
            <?php if(!empty($numbers_section_two_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_two_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_two_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_two_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_two_first_description; ?></div>
            </div>
            <?php endif; ?>


            <?php $numbers_section_three_first_icon = get_field('numbers_section_three_first_icon'); ?>
            <?php $numbers_section_three_number = get_field('numbers_section_three_number'); ?>
            <?php $numbers_section_three_first_description = get_field('numbers_section_three_first_description'); ?>
            <?php if(!empty($numbers_section_three_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_three_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_three_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_three_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_three_first_description; ?></div>
            </div>
            <?php endif; ?>


            <?php $numbers_section_four_first_icon = get_field('numbers_section_four_first_icon'); ?>
            <?php $numbers_section_four_number = get_field('numbers_section_four_number'); ?>
            <?php $numbers_section_four_first_description = get_field('numbers_section_four_first_description'); ?>
            <?php if(!empty($numbers_section_four_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_four_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_four_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_four_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_four_first_description; ?></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Counter Section -->
<!-- Start Team Section -->
<section id="team" class="py-5">
    <div class="container pt-5">
        <div class="row align-content-center">
            <div class="col-lg-6">
                <?php $about_team_suptitle = get_field('about_team_suptitle', false, false); ?>
                <p class="heading-top"><?php echo $about_team_suptitle; ?></p>
                <?php $about_team_title = get_field('about_team_title', false, false); ?>
                <h2><?php echo $about_team_title; ?></h2>
                <?php $about_team_paragraph = get_field('about_team_paragraph', false, false); ?>
                <p class="py-3"><?php echo $about_team_paragraph; ?></p>
            </div>
            <div class="col-lg-6">
                <ul class="services-skill">

                    <?php $first_progress_bar_title = get_field('first_progress_bar_title', false, false) ?>
                    <?php if(!empty($first_progress_bar_title)) : ?>

                    <?php $first_progress_bar_start_number = get_field('first_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($first_progress_bar_start_number)) : ?>

                    <?php $first_progress_bar_end_number = get_field('first_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($first_progress_bar_end_number)) : ?>

                    <?php $first_progress_bar_animation_duration = get_field('first_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($first_progress_bar_animation_duration)) : ?>

                    <?php $first_progress_bar_animation_max_value = get_field('first_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($first_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $first_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $first_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $first_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $first_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $first_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $first_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $first_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $first_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $first_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>



                    <?php $second_progress_bar_title = get_field('second_progress_bar_title', false, false) ?>
                    <?php if(!empty($second_progress_bar_title)) : ?>

                    <?php $second_progress_bar_start_number = get_field('second_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($second_progress_bar_start_number)) : ?>

                    <?php $second_progress_bar_end_number = get_field('second_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($second_progress_bar_end_number)) : ?>

                    <?php $second_progress_bar_animation_duration = get_field('second_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($second_progress_bar_animation_duration)) : ?>

                    <?php $second_progress_bar_animation_max_value = get_field('second_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($second_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $second_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $second_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $second_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $second_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $second_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $second_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $second_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $second_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $second_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>



                    <?php $third_progress_bar_title = get_field('third_progress_bar_title', false, false) ?>
                    <?php if(!empty($third_progress_bar_title)) : ?>

                    <?php $third_progress_bar_start_number = get_field('third_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($third_progress_bar_start_number)) : ?>

                    <?php $third_progress_bar_end_number = get_field('third_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($third_progress_bar_end_number)) : ?>

                    <?php $third_progress_bar_animation_duration = get_field('third_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($third_progress_bar_animation_duration)) : ?>

                    <?php $third_progress_bar_animation_max_value = get_field('third_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($third_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $third_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $third_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $third_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $third_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $third_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $third_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $third_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $third_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $third_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>



                    <?php $fourth_progress_bar_title = get_field('fourth_progress_bar_title', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_title)) : ?>

                    <?php $fourth_progress_bar_start_number = get_field('fourth_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_start_number)) : ?>

                    <?php $fourth_progress_bar_end_number = get_field('fourth_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_end_number)) : ?>

                    <?php $fourth_progress_bar_animation_duration = get_field('fourth_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_animation_duration)) : ?>

                    <?php $fourth_progress_bar_animation_max_value = get_field('fourth_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $fourth_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $fourth_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $fourth_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $fourth_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $fourth_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $fourth_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $fourth_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $fourth_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $fourth_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- Team People -->
        <div class="row py-5">

            <?php $team_member_one_image = get_field('team_member_one_image'); ?>
            <?php if(!empty($team_member_one_image)) : ?>

            <?php $team_member_one_name = get_field('team_member_one_name'); ?>

            <?php $team_member_one_position = get_field('team_member_one_position'); ?>

            <?php $team_member_one_first_network_icon = get_field('team_member_one_first_network_icon'); ?>
            <?php $team_member_one_first_network_url = get_field('team_member_one_first_network_url'); ?>

            <?php $team_member_one_second_network_icon = get_field('team_member_one_second_network_icon'); ?>
            <?php $team_member_one_second_network_url = get_field('team_member_one_second_network_url'); ?>

            <?php $team_member_one_third_network_icon = get_field('team_member_one_third_network_icon'); ?>
            <?php $team_member_one_third_network_url = get_field('team_member_one_third_network_url'); ?>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="<?php echo $team_member_one_image['url']; ?>"
                        alt="<?php $team_member_one_image['alt']; ?>" class="img-fluid">
                    <div class="team-detail">
                        <h5 class="text-center"><?php echo $team_member_one_name; ?></h5>
                        <p class="text-center"><?php echo $team_member_one_position; ?></p>
                        <ul class="d-flex justify-content-center">
                            <li><a href="<?php echo $team_member_one_first_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_one_first_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_one_second_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_one_second_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_one_third_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_one_third_network_icon; ?>"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <?php $team_member_two_image = get_field('team_member_two_image'); ?>
            <?php if(!empty($team_member_two_image)) : ?>

            <?php $team_member_two_name = get_field('team_member_two_name'); ?>

            <?php $team_member_two_position = get_field('team_member_two_position'); ?>

            <?php $team_member_two_first_network_icon = get_field('team_member_two_first_network_icon'); ?>
            <?php $team_member_two_first_network_url = get_field('team_member_two_first_network_url'); ?>

            <?php $team_member_two_second_network_icon = get_field('team_member_two_second_network_icon'); ?>
            <?php $team_member_two_second_network_url = get_field('team_member_two_second_network_url'); ?>

            <?php $team_member_two_third_network_icon = get_field('team_member_two_third_network_icon'); ?>
            <?php $team_member_two_third_network_url = get_field('team_member_two_third_network_url'); ?>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="<?php echo $team_member_two_image['url']; ?>"
                        alt="<?php $team_member_two_image['alt']; ?>" class="img-fluid">
                    <div class="team-detail">
                        <h5 class="text-center"><?php echo $team_member_two_name; ?></h5>
                        <p class="text-center"><?php echo $team_member_two_position; ?></p>
                        <ul class="d-flex justify-content-center">
                            <li><a href="<?php echo $team_member_two_first_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_two_first_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_two_second_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_two_second_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_two_third_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_two_third_network_icon; ?>"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>



            <?php $team_member_three_image = get_field('team_member_three_image'); ?>
            <?php if(!empty($team_member_three_image)) : ?>

            <?php $team_member_three_name = get_field('team_member_three_name'); ?>

            <?php $team_member_three_position = get_field('team_member_three_position'); ?>

            <?php $team_member_three_first_network_icon = get_field('team_member_three_first_network_icon'); ?>
            <?php $team_member_three_first_network_url = get_field('team_member_three_first_network_url'); ?>

            <?php $team_member_three_second_network_icon = get_field('team_member_three_second_network_icon'); ?>
            <?php $team_member_three_second_network_url = get_field('team_member_three_second_network_url'); ?>

            <?php $team_member_three_third_network_icon = get_field('team_member_three_third_network_icon'); ?>
            <?php $team_member_three_third_network_url = get_field('team_member_three_third_network_url'); ?>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="<?php echo $team_member_three_image['url']; ?>"
                        alt="<?php $team_member_three_image['alt']; ?>" class="img-fluid">
                    <div class="team-detail">
                        <h5 class="text-center"><?php echo $team_member_three_name; ?></h5>
                        <p class="text-center"><?php echo $team_member_three_position; ?></p>
                        <ul class="d-flex justify-content-center">
                            <li><a href="<?php echo $team_member_three_first_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_three_first_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_three_second_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_three_second_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_three_third_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_three_third_network_icon; ?>"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Team Section -->
<!-- Start Partners Section -->
<section id="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper mySwiper" id="benefits">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/Logo-1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/Logo-2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/Logo-3.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/Logo-4.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/Logo-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partners Section -->
<!-- Start Portfolio Section -->
<section id="portfolio">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center mx-550">
                <p class="heading-top">See Our Amazing Work</p>
                <h2>Creative Work</h2>
                <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eveniet eos
                    necessitatibus maxime assumenda aspernatur corrupti nobis provident facilis praesentium.</p>
            </div>
        </div>
        <div class="row mb-5 mt-4 button-group filter-button-group">
            <div class="col d-flex justify-content-center flex-wrap">
                <button type="button" data-filter="*" class="mx-3" id="automatic-click">All</button>
                <button type="button" data-filter=".graphic-design" class="mx-3">Graphic Design</button>
                <button type="button" data-filter=".web-design" class="mx-3">Web Design</button>
                <button type="button" data-filter=".seo" class="mx-3">Seo</button>
                <button type="button" data-filter=".instagram-management" class="mx-3">Instagram Management</button>
            </div>
        </div>

        <div class="row justify-content-center g-0" id="portfolio-list">
            <div class="col-lg-4 col-md-6 graphic-design grid-item">
                <figure class="product-item">
                    <img src="images/portfolio/1.jpg" alt="" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="bi bi-search"></i>
                        <h5 class="title mt-1">Project Name</h5>
                        <span class="sub-title"><a href="#">Find out More</a></span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 graphic-design grid-item">
                <figure class="product-item">
                    <img src="images/portfolio/2.jpg" alt="" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="bi bi-search"></i>
                        <h5 class="title mt-1">Project Name</h5>
                        <span class="sub-title"><a href="#">Find out More</a></span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 web-design grid-item">
                <figure class="product-item">
                    <img src="images/portfolio/3.jpg" alt="" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="bi bi-search"></i>
                        <h5 class="title mt-1">Project Name</h5>
                        <span class="sub-title"><a href="#">Find out More</a></span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 seo grid-item">
                <figure class="product-item">
                    <img src="images/portfolio/4.jpg" alt="" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="bi bi-search"></i>
                        <h5 class="title mt-1">Project Name</h5>
                        <span class="sub-title"><a href="#">Find out More</a></span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 instagram-management grid-item">
                <figure class="product-item">
                    <img src="images/portfolio/5.jpg" alt="" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="bi bi-search"></i>
                        <h5 class="title mt-1">Project Name</h5>
                        <span class="sub-title"><a href="#">Find out More</a></span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 graphic-design grid-item">
                <figure class="product-item">
                    <img src="images/portfolio/6.jpg" alt="" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="bi bi-search"></i>
                        <h5 class="title mt-1">Project Name</h5>
                        <span class="sub-title"><a href="#">Find out More</a></span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 seo grid-item">
                <figure class="product-item">
                    <img src="images/portfolio/7.jpg" alt="" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="bi bi-search"></i>
                        <h5 class="title mt-1">Project Name</h5>
                        <span class="sub-title"><a href="#">Find out More</a></span>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->

<!-- Start Testimonials Section -->
<section id="testimonials" class="parallax" style="background-image: url(images/bg-testimonials.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6 p-5">
                <div class="swiper swiper-testimonials">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-4">
                            <i class="bi bi-chat-square-quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aut sapiente natus
                                vitae, saepe quam eos, praesentium architecto ab facere, ipsam molestias beatae
                                cumque nihil vero maxime. Esse necessitatibus deserunt eos illo, neque voluptates
                                amet ducimus inventore commodi voluptatibus? Laudantium.</p>
                            <div class="client d-flex pt-3">
                                <img src="images/User.png" alt="">
                                <div class="rating ps-4 d-flex flex-column justify-content-center">
                                    <p class="m-0">Glen Jarret</p>
                                    <p class="m-0">HR Manager</p>
                                    <div class="stars">
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4">
                            <i class="bi bi-chat-square-quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aut sapiente natus
                                vitae, saepe quam eos, praesentium architecto ab facere, ipsam molestias beatae
                                cumque nihil vero maxime. Esse necessitatibus deserunt eos illo, neque voluptates
                                amet ducimus inventore commodi voluptatibus? Laudantium.</p>
                            <div class="client d-flex pt-3">
                                <img src="images/User.png" alt="">
                                <div class="rating ps-4 d-flex flex-column justify-content-center">
                                    <p class="m-0">Ian Markel</p>
                                    <p class="m-0">Dev</p>
                                    <div class="stars">
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-4">
                            <i class="bi bi-chat-square-quote"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aut sapiente natus
                                vitae, saepe quam eos, praesentium architecto ab facere, ipsam molestias beatae
                                cumque nihil vero maxime. Esse necessitatibus deserunt eos illo, neque voluptates
                                amet ducimus inventore commodi voluptatibus? Laudantium.</p>
                            <div class="client d-flex pt-3">
                                <img src="images/User.png" alt="">
                                <div class="rating ps-4 d-flex flex-column justify-content-center">
                                    <p class="m-0">John Doe</p>
                                    <p class="m-0">Photographer</p>
                                    <div class="stars">
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <span><i class="bi bi-star-fill"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Section -->
<!-- Start Blog Section -->
<section id="blog" class="py-5">
    <div class="container">
        <div class="row text-center">
            <p class="heading-top">See Our Recent News</p>
            <h2>Latest Blog</h2>
        </div>
        <div class="row py-4">
            <div class="col-lg-4 col-md-6">
                <div class="card mb-3">
                    <img src="images/blog-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body px-4">
                        <p class="meta">April 21, 2022</p>
                        <h5 class="card-title">Web design is fun</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="author d-flex align-items-center">
                            <img src="images/avatar-1.png" alt="">
                            <p class="author-name m-0 ps-3">Hena Sword</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-3">
                    <img src="images/blog-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body px-4">
                        <p class="meta">April 21, 2022</p>
                        <h5 class="card-title">Web design is fun</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="author d-flex align-items-center">
                            <img src="images/avatar-2.png" alt="">
                            <p class="author-name m-0 ps-3">David Villas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-3">
                    <img src="images/blog-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body px-4">
                        <p class="meta">April 21, 2022</p>
                        <h5 class="card-title">Web design is fun</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <div class="author d-flex align-items-center">
                            <img src="images/avatar-3.png" alt="">
                            <p class="author-name m-0 ps-3">Teena Walker</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Section -->

<!-- Start Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row text-center py-5">
            <p class="heading-top">For Support Contact Us</p>
            <h2>Let's Get In Touch</h2>
        </div>
        <!-- Form -->
        <form id="contact-form-data" class="contact-form" action="">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input id="first-name" class="form-control" type="text" placeholder="First Name:" required=""
                            name="firstName">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input id="last-name" class="form-control" type="text" placeholder="Last Name:" required=""
                            name="lastName">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input id="mail" class="form-control" type="email" placeholder="Email:" required=""
                            name="userEmail">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input id="phone" class="form-control" type="tel" placeholder="Phone:" required=""
                            name="userPhone">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <textarea id="message" class="form-control" placeholder="Message" required=""
                            name="userMessage"></textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group text-start">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Privacy Policy</label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group text-center mt-3">
                        <button id="submit" class="btn-primary" type="button">Contact Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Contact Section -->

<?php get_footer(); ?>