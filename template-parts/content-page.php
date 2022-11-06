<div class=container-fluid>
    <div class="row">
        <div class="col">
            <div class="page-text display-1 fixed-bottom">
                    <?php 
                        $current_page = get_queried_object();
                        $content      = apply_filters( 'the_content', $current_page->post_content );
                        echo $content;
                    ?>
            </div>
        </div>
    </div>
</div>