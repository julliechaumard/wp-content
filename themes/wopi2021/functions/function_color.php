<?php 
// COULEUR LOGO + COULEUR
// LOGO + COULEUR DE LA PAGE
function couleur() {
    if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) ) { 
        echo 'color_saison';
      }
    if ( is_front_page() ) { 
      echo 'color_accueil';
    }
}

function logo_couleur() {
    if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) ) { 
        echo '/dist/assets/images/logos/logo_orchestre_rose.jpg';
      }
    if ( is_front_page() ) { 
      echo '/dist/assets/images/logos/logo_orchestre_mauve.jpg';
    }
}

function menu_pipe_couleur() {
  if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) ) { 
      echo 'saison';
    }
  if ( is_front_page() ) { 
    echo 'accueil';
  }
}

?>