<?php get_header(); ?>

<article class="content mt-auto">
	<div class="container-fluid px-4">
		<?php
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					
					get_template_part('template-parts/content','article');
				}
			}

		?>
	</div>
</article>

<div style="display: none">
	<?php get_footer(); ?>
</div>