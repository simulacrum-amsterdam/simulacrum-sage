<div class="similar-posts">
  <?php 
    error_log( "new");
    $similarCategories = get_the_category(get_the_ID());
    if (sizeof($similarCategories) <= 1) { 
      echo "<div>Deze post heeft een categorie</div>";
      $similarCategorieName = $similarCategories{0}->name;
      error_log( print_R($similarCategorieName, TRUE));
    } else {
      echo "<div>Deze post heeft geen categorie</div>";
    }
  ?>
  <h3>Meer <?= $similarCategorieName ?></h3>
  <p>Post title</p>
  <p>Post title</p>
  <p>Post title</p>
  <p>Post title</p>
</div>