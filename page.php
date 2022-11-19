<?php get_header(); ?>

<article class="content">
	<div class="container-fluid px-4 size-title-mobile fixed-bottom">
		<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					
					get_template_part('template-parts/content','page');
				}
			}
		?>
	</div>
</article>

<?php get_footer(); ?>