<div class="container-fluid">
    <div class="display-6 fixed-bottom d-flex flex-grow-1">
            <?php 
                $current_page = get_queried_object();
                $content      = apply_filters( 'the_content', $current_page->post_content );
                echo $content;
            ?>
    </div>
</div>