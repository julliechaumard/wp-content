<?php 
// MENU ACTIVE
// EN FONCTION DE LA PAGE
function menu_active() {
    if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) OR is_front_page() ) { 
        echo 'menu_active';
        
      }
}


?>