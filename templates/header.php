<?php 
	use Roots\Sage\Titles;
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main-header container-fluid" >
	<div class="main-heading-container"  >	
		<h1><?= Titles\title(); ?></h1>
	</div>
</div>
