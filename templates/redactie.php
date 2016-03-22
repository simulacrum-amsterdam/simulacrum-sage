<div class="sc">
	<h1 class="sc__title">Redactie</h1>
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