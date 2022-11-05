<?php 
	get_header();
?>

<div class="container">

<div class="row mt-6 ml-6 mr-6">
	<?php
		$args = array( 'numberposts' => '6' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
		
		echo '<div class="col-6 mt-4">'. 
		get_the_post_thumbnail($recent["ID"],'post-thumbnails').
		'</div>';		
		}

	?>
</div>

<?php 
	get_footer();
?>

</div>