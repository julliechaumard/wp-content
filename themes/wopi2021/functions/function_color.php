<?php 
// COULEUR LOGO + COULEUR
// LOGO + COULEUR DE LA PAGE
function couleur() {
    if ( is_page(array('agenda','concerts-jeunes-publics', 'saison', 'artistes-invites', 'collaborations')) OR is_singular (array( 'artiste_invite','concert' )) ) { 
        echo 'color_saison';
      }
    if ( is_front_page() ) { 
      echo 'color_accueil';
    }
    if ( is_page(array('qui-sommes-nous')) OR is_singular (array( 'orchestre' )) ) { 
      echo 'color_orchestre';
    }
}

function logo_couleur() {
    if ( is_page(array('agenda','concerts-jeunes-publics', 'saison', 'artistes-invites', 'collaborations')) OR is_singular (array( 'artiste_invite','concert' )) ) { 
        echo '/dist/assets/images/logos/logo_orchestre_rose.jpg';
      }
    if ( is_front_page() ) { 
      echo '/dist/assets/images/logos/logo_orchestre_mauve.jpg';
    }
    if ( is_page(array('qui-sommes-nous')) OR is_singular (array( 'orchestre' )) ) { 
      echo '/dist/assets/images/logos/logo_orchestre_bleu.jpg';
    }
}

function menu_pipe_couleur() {
  if ( is_page(array('agenda','concerts-jeunes-publics', 'Saison', 'artistes-invites', 'collaborations')) OR is_singular (array( 'artiste_invite','concert' )) ) { 
      echo 'saison';
    }
  if ( is_front_page() ) { 
    echo 'accueil';
  }
  if ( is_page(array('qui-sommes-nous')) OR is_singular (array( 'orchestre' )) ) { 
    echo 'orchestre';
  }
}

?>