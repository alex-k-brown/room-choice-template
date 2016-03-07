<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
    // the content (pretty self explanatory huh)
    the_content();

    ?>

    <?php

    //Parallax Variables

    $parallax_video_mp4 = get_field("parallax_video_mp4");
    $parallax_video_webm = get_field("parallax_video_webm");

    //Hero Variables

    $logo = get_field("logo");
    $hero_text = get_field("hero_text");
    $hero_caption = get_field("hero_caption");
    $hero_button_text = get_field("hero_button_text");
    $hero_button_link = get_field("hero_button_link");

    //Section 1 Variables

    $section_1_header = get_field("section_1_header");
    $section_1_text = get_field("section_1_text");
    $section_1_button_text = get_field("section_1_button_text");
    $section_1_button_link = get_field("section_1_button_link");

    //Section 2 Variables

    $section_2_header = get_field("section_2_header");
    $section_2_image = get_field("section_2_image");
    $section_2_bullet_1_icon = get_field("section_2_bullet_1_icon");
    $section_2_bullet_2_icon = get_field("section_2_bullet_2_icon");
    $section_2_bullet_3_icon = get_field("section_2_bullet_3_icon");
    $section_2_bullet_4_icon = get_field("section_2_bullet_4_icon");
    $section_2_bullet_5_icon = get_field("section_2_bullet_5_icon");
    $section_2_bullet_6_icon = get_field("section_2_bullet_6_icon");
    $section_2_bullet_1_header = get_field("section_2_bullet_1_header");
    $section_2_bullet_2_header = get_field("section_2_bullet_2_header");
    $section_2_bullet_3_header = get_field("section_2_bullet_3_header");
    $section_2_bullet_4_header = get_field("section_2_bullet_4_header");
    $section_2_bullet_5_header = get_field("section_2_bullet_5_header");
    $section_2_bullet_6_header = get_field("section_2_bullet_6_header");
    $section_2_bullet_1_text = get_field("section_2_bullet_1_text");
    $section_2_bullet_2_text = get_field("section_2_bullet_2_text");
    $section_2_bullet_3_text = get_field("section_2_bullet_3_text");
    $section_2_bullet_4_text = get_field("section_2_bullet_4_text");
    $section_2_bullet_5_text = get_field("section_2_bullet_5_text");
    $section_2_bullet_6_text = get_field("section_2_bullet_6_text");
    $section_2_button_text = get_field("section_2_button_text");
    $section_2_button_link = get_field("section_2_button_link");

    //Section 3 Variables

    $section_3_header = get_field("section_3_header");
    $section_3_image = get_field("section_3_image");
    $section_3_paragraph_text = get_field("section_3_paragraph_text");
    $section_3_bullet_1_icon = get_field("section_3_bullet_1_icon");
    $section_3_bullet_2_icon = get_field("section_3_bullet_2_icon");
    $section_3_bullet_3_icon = get_field("section_3_bullet_3_icon");
    $section_3_bullet_4_icon = get_field("section_3_bullet_4_icon");
    $section_3_bullet_5_icon = get_field("section_3_bullet_5_icon");
    $section_3_bullet_1_text = get_field("section_3_bullet_1_text");
    $section_3_bullet_2_text = get_field("section_3_bullet_2_text");
    $section_3_bullet_3_text = get_field("section_3_bullet_3_text");
    $section_3_bullet_4_text = get_field("section_3_bullet_4_text");
    $section_3_bullet_5_text = get_field("section_3_bullet_5_text");
    $section_3_button_text = get_field("section_3_button_text");
    $section_3_button_link = get_field("section_3_button_link");

    //Section 4 Variables

    $section_4_header = get_field("section_4_header");
    $section_4_image = get_field("section_4_image");
    $section_4_paragraph_text = get_field("section_4_paragraph_text");
    $section_4_bullet_1_icon = get_field("section_4_bullet_1_icon");
    $section_4_bullet_2_icon = get_field("section_4_bullet_2_icon");
    $section_4_bullet_3_icon = get_field("section_4_bullet_3_icon");
    $section_4_bullet_4_icon = get_field("section_4_bullet_4_icon");
    $section_4_bullet_5_icon = get_field("section_4_bullet_5_icon");
    $section_4_bullet_1_text = get_field("section_4_bullet_1_text");
    $section_4_bullet_2_text = get_field("section_4_bullet_2_text");
    $section_4_bullet_3_text = get_field("section_4_bullet_3_text");
    $section_4_bullet_4_text = get_field("section_4_bullet_4_text");
    $section_4_bullet_5_text = get_field("section_4_bullet_5_text");
    $section_4_button_text = get_field("section_4_button_text");
    $section_4_button_link = get_field("section_4_button_link");

    //Section 5 Variables

    $section_5_testimonial_1_text = get_field("section_5_testimonial_1_text");
    $section_5_testimonial_2_text = get_field("section_5_testimonial_2_text");
    $section_5_testimonial_3_text = get_field("section_5_testimonial_3_text");
    $section_5_testimonial_1_name = get_field("section_5_testimonial_1_name");
    $section_5_testimonial_2_name = get_field("section_5_testimonial_2_name");
    $section_5_testimonial_3_name = get_field("section_5_testimonial_3_name");
    $section_5_testimonial_1_customer_info = get_field("section_5_testimonial_1_customer_info");
    $section_5_testimonial_2_customer_info = get_field("section_5_testimonial_2_customer_info");
    $section_5_testimonial_3_customer_info = get_field("section_5_testimonial_3_customer_info");

    //Section 6 Variables

    $section_6_header = get_field("section_6_header");
    $section_6_caption = get_field("section_6_caption");
    $section_6_column_1_icon = get_field("section_6_column_1_icon");
    $section_6_column_2_icon = get_field("section_6_column_2_icon");
    $section_6_column_3_icon = get_field("section_6_column_3_icon");
    $section_6_column_1_header = get_field("section_6_column_1_header");
    $section_6_column_2_header = get_field("section_6_column_2_header");
    $section_6_column_3_header = get_field("section_6_column_3_header");
    $section_6_column_1_text = get_field("section_6_column_1_text");
    $section_6_column_1_text = get_field("section_6_column_1_text");
    $section_6_column_1_text = get_field("section_6_column_1_text");
    $section_6_button_text = get_field("section_6_button_text");
    $section_6_button_link = get_field("section_6_button_link");

    //Section 7 Variables

    $section_7_header = get_field("section_7_header");
    $section_7_image_1 = get_field("section_7_image_1");
    $section_7_image_2 = get_field("section_7_image_2");
    $section_7_image_3 = get_field("section_7_image_3");
    $section_7_image_4 = get_field("section_7_image_4");
    $section_7_image_5 = get_field("section_7_image_5");
    $section_7_image_6 = get_field("section_7_image_6");
    $section_7_image_7 = get_field("section_7_image_7");
    $section_7_image_8 = get_field("section_7_image_8");
    $section_7_image_9 = get_field("section_7_image_9");
    $section_7_image_10 = get_field("section_7_image_10");
    $section_7_image_11 = get_field("section_7_image_11");
    $section_7_image_12 = get_field("section_7_image_12");
    $section_7_image_13 = get_field("section_7_image_13");
    $section_7_image_14 = get_field("section_7_image_14");
    $section_7_image_15 = get_field("section_7_image_15");
    $section_7_image_1_title = get_field("section_7_image_1_title");
    $section_7_image_2_title = get_field("section_7_image_2_title");
    $section_7_image_3_title = get_field("section_7_image_3_title");
    $section_7_image_4_title = get_field("section_7_image_4_title");
    $section_7_image_5_title = get_field("section_7_image_5_title");
    $section_7_image_6_title = get_field("section_7_image_6_title");
    $section_7_image_7_title = get_field("section_7_image_7_title");
    $section_7_image_8_title = get_field("section_7_image_8_title");
    $section_7_image_9_title = get_field("section_7_image_9_title");
    $section_7_image_10_title = get_field("section_7_image_10_title");
    $section_7_image_11_title = get_field("section_7_image_11_title");
    $section_7_image_12_title = get_field("section_7_image_12_title");
    $section_7_image_13_title = get_field("section_7_image_13_title");
    $section_7_image_14_title = get_field("section_7_image_14_title");
    $section_7_image_15_title = get_field("section_7_image_15_title");
    $section_7_image_1_link = get_field("section_7_image_1_link");
    $section_7_image_2_link = get_field("section_7_image_2_link");
    $section_7_image_3_link = get_field("section_7_image_3_link");
    $section_7_image_4_link = get_field("section_7_image_4_link");
    $section_7_image_5_link = get_field("section_7_image_5_link");
    $section_7_image_6_link = get_field("section_7_image_6_link");
    $section_7_image_7_link = get_field("section_7_image_7_link");
    $section_7_image_8_link = get_field("section_7_image_8_link");
    $section_7_image_9_link = get_field("section_7_image_9_link");
    $section_7_image_10_link = get_field("section_7_image_10_link");
    $section_7_image_11_link = get_field("section_7_image_11_link");
    $section_7_image_12_link = get_field("section_7_image_12_link");
    $section_7_image_13_link = get_field("section_7_image_13_link");
    $section_7_image_14_link = get_field("section_7_image_14_link");
    $section_7_image_15_link = get_field("section_7_image_15_link");
    $section_7_button_text = get_field("section_7_button_text");
    $section_7_button_link = get_field("section_7_button_link");

    //Section 8 Variables

    $section_8_header = get_field("section_8_header");

    //Solutions Variables

    $solutions_main_header = get_field("solutions_main_header");
    $solution_1_image = get_field("solution_1_image");
    $solution_1_header = get_field("solution_1_header");
    $solution_1_description = get_field("solution_1_description");
    $solution_2_image = get_field("solution_2_image");
    $solution_2_header = get_field("solution_2_header");
    $solution_2_description = get_field("solution_2_description");
    $solution_3_image = get_field("solution_3_image");
    $solution_3_header = get_field("solution_3_header");
    $solution_3_description = get_field("solution_3_description");
    $solution_4_image = get_field("solution_4_image");
    $solution_4_header = get_field("solution_4_header");
    $solution_4_description = get_field("solution_4_description");
    $solution_5_image = get_field("solution_5_image");
    $solution_5_header = get_field("solution_5_header");
    $solution_5_description = get_field("solution_5_description");
    $solution_6_image = get_field("solution_6_image");
    $solution_6_header = get_field("solution_6_header");
    $solution_6_description = get_field("solution_6_description");

    //Introduction Variables

    $introduction_main_header = get_field("introduction_main_header");
    $intro_paragraph_1 = get_field("intro_paragraph_1");
    $intro_paragraph_2 = get_field("intro_paragraph_2");
    $intro_button = get_field("intro_button");

    //Testimonials Variables

    $testimonials_main_header = get_field("testimonials_main_header");
    $testimonials_paragraph = get_field("testimonials_paragraph");
    $testimonial_person = get_field("testimonial_person");
    $testimonials_button = get_field("testimonials_button");

    //Offerings Variables

    $offerings_main_header = get_field("offerings_main_header");
    $offering_1_image = get_field("offering_1_image");
    $offering_1_header = get_field("offering_1_header");
    $offering_1_header_line_2 = get_field("offering_1_header_line_2");
    $offering_1_description = get_field("offering_1_description");
    $offering_1_button = get_field("offering_1_button");
    $offering_2_image = get_field("offering_2_image");
    $offering_2_header = get_field("offering_2_header");
    $offering_2_header_line_2 = get_field("offering_2_header_line_2");
    $offering_2_description = get_field("offering_2_description");
    $offering_2_button = get_field("offering_2_button");
    $offering_3_image = get_field("offering_3_image");
    $offering_3_header = get_field("offering_3_header");
    $offering_3_header_line_2 = get_field("offering_3_header_line_2");
    $offering_3_description = get_field("offering_3_description");
    $offering_3_button = get_field("offering_3_button");

    //Dr Allen Variables

    $dr_allen_main_header = get_field("dr_allen_main_header");
    $dr_allen_paragraph_1 = get_field("dr_allen_paragraph_1");
    $dr_allen_paragraph_2 = get_field("dr_allen_paragraph_2");
    $dr_allen_paragraph_3 = get_field("dr_allen_paragraph_3");
    $dr_allen_button = get_field("dr_allen_button");
    $dr_allen_image = get_field("dr_allen_image");

    //Office Variables

    $office_image = get_field("office_image");
    $office_main_header = get_field("office_main_header");
    $office_paragraph = get_field("office_paragraph");
    $office_button = get_field("office_button");

    //Contact Variables

    $contact_main_header = get_field("contact_main_header");
    $location_1_header = get_field("location_1_header");
    $location_1_phone = get_field("location_1_phone");
    $location_1_fax = get_field("location_1_fax");
    $location_1_email = get_field("location_1_email");
    $location_1_google_maps_embed = get_field("location_1_google_maps_embed");
    $location_2_header = get_field("location_2_header");
    $location_2_phone = get_field("location_2_phone");
    $location_2_fax = get_field("location_2_fax");
    $location_2_email = get_field("location_2_email");
    $location_2_google_maps_embed = get_field("location_2_google_maps_embed");

    //New Patient Variables

    $new_patient_main_header = get_field("new_patient_main_header");
    $new_patient_paragraph_1 = get_field("new_patient_paragraph_1");
    $new_patient_bullet_1 = get_field("new_patient_bullet_1");
    $new_patient_bullet_2 = get_field("new_patient_bullet_2");
    $new_patient_bullet_3 = get_field("new_patient_bullet_3");
    $new_patient_bullet_4 = get_field("new_patient_bullet_4");
    $new_patient_paragraph_2 = get_field("new_patient_paragraph_2");
    $new_patient_paragraph_3 = get_field("new_patient_paragraph_3");

    //Appointment Variables

    $appointment_paragraph_1 = get_field("appointment_paragraph_1");
    $appointment_paragraph_2 = get_field("appointment_paragraph_2");
    $appointment_button = get_field("appointment_button");


    ?>

    <div id="frontpage">

        <!--Hero Section-->

        <div class="hero">
            <img class="custom-logo" src="<?php echo $logo["url"]; ?>" alt="Logo">
            <h1><?php echo $hero_text ?></h1>
            <h3><?php echo $hero_caption ?></h3>
            <a href="<?php echo $hero_button_link ?>" class="blue-button"><?php echo $hero_button_text ?></a>
        </div><!--hero-->

        <!--Section 1-->

        <div class="section-1">
            <h2><?php echo $section_1_header ?></h2>
            <div class="colored-line"></div>
            <p><?php echo $section_1_text ?></p>
            <a href="<?php echo $section_1_button_link ?>" class="blue-button"><?php echo $section_1_button_text ?></a>
        </div><!--section-1-->

        <!--Section 2-->

        <div class="section-2">
            <h2 class="dark-text"><?php echo $section_2_header ?></h2>
            <div class="colored-line"></div>
            <ul class="section-2-list">
                <li>
                    <ul class="left-col">
                        <li>
                            <div class="circle-icon">
                                <i class="fa fa-<?php echo $section_2_bullet_1_icon ?>"></i>
                            </div><!--circle-icon-->
                            <div class="icon-text">
                                <h4><?php echo $section_2_bullet_1_header ?></h4>
                                <p><?php echo $section_2_bullet_1_text ?></p>
                            </div><!--icon-text-->
                        </li>
                        <li>
                            <div class="circle-icon">
                                <i class="fa fa-<?php echo $section_2_bullet_2_icon ?>"></i>
                            </div><!--circle-icon-->
                            <div class="icon-text">
                                <h4><?php echo $section_2_bullet_2_header ?></h4>
                                <p><?php echo $section_2_bullet_2_text ?></p>
                            </div><!--icon-text-->
                        </li>
                        <li>
                            <div class="circle-icon">
                                <i class="fa fa-<?php echo $section_2_bullet_3_icon ?>"></i>
                            </div><!--circle-icon-->
                            <div class="icon-text">
                                <h4><?php echo $section_2_bullet_3_header ?></h4>
                                <p><?php echo $section_2_bullet_3_text ?></p>
                            </div><!--icon-text-->
                        </li>
                    </ul><!--left-col-->
                </li>
                <li class="center-col">
                    <img src="<?php echo $section_2_image["url"]; ?>" alt="Center Image">
                </li><!--center-col-->
                <li>
                    <ul class="right-col">
                        <li>
                            <div class="circle-icon">
                                <i class="fa fa-<?php echo $section_2_bullet_4_icon ?>"></i>
                            </div><!--circle-icon-->
                            <div class="icon-text">
                                <h4><?php echo $section_2_bullet_4_header ?></h4>
                                <p><?php echo $section_2_bullet_4_text ?></p>
                            </div><!--icon-text-->
                        </li>
                        <li>
                            <div class="circle-icon">
                                <i class="fa fa-<?php echo $section_2_bullet_5_icon ?>"></i>
                            </div><!--circle-icon-->
                            <div class="icon-text">
                                <h4><?php echo $section_2_bullet_5_header ?></h4>
                                <p><?php echo $section_2_bullet_5_text ?></p>
                            </div><!--icon-text-->
                        </li>
                        <li>
                            <div class="circle-icon">
                                <i class="fa fa-<?php echo $section_2_bullet_6_icon ?>"></i>
                            </div><!--circle-icon-->
                            <div class="icon-text">
                                <h4><?php echo $section_2_bullet_6_header ?></h4>
                                <p><?php echo $section_2_bullet_6_text ?></p>
                            </div><!--icon-text-->
                        </li>
                    </ul><!--right-col-->
                </li>
            </ul><!--section-2-list-->
            <a class="blue-button" href="<?php echo $section_2_button_link ?>"><?php echo $section_2_button_text ?></a>
        </div><!--section-2-->

        <!--Section 3-->

        <div class="section-3">
            <img src="<?php echo $section_3_image["url"]; ?>" alt="left image">
            <div class="section-3-text">
                <h2><?php echo $section_3_header ?></h2>
                <div class="colored-line"></div>
                <p><?php echo $section_3_paragraph_text ?></p>
                <ul class="section-3-list">
                    <li>
                        <i class="fa fa-<?php echo $section_3_bullet_1_icon ?>"></i>
                        <p><?php echo $section_3_bullet_1_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_3_bullet_2_icon ?>"></i>
                        <p><?php echo $section_3_bullet_2_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_3_bullet_3_icon ?>"></i>
                        <p><?php echo $section_3_bullet_3_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_3_bullet_4_icon ?>"></i>
                        <p><?php echo $section_3_bullet_4_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_3_bullet_5_icon ?>"></i>
                        <p><?php echo $section_3_bullet_5_text ?></p>
                    </li>
                </ul><!--section-3-list-->
            </div><!--section-3-text-->
        </div><!--section-3-->

        <!--Section 4-->

        <div class="section-4">
            <div class="section-4-text">
                <h2><?php echo $section_4_header ?></h2>
                <div class="colored-line"></div>
                <p><?php echo $section_4_paragraph_text ?></p>
                <ul class="section-4-list">
                    <li>
                        <i class="fa fa-<?php echo $section_4_bullet_1_icon ?>"></i>
                        <p><?php echo $section_4_bullet_1_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_4_bullet_2_icon ?>"></i>
                        <p><?php echo $section_4_bullet_2_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_4_bullet_3_icon ?>"></i>
                        <p><?php echo $section_4_bullet_3_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_4_bullet_4_icon ?>"></i>
                        <p><?php echo $section_4_bullet_4_text ?></p>
                    </li>
                    <li>
                        <i class="fa fa-<?php echo $section_4_bullet_5_icon ?>"></i>
                        <p><?php echo $section_4_bullet_5_text ?></p>
                    </li>
                </ul><!--section-4-list-->
            </div><!--section-4-text-->
            <img src="<?php echo $section_4_image["url"]; ?>" alt="Right Image">
            <a class="blue-button" href="<?php echo $section_4_button_link ?>"><?php echo $section_4_button_text ?></a>
        </div><!--section-4-->

        <!--Section 5-->

        <div class="section-5">
            <div class="testimonial-1">
                <h4><?php echo $section_5_testimonial_1_text ?></h4>
                <h5><?php echo $section_5_testimonial_1_name ?></h5>
                <h6><?php echo $section_5_testimonial_1_customer_info ?></h6>
            </div><!--testimonial-1-->
            <div class="testimonial-2">
                <h4><?php echo $section_5_testimonial_2_text ?></h4>
                <h5><?php echo $section_5_testimonial_2_name ?></h5>
                <h6><?php echo $section_5_testimonial_2_customer_info ?></h6>
            </div><!--testimonial-2-->
            <div class="testimonial-3">
                <h4><?php echo $section_5_testimonial_3_text ?></h4>
                <h5><?php echo $section_5_testimonial_3_name ?></h5>
                <h6><?php echo $section_5_testimonial_3_customer_info ?></h6>
            </div><!--testimonial-3-->
        </div><!--section-5-->

        <!--Section 6-->

        <div class="section-6">
            <h2><?php echo $section_6_header ?></h2>
            <p><?php echo $section_6_caption ?></p>
            <ul class="section-5-cols">
                <li>
                    <i class="fa fa-<?php echo $section_6_column_1_icon ?>"></i>
                    <h4><?php echo $section_6_column_1_header ?></h4>
                    <p><?php echo $section_6_column_1_text ?></p>
                </li>
                <li>
                    <i class="fa fa-<?php echo $section_6_column_2_icon ?>"></i>
                    <h4><?php echo $section_6_column_2_header ?></h4>
                    <p><?php echo $section_6_column_2_text ?></p>
                </li>
                <li>
                    <i class="fa fa-<?php echo $section_6_column_3_icon ?>"></i>
                    <h4><?php echo $section_6_column_3_header ?></h4>
                    <p><?php echo $section_6_column_3_text ?></p>
                </li>
            </ul><!--section-5-cols-->
            <a class="blue-button" href="<?php echo $section_6_button_link ?>"><?php echo $section_6_button_text ?></a>
        </div><!--section-6-->

        <!--Section 7-->

        <div class="section-7">
            <h2><?php echo $section_7_header ?></h2>
            <ul class="section-7-list">
                <li>
                    <a href="<?php echo $section_7_image_1_link ?>">
                        <img src="<?php echo $section_7_image_1["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_1_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_2_link ?>">
                        <img src="<?php echo $section_7_image_2["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_2_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_3_link ?>">
                        <img src="<?php echo $section_7_image_3["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_3_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_4_link ?>">
                        <img src="<?php echo $section_7_image_4["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_4_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_5_link ?>">
                        <img src="<?php echo $section_7_image_5["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_5_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_6_link ?>">
                        <img src="<?php echo $section_7_image_6["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_6_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_7_link ?>">
                        <img src="<?php echo $section_7_image_7["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_7_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_8_link ?>">
                        <img src="<?php echo $section_7_image_8["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_8_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_9_link ?>">
                        <img src="<?php echo $section_7_image_9["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_9_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_10_link ?>">
                        <img src="<?php echo $section_7_image_10["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_10_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_11_link ?>">
                        <img src="<?php echo $section_7_image_11["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_11_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_12_link ?>">
                        <img src="<?php echo $section_7_image_12["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_12_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_13_link ?>">
                        <img src="<?php echo $section_7_image_13["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_13_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_14_link ?>">
                        <img src="<?php echo $section_7_image_14["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_14_title ?></h4>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $section_7_image_15_link ?>">
                        <img src="<?php echo $section_7_image_15["url"]; ?>" alt="Image 1">
                        <h4><?php echo $section_7_image_15_title ?></h4>
                    </a>
                </li>
            </ul><!--section-7-list-->
            <a class="blue-button" href="<?php echo $section_7_button_link ?>"><?php echo $section_7_button_text ?></a>
        </div><!--section-7-->

        <!--Section 8-->
        
        <div class="section-8">
            <h2><?php echo $section_8_header ?></h2>
        </div><!--section-8-->

    </div><!--frontpage-->

<?php

//    $top_image_1 = get_field("top_image_1");
//    ?>
    <!---->
    <!--    <img src="--><?php //echo $top_image_1["url"]; ?><!--" />-->

    <!--  <?php //print_r(get_field("top_carousel")); ?>  -->

<?php endwhile; ?>


<?php endif; ?>

<?php get_footer(); ?>