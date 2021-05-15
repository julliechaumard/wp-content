<?php 
// MENU ACTIVE
// EN FONCTION DE LA PAGE
function menu_active_saison() {
    if ( is_page(array('agenda', 'Saison', 'artistes-invites')) OR is_singular (array( 'collaboration','concert' )) OR is_front_page() ) { 
        echo 'menu_active';      
      }
}
function menu_active_orchestre() {
  if ( is_page(array('qui-sommes-nous')) ) { 
    echo 'menu_active';
  }
}


?>