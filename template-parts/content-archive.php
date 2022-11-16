<div class="row index-hover" style="transform: rotate(0); height:90px;">
    <hr class="mx-auto" style="width:110%;"/>
        <div class="col px-4">
            <h1>
                <?php
                    the_date('Y');
                ?>
            </h1>
        </div>
        <div class="col px-4">
            <h1 class="mobile-text-end">
                <?php
                    the_title();
                ?>
            </h1>
        </div>
        <div class="col px-4 d-none d-mg-none d-lg-block">
            <h1 class="text-end">
                <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo $tag->name . ' '; 
                        }
                    }
                ?>
            </h1>
        </div>
        <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</div>
