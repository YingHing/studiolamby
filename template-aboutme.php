<?php /* Template Name: About me */ ?>

 <?php get_header(); ?>

 <article class="content">
    <?php
		if( have_posts() ){
			while( have_posts() ){
				the_post();
				
				get_template_part('template-parts/content','aboutme');
			}
		}
	?>
</article>
<?php get_footer(); ?>