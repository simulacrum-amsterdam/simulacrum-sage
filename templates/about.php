<?php get_template_part('templates/header-feature'); ?>
<main class="layout__main">
	<div class="sc">
		<h1 class="sc__title"><?= the_title(); ?></h1>
		<div class="sc__content-container"><?= the_content(); ?></div>
	</div>

    <?php get_template_part('templates/redactie'); ?>

	<div class="sc">
		<h1 class="sc__title"><?= get_post_custom_values('about-second__header')[0]; ?></h1>
		<div class="sc__content-container"><?= get_post_custom_values('about-second__content')[0]; ?></div>
	</div>
</main>