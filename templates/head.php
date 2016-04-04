<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-57x57.png?v=2">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-60x60.png?v=2">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-72x72.png?v=2">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-76x76.png?v=2">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-114x114.png?v=2">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-120x120.png?v=2">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-144x144.png?v=2">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-152x152.png?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-180x180.png?v=2">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon-32x32.png?v=2" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon-194x194.png?v=2" sizes="194x194">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon-96x96.png?v=2" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/android-chrome-192x192.png?v=2" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon-16x16.png?v=2" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/safari-pinned-tab.svg?v=2" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Simulacrum">
    <meta name="application-name" content="Simulacrum">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/dist/images/favicons/mstile-144x144.png?v=2">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

  <svg class="svg-filter">
    <filter id="monochrome" color-interpolation-filters="sRGB"
            x="0" y="0" height="100%" width="100%">
      <!-- current matrix = #0081C3 = rgb(0 129 195) = [0 * 255][0.50588235 * 255][0.7647059 * 255] -->
      <feColorMatrix type="matrix"
        values="0.5764705882352941 0 0 0  0 
                0.5764705882352941 0 0 0  0  
                0.2235294117647059 0 0 0  0 
                  0  0 0 1  0" />
    </filter>
  </svg>

</head>
