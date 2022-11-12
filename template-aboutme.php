<?php /* Template Name: About me */ ?>

 <?php get_header(); ?>

 <article class="content">
 	<div class="container-fluid px-4 mb-4">
		<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					
					get_template_part('template-parts/content','aboutme');
				}
			}
		?>
	</div>
</article>
<?php get_footer(); ?>