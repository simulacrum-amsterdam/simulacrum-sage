<div class="sc">
	<h1 class="sc__title">Redactie</h1>
	<div class="redactie__container">
		<?php global $wpdb;
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
    ?>
    <div class="redactie__member">
      <h3 class="redactie__member-title"><?php echo $author->display_name; ?></h3>
      <div class="redactie__img-container">
    	 <?php echo avatar_manager_get_custom_avatar($author->ID) ?>
      </div>
      <div class="redactie__member-meta">
        <p><?php echo $author->description; ?></p>
      </div>
    </div>
    
    <?php 
			}
		} else {
		    echo 'No authors found';
		}?>
	</div>
</div>