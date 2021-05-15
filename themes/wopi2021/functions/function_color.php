<?php 
// COULEUR LOGO + COULEUR
// LOGO + COULEUR DE LA PAGE
function couleur() {
    if ( is_page(array('agenda', 'saison', 'artistes-invites')) OR is_singular (array( 'collaboration','concert' )) ) { 
        echo 'color_saison';
      }
    if ( is_front_page() ) { 
      echo 'color_accueil';
    }
    if ( is_page(array('qui-sommes-nous')) ) { 
      echo 'color_orchestre';
    }
}

function logo_couleur() {
    if ( is_page(array('agenda', 'saison', 'artistes-invites')) OR is_singular (array( 'collaboration','concert' )) ) { 
        echo '/dist/assets/images/logos/logo_orchestre_rose.jpg';
      }
    if ( is_front_page() ) { 
      echo '/dist/assets/images/logos/logo_orchestre_mauve.jpg';
    }
    if ( is_page(array('qui-sommes-nous')) ) { 
      echo '/dist/assets/images/logos/logo_orchestre_bleu.jpg';
    }
}

function menu_pipe_couleur() {
  if ( is_page(array('agenda', 'Saison', 'artistes-invites')) OR is_singular (array( 'collaboration','concert' )) ) { 
      echo 'saison';
    }
  if ( is_front_page() ) { 
    echo 'accueil';
  }
  if ( is_page(array('qui-sommes-nous')) ) { 
    echo 'orchestre';
  }
}

?>