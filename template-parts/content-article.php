<div class="container-fluid">
    <?php
        $args = get_post_gallery_images(get_the_ID());
        $oddLoop = true;

        function post($args, $oddLoop)
        {
            if (!empty($args)) {
                foreach ($args as $image) {
                    if ($oddLoop = !$oddLoop) {
                        echo "<img src='{$image}' class='mt-7'/>";
                    }
                }
            }
        }
    ?>

    <div class="row mb-4">
        <div class="col-lg-4 fixed-bottom">
            <div class="post-text" >
                <h1 class="display-1"> <?php echo(the_title()); ?> </h1>
                <p> <?php echo wp_strip_all_tags( get_the_content() ); ?> </p>
            </div>
        </div>

        <div class="col-lg-4 offset-lg-4">
            <?php post($args, $oddLoop = true); ?>
        </div>

        <div class="col-lg-4">
            <?php post($args, $oddLoop = false); ?>
        </div>

    </div>
</div>