<div class="container-fluid">
    <header class="content-header">
        <?php 
            // $args = array( 
            //     'post_type' => 'attachment', 
            //     'post_mime_type' => 'image',
            //     'post_status' => null, 
            //     'post_parent' => $post->ID 
            // );

            $args = [
                'post_type' => 'attachment',
                'post_mime_type' => 'image',
                'orderby' => 'post_date',
                'order' => 'desc',
                'posts_per_page' => '10',
                // 'post_parent' => $post->ID 
            ];
            
            $oddLoop = true;

            function post($args, $oddLoop){
                $attachments = get_posts( $args );
                // var_dump($attachments);
                if ($attachments) {
                    foreach ( $attachments as $post) {

                        if ($oddLoop =! $oddLoop){
                                
                            $fullsize = wp_get_attachment_image_src($post->ID);

                            unset($fullsize[1]);
                            unset($fullsize[2]);
                            
                            $implodeArray = implode(" ",$fullsize);
                            echo "<img src='{$implodeArray}' class='mb-4'/>";
                        }
                    }
                } 
            }   
        ?>
            <header class="content-header">
                <div class="row">

                    <div class="col-4 post_text">
                        <h1> <?php echo(the_title()); ?> </h1>
                        <p> <?php echo wp_strip_all_tags( get_the_content() ); ?> </p>
                    </div>

                    <div class="col-4">
                        <?php post($args, $oddLoop = false); ?>
                    </div>

                    <div class="col-4">
                        <?php post($args, $oddLoop = true); ?>
                    </div>

                </div>
            </header>
    </header>
</div>