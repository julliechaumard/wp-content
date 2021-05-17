<?php 
// TITRE GRAS ET LEGER
// DE LA PAGE
function titre_gras($post) {
    if ( is_front_page() ) { 
      echo get_post_meta($post->ID, 'metadata_001', true);
    }
    if ( is_singular (array( 'concert' )) ) { 
      echo get_post_meta($post->ID, 'metadata_199', true);
    }
    if ( is_singular (array( 'artiste_invite' )) ) { 
      echo get_post_meta($post->ID, 'metadata_122', true);
    }
    if ( is_singular (array( 'orchestre' )) ) { 
      echo get_post_meta($post->ID, 'metadata_603', true);
    }
    if ( is_page(array('agenda')) ) { 
      echo "NOTRE AGENDA";
    }
    if ( is_page(array('concerts-jeunes-publics')) ) { 
      echo "NOTRE AGENDA";
    }
    if ( is_page(array('Saison')) ) { 
      echo "LA SAISON";
    }
    if ( is_page(array('collaborations')) ) { 
      echo "COLLABORATIONS";
    }
    if ( is_page(array('qui-sommes-nous')) ) { 
      echo "QUI";
    }
    if ( is_page(array('artistes-invites')) ) { 
      echo "LES ARTISTES";
    }
}
function titre_leger($post) {
  if ( is_front_page() ) { 
    echo get_post_meta($post->ID, 'metadata_002', true);
  }
  if ( is_singular (array( 'concert' )) ) { 
    echo get_post_meta($post->ID, 'metadata_200', true);
  }
  if ( is_singular (array( 'artiste_invite' )) ) { 
    echo get_post_meta($post->ID, 'metadata_124', true);
  }
  if ( is_singular (array( 'orchestre' )) ) { 
    echo get_post_meta($post->ID, 'metadata_605', true);
  }
  if ( is_page(array('agenda')) ) { 
    echo "2021-2022";
  }
  if ( is_page(array('concerts-jeunes-publics')) ) { 
    echo "FAMILLE 2021-2022";
  }
  if ( is_page(array('Saison')) ) { 
    echo "2021-2022";
  }
  if ( is_page(array('collaborations')) ) { 
    echo "ET PROJETS";
  }
  if ( is_page(array('qui-sommes-nous')) ) { 
    echo "SOMMES-NOUS ?";
  }
  if ( is_page(array('artistes-invites')) ) { 
    echo "INVITÉS";
  }
}

?>