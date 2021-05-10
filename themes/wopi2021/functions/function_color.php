<?php 
// COULEUR LOGO + COULEUR
// LOGO + COULEUR DE LA PAGE
function couleur() {
    if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) OR is_front_page() ) { 
        echo 'color_saison';
        
      }
}

function logo_couleur() {
    if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) OR is_front_page() ) { 
        echo '/dist/assets/images/logos/logo_orchestre_rose.jpg';
      }
}

function menu_pipe_couleur() {
  if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) OR is_front_page() ) { 
      echo 'saison';
      
    }
}

?>