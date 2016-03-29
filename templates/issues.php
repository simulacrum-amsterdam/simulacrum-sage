<?php get_template_part('templates/header-feature'); ?>

<main class="layout__main">
	<div class="sc">
		<h1 class="sc__title"><?php the_title() ?></h1>
		<div class="sc__content-container"><?php the_content() ?></div>
    <?php
    function custom_excerpt_length($length)
    {
        return 20;
    }

    add_filter('excerpt_length', 'custom_excerpt_length', 999);
    ?>
    <?php $latest = new WP_Query(
        array(
            'posts_per_page' => 3,
            'tag_slug__in' => "on-issue"
          )
    ); ?>

    <?php while ($latest->have_posts()) : $latest->the_post(); ?>
    <?php get_template_part('templates/excerpt-news', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
	</div>
<main class="layout__main">