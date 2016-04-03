<?php
function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
?>

<div class="sc">
    <h1 class="sc__title">Redactie</h1>
</div>

<div class="redactie__container">
	<?php global $wpdb;
    $blog_id = get_current_blog_id();

    $wp_user_query = new WP_User_Query(
        array(
        'meta_query' => array(
        'relation' => 'OR',
        array(
        'key' => $wpdb->get_blog_prefix($blog_id) . 'capabilities',
        'value' => 'author',
        'compare' => 'like'
        ),
        array(
        'key' => $wpdb->get_blog_prefix($blog_id) . 'capabilities',
        'value' => 'editor',
        'compare' => 'like'
        )
        )
        )
    );

    $authors = $wp_user_query->get_results();
    if (!empty($authors)) {
      foreach ($authors as $author) {
        $author_info = get_userdata($author->ID);
        $attachment_id = get_user_meta( $author->ID, 'avatar_manager_custom_avatar', true ); 
        $custom_avatar = get_post_meta( $attachment_id, '_avatar_manager_custom_avatar', true );
        $avatar_url = avatar_manager_generate_avatar_url( $attachment_id, 300 );
        ?>
        <div class="redactie__member">
            <div class="redactie__member-meta" onclick="">
                <div>
                    <h3 class="redactie__member-title"><?php echo $author->display_name; ?></h3>
                    <p class="redactie__member-summery">
                    <?php echo limit_text($author->description, 35); ?>
                    </p>
                </div>
            </div>
            <img class="redactie__img" src="<?php echo $avatar_url ?>"/>
      </div>
    <?php
    }
    } else {
        echo 'No authors found';
    }?>
</div>
