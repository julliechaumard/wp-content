<?php 
// TITRE GRAS ET LEGER
// DE LA PAGE
function titre_gras($post) {
    if ( is_singular (array( 'concert' )) ) { 
      echo get_post_meta($post->ID, 'metadata_199', true);
    }
    if ( is_page(array('agenda')) ) { 
      echo "NOTRE AGENDA";
    }
    if ( is_front_page() ) { 
      echo get_post_meta($post->ID, 'metadata_001', true);
    }
    if ( is_page(array('qui-sommes-nous')) ) { 
      echo "QUI";
    }
}
function titre_leger($post) {
  if ( is_singular (array( 'concert' )) ) { 
    echo get_post_meta($post->ID, 'metadata_200', true);
  }
  if ( is_page(array('agenda')) ) { 
    echo "2021-2022";
  }
  if ( is_front_page() ) { 
    echo get_post_meta($post->ID, 'metadata_002', true);
  }
  if ( is_page(array('qui-sommes-nous')) ) { 
    echo "SOMMES-NOUS ?";
  }
}

?>