<?php 
	get_header();
?>

<div class="container animate__animated animate__slideInUp px-4 no-title-animation">
	<div class="row mt-6 mb-4">
		<?php
			$args = array( 'numberposts' => '6' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
			
			echo '<div class="col-lg-6 mt-7">'. 
			get_the_post_thumbnail($recent["ID"],'post-thumbnails').
			'</div>';		
			}

		?>
	</div>
</div>

<div style="display: none">
<?php 
	get_footer();
?>
</div>

