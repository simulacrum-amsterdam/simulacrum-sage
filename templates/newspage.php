<?php get_template_part('templates/header-feature'); ?>

<?php $count = 0; ?>

<main class="layout__main">
	<div class="blocks-layout">
        <div class="blocks-layout__block blocks-layout__block--first-item">
            <h1><?php the_title() ?></h1>
        </div>
        <?php
        function custom_excerpt_length($length)
        {
            return 30;
        }

        add_filter('excerpt_length', 'custom_excerpt_length', 999);
        ?>
        <?php $latest = new WP_Query(
            array(
                'posts_per_page' => 5,
                'tag_slug__in' => "on-about"
              )
        ); ?>

        <?php while ($latest->have_posts()) : $latest->the_post(); ?>
        <?php get_template_part('templates/excerpt-block', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <div class="blocks-layout__block blocks-layout__block--first-item"></div>
	</div>
</main>
