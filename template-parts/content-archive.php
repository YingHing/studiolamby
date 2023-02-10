<div class="row index-hover" style="transform: rotate(0); height:90px;">
    <hr class="mx-auto" style="width:110%;"/>
        <div class="col px-4">
            <h1 class="responsive-index">
                <?php
                    the_date('Y');
                ?>
            </h1>
        </div>
        <div class="col px-4">
            <h1 class="mobile-text-end responsive-index">
                <?php
                    the_title();
                ?>
            </h1>
        </div>
        <div class="col-7 px-4 d-none d-mg-none d-lg-block">
            <h1 class="text-end responsive-index">
                <?php
                    $post_tags = get_the_tags();
                    if ($post_tags) {
                        $tag_list = array();
                        foreach ($post_tags as $tag) {
                        $tag_list[] = $tag->name;
                        }
                        echo implode(" + ", $tag_list);
                    }
                ?>
            </h1>
        </div>
        <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</div>
