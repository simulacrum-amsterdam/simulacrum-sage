<div class="entry-meta">
	<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
    <?php if(!has_tag('no-author', $post->ID)){ ?>
	<p class="byline author vcard"><?= __('Door', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
	<?php } ?>
</div>