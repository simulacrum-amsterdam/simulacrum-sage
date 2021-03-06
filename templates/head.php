<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/manifest.json">
  <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/dist/images/favicons/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Simulacrum">
  <meta name="application-name" content="Simulacrum">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/dist/images/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="<?php bloginfo('template_directory'); ?>/dist/images/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

  <svg class="svg-filter">
    <filter id="monochrome" color-interpolation-filters="sRGB"
            x="0" y="0" height="100%" width="100%">
<!-- $themeColor: rgb(255, 142, 163);  -->
      <feColorMatrix type="matrix"
        values="1 0 0 0  0 
                0.55686274509804 0 0 0  0  
                0.63921568627451 0 0 0  0 
                  0  0 0 1  0" />
    </filter>
  </svg>

</head>
