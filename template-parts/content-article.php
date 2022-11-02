<div class="container-fluid">
    <header class="content-header">
        <?php
            $args = array( 
                'post_type' => 'attachment', 
                'post_mime_type' => 'image',
                'post_status' => null, 
                'post_parent' => $post->ID 
            );
        ?>

        <div class="row">
            <div class="col-4 post_text">
                <h1> <?php echo(the_title()); ?> </h1>
                <p> <?php echo wp_strip_all_tags( get_the_content() ); ?> </p>
            </div>

            <div class="col-4">
                <?php 
                    $attachments = get_posts( $args );

                    if ($attachments) {
                        foreach ( $attachments as $value => $post) {
                            if ($value % 2 == 0){
                                    
                                $img = wp_get_attachment_image_src($post->ID, 'medium'); 
                                $fullsize = wp_get_attachment_image_src($post->ID);
        
                                unset($fullsize[1]);
                                unset($fullsize[2]);
                                
                                $implodeArray = implode(" ",$fullsize);
                                echo "<img src='{$implodeArray}' class='mb-4'/>";
                            }
                        }
                    }       
                ?>
            </div>

            <div class="col-4">
                <?php 
                    $attachments = get_posts( $args );
                    if ($attachments) {
                        foreach ( $attachments as $value => $post) {
                            if ($value % 2 != 0){
                                    
                                $img = wp_get_attachment_image_src($post->ID, 'medium'); 
                                $fullsize = wp_get_attachment_image_src($post->ID);
        
                                unset($fullsize[1]);
                                unset($fullsize[2]);
                                
                                $implodeArray = implode(" ",$fullsize);
                                echo "<img src='{$implodeArray}' class='mb-4'/>";
                            }
                        }
                    }      
                ?>
            </div>
        </div>
    </header>
</div>