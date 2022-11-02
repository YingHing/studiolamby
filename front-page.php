<?php 
	get_header();
?>

<div class="container">
    <div class="row mt-5">
        <?php
				$args = array( 'numberposts' => '6' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
				
				echo '<div class="col-sm">'. 
				get_the_post_thumbnail($recent["ID"],'post-thumbnails').
				'</div>';		
				}

			?>
    </div>
</div>

<?php 
	get_footer();
?>