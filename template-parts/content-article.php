<?php
    $args = get_post_gallery_images(get_the_ID());
    $oddLoop = true;

    function post($args, $oddLoop)
    {
        if (!empty($args)) {
            foreach ($args as $image) {
                if ($oddLoop = !$oddLoop) {
                    echo "<img src='{$image}' class='mt-7 hover'/>";
                }
            }
        }
    }
?>

<div class="row">
    <div class="col-lg-4 stick-bottom py-3 animate__animated animate__slideInUp">
        <div class="post-text" >
            <h1 class="size-title-article"> <?php echo(the_title()); ?> </h1>
            <p class="lead"> <?php echo wp_strip_all_tags( get_the_content() ); ?> </p>
        </div>
    </div>

    <div class="col-lg-4 offset-lg-4 animate__animated animate__slideInUp">
        <?php post($args, $oddLoop = true); ?>
    </div>

    <div class="col-lg-4 animate__animated animate__slideInUp">
        <?php post($args, $oddLoop = false); ?>
    </div>
</div>

<div class="row animate__animated animate__slideInUp">
    <div class="col-lg-8 offset-lg-4 d-flex my-3">
        <div class="me-auto link-style">
            <a href="<?php echo home_url(); ?>">Back</a>
        </div>

        <div class="link-style">
            <?php 
                if($next_post = get_adjacent_post(false, '', false) ) { 
                    get_permalink($next_post->ID);
                    next_post_link('%link', $next_post->post_title);
                } 
                else { 
                    $last = new WP_Query('posts_per_page=1&order=ASC');
                    $last->the_post();
                    echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';

                    wp_reset_postdata();
                }; 
                
            ?>
        </div>
    </div>
</div>