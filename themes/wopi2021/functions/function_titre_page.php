<?php 
// TITRE GRAS ET LEGER
// DE LA PAGE
function titre_page_gras($post) {
    if ( is_singular (array( 'concert' )) ) { 
      echo get_post_meta($post->ID, 'metadata_199', true);
    }
}
function titre_page_leger($post) {
  if ( is_singular (array( 'concert' )) ) { 
    echo get_post_meta($post->ID, 'metadata_200', true);
  }
}

?>