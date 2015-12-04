<div class="entry-meta">
    <?php if(!has_tag('no-author', $post->ID)){ ?>
	<p class="byline author vcard"><?= get_the_author(); ?></p>
	<?php } ?>
</div>