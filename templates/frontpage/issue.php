<?php $issue_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');?>

<a href="<?= the_permalink(); ?>">
	<img class="issue-image" src="<?php echo $issue_image[0]; ?>"/>
	<h4 class="abonneren">Abonneren</h4>
</a>
