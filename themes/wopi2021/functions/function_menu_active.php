<?php 
// MENU ACTIVE
// EN FONCTION DE LA PAGE
function menu_active_saison() {
    if ( is_page(array('agenda','concerts-jeunes-publics', 'Saison', 'artistes-invites', 'collaborations')) OR is_singular (array( 'collaboration','concert', 'artiste_invite' )) OR is_front_page() ) { 
        echo 'menu_active';      
      }
}
function menu_active_orchestre() {
  if ( is_page(array('qui-sommes-nous', 'partenaires', 'notre-histoire')) OR is_singular (array( 'orchestre' )) ) { 
    echo 'menu_active';
  }
}


?>