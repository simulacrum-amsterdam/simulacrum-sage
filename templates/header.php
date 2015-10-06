<?php
    use Roots\Sage\Titles;
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '');
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a href="#">Portaal</a></li>
			<li><a href="#">Archief</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</div>
</nav>
