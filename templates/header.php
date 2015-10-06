<?php
    use Roots\Sage\Titles;
    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '');
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<ul class="nav navbar-nav hidden-xs">
			<li><a href="#">Portaal</a></li>
			<li><a href="#">Archief</a></li>
		</ul>
		<div class="logo-container">
	        <a href="<?= esc_url(home_url('/')); ?>"><img class="small-logo" src="<?php bloginfo('template_directory'); ?>/dist/images/simulacrum-logo-small2.svg"/></a>
		</div>
		<ul class="nav navbar-nav navbar-right hidden-xs">
			<li><a href="#">Contact</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</div>
</nav>
