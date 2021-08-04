<?php 
// MENU ACTIVE
// EN FONCTION DE LA PAGE
function menu_active_saison() {
    if ( is_page(array('agenda','concerts-jeunes-publics', 'Saison', 'artistes-invites', 'collaborations')) OR is_singular (array( 'collaboration','concert', 'artiste_invite' )) OR is_front_page() ) { 
        echo 'menu_active';      
      }
}
function menu_active_orchestre() {
  if ( is_page(array('qui-sommes-nous', 'partenaires', 'notre-histoire','soutenez-nous-entreprise', 'soutenez-nous-particulier', 'soutenez-nous-picardissimo','recrutements')) OR is_singular (array( 'orchestre' )) ) { 
    echo 'menu_active';
  }
}
function menu_active_medias() {
  if ( is_page(array('mediatheque_photos','mediatheque_videos','mediatheque_concertsenligne','a_vous_de_jouer')) ) { 
    echo 'menu_active';
  }
}
function menu_active_actus() {
  if ( is_page(array('actualites','mur_social')) OR is_singular (array( 'actualite' ))) { 
    echo 'menu_active';
  }
}
function menu_active_culture_actions() {
  if ( is_page(array('eleves_enseignants','dossiers_pedagogiques','academie','actions_citoyennes')) ) { 
    echo 'menu_active';
  }
}


?>