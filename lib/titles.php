<?php

namespace Roots\Sage\Titles;

function debug_to_console( $data ) {
  $output = '';
  if ( is_array( $data ) ) {
    $output .= "console.log( 'Debug Objects with Array.' ); 
      console.log( '" . preg_replace( 
        "/\n/", "\\n",
        str_replace( "'", "\'", var_export( $data, TRUE ) )
      ) . "' );";
  } else if ( is_object( $data ) ) {
    $data    = var_export( $data, TRUE );
    $data    = explode( "\n", $data );
    foreach( $data as $line ) {
      if ( trim( $line ) ) {
        $line    = addslashes( $line );
        $output .= "console.log( '{$line}' );";
      }
    }
    $output = "console.log( 'Debug Objects with Object.' ); $output";
  } else {
    $output .= "console.log( 'Debug Objects: {$data}' );";
  }
  echo '<script>' . $output . '</script>';
}

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_category()) {
    debug_to_console(  );
    return single_cat_title();
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    return get_the_title();
  }
}
