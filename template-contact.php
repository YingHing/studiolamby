<?php /* Template Name: Contact */ ?>

 <?php get_header(); ?>

 <article class="content mt-auto">
 	<div class="container-fluid px-4 mt-auto">
		<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					
					get_template_part('template-parts/content','contact');
				}
			}
		?>
	</div>
</article>

<?php get_footer(); ?>