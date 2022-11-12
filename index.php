<?php 
	get_header();
?>

<article class="content">
    <div class="container-fluid px-4 mt-6 mb-4 fixed-bottom animate__animated animate__slideInUp">
        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post();
                    
                    get_template_part('template-parts/content','archive');
                }
            }
        ?>
        <hr class="m-0"/>
    </div>
</article>

<?php 
	get_footer();
?>