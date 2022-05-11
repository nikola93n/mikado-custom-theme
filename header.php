<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="vendors/css/bootstrap-icons.css"> -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
    <!-- Swiper -->
    <link rel="stylesheet" href="vendors/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="top-container" style="background-color: rgba(0, 0, 0, 0.05);">
        <!-- Start Header Section -->
        <div class="container">
            <div class="row">
                <header class="mt-4 d-flex justify-content-between align-items-center">

                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    if ( has_custom_logo() ) {
                    echo ' <a href="http://mikado.test" class="logo" id="home"><img src="' . esc_url( $logo[0] ) . '" alt="Mikado Logo" class="logo"></a>';
                    } else {
                    echo '<h1>' . get_bloginfo('name') . '<br>' . get_bloginfo('description') . '</h1>';
                    }
                ?>




                    <nav class="hide-nav" id="navbar">

                        <?php wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container' => 'ul',
                            'menu_class'=> 'd-flex main-menu'
                        ) );


                        ?>
                    </nav>
                    <button class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </header>
            </div>
        </div>
        <!-- End Header Section -->