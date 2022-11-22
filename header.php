<!DOCTYPE html>
<html lang="en" class="min-vh-100">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Studio Lamby">
    <meta name="author" content="Ying">
    <!-- <link rel="shortcut icon" href="/wp-content/themes/studiolamby/assets/images/favicon.png"> -->

<?php wp_head(); ?>

</head>

<body class="min-vh-100 d-flex flex-column">
        <nav class="navbar navbar-default navbar-dark sticky-top sticky-top animate__animated animate__slideInDown">
            <div class="container-fluid justify-content-between size-column px-4">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <h1 class="size-title-big hoverpink">
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
                                    'items_wrap' => '<ul class="navbar flex-lg-column align-items-end">%3$s</ul>'
                            )
                        );
                    ?>
            </div>
        </nav>