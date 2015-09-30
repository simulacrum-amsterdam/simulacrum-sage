<?php 
	use Roots\Sage\Titles;
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main-header container-fluid" style="background: url(<?php echo $src[0]; ?> ) center center/100% auto no-repeat;">
	<div class="main-heading-container"  >	
		<h1><?= Titles\title(); ?></h1>
	</div>
</div>
