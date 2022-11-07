<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="/wordpress/wp-content/themes/wordpresstutorial/assets/images/logo.png"> -->

    <?php 
    wp_head();
    ?>

</head>

<body>
    <div class="container-fluid mb-4 mt-4">
        <nav class="navbar navbar-expand-lg navbar-dark page-title">
            <div class="container-fluid justify-content-between size-column">
                <div class="flex-wrap">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <h1 class="size-title-big">
                            <span class="d-block">
                                <?php echo get_bloginfo('name'); ?>
                            </span>
                            <span class="d-block">
                                <?php echo get_bloginfo('description'); ?>
                            </span>
                        </h1>
                    </a>
                </div>
                

                <div class="flex-wrap">
                    <?php 
                        wp_nav_menu(
                            array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul class="text-end flex-column m-0">%3$s</ul>'
                            )
                        );
                    ?>
                </div>
            </div>
        </nav>