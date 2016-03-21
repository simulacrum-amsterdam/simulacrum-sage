<?php get_template_part('templates/header-feature'); ?>

<div class="sc-content">
	<h3><?= the_title(); ?></h3>
	<?= the_content(); ?>
</div>

<div class="sc-content">
	<h3>Redactie</h3>
	<div class="redactie__container">
		<?php
			global $wpdb;
			$blog_id = get_current_blog_id();

			$wp_user_query = new WP_User_Query( array(
		    'meta_query' => array(
	        'relation' => 'OR',
	        array(
            'key' => $wpdb->get_blog_prefix( $blog_id ) . 'capabilities',
            'value' => 'author',
            'compare' => 'like'
	        ),
	        array(
            'key' => $wpdb->get_blog_prefix( $blog_id ) . 'capabilities',
            'value' => 'editor',
            'compare' => 'like'
	        )
		    )
			));

			$authors = $wp_user_query->get_results();

			if (!empty($authors)) {
				foreach ($authors as $author){
	        $author_info = get_userdata($author->ID);

	        echo '<div class="redactie__img-container">';
        	echo avatar_manager_get_custom_avatar($author->ID);
	        echo '</div>';
				}
			} else {
			    echo 'No authors found';
			}
		?>
	</div>
</div>	

<div class="sc-content">
	<h3> Nieuws </h3>
	<?php 
		function custom_excerpt_length($length) {
		  return 20;
		}

		add_filter('excerpt_length', 'custom_excerpt_length', 999);
	?>
	<?php $latest = new WP_Query(array(
        'posts_per_page' => 3,
        'tag_slug__in' => "on-about"
  	)); ?>

	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
	<?php get_template_part('templates/about/news-post', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</div>

<div class="sc-content write">
	<h3><?= get_post_custom_values('about-second__header')[0]; ?></h3>
	<?= get_post_custom_values('about-second__content')[0]; ?>
</div>
