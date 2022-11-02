<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/wordpress/wp-content/themes/wordpresstutorial/assets/images/logo.png">

    <?php 
    wp_head();
    ?>

</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="d-flex flex-grow-1">
                    <span class="w-100 d-lg-none d-block">
                        <!-- hidden spacer to center brand on mobile -->
                    </span>

                    <a class="navbar-brand d-none d-lg-inline-block" href="<?php echo home_url(); ?>">
                        <h1>
                            <?php echo get_bloginfo('name'); ?>
                            <span class="d-block">
                                <?php echo get_bloginfo('description'); ?>
                            </span>
                        </h1>
                    </a>
                </div>

                <div class="flex-grow-1 collapse navbar-collapse justify-content-end">
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
    </header>