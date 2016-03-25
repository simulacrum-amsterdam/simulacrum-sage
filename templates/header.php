<!-- meta -->
<?php
  $page = get_page_by_title("Simulacrum");
  $recent = new WP_Query("page_id=" . $page->ID);
while ($recent->have_posts()) : $recent->the_post();
    ?>
    <h1 class="header__title"><?= the_title(); ?></h1>
    <div class="header__description"><?php echo $page->post_content; ?></div>
    <?php
endwhile;
  wp_reset_postdata();
?>
<!-- navigation -->
<?php get_template_part('templates/navigation');?>
