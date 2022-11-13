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
        <nav class="navbar navbar-default navbar-dark page-title animate__animated animate__slideInDown">
            <div class="container-fluid justify-content-between size-column px-4">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <h1 class="size-title-big" data-text="Studio Lamby">
                            <span class="d-block">
                                <?php echo get_bloginfo('name'); ?>
                            </span>
                            <span class="d-block">
                                <?php echo get_bloginfo('description'); ?>
                            </span>
                        </h1>
                    </a>
                

                        <?php 
                            wp_nav_menu(
                                array(
                                        'menu' => 'primary',
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul class="nav flex-lg-column text-end">%3$s</ul>'
                                )
                            );
                        ?>
            </div>
        </nav>