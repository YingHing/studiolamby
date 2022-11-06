<div class="container-fluid">
    <header class="content-header">
        <?php
            $args = get_post_gallery_images(get_the_ID());
            $oddLoop = true;

            function post($args, $oddLoop)
            {
                if (!empty($args)) {
                    foreach ($args as $image) {
                        if ($oddLoop = !$oddLoop) {
                            echo "<img src='{$image}' class='mt-4'/>";
                        }
                    }
                }
            }
        ?>
            <header class="content-header">
                <div class="row">

                    <div class="col-sm post_text">
                        <h1> <?php echo(the_title()); ?> </h1>
                        <p> <?php echo wp_strip_all_tags( get_the_content() ); ?> </p>
                    </div>

                    <div class="col-sm">
                        <?php post($args, $oddLoop = true); ?>
                    </div>

                    <div class="col-sm">
                        <?php post($args, $oddLoop = false); ?>
                    </div>

                </div>
            </header>
    </header>
</div>