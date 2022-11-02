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

            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>

                <a class="navbar-brand d-none d-lg-inline-block" href="<?php echo home_url(); ?>">
                    <?php echo get_bloginfo('name'); ?>
                    <span class="d-block">    
                    <?php echo get_bloginfo('description'); ?>
                    </span> 
                </a>
            </div>

            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <?php 
                    wp_nav_menu(
                        array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul class="navbar-nav ml-auto flex-column m-0">%3$s</ul>'
                        )
                    );
                ?>
            </div>
            
        </nav>
    </header>

    <div class="main-wrapper">
	    <!-- <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading"><?php the_title(); ?></h1>
		</header> -->