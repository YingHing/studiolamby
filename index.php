<?php get_header(); ?>

<article class="content mt-auto">
    <div class="container-fluid animate__animated animate__slideInUp">
        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post();
                    
                    get_template_part('template-parts/content','archive');
                }
            }
        ?>
    </div>
</article>

<?php get_footer(); ?>