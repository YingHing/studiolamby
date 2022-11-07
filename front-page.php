<?php 
	get_header();
?>

<div class="container">

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

<?php 
	get_footer();
?>

</div>