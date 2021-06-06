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
    if ( is_page(array('qui-sommes-nous', 'partenaires', 'notre-histoire', 'soutenez-nous-entreprise', 'soutenez-nous-particulier', 'soutenez-nous-picardissimo')) OR is_singular (array( 'orchestre' )) ) { 
      echo 'color_orchestre';
    }
    if ( is_page(array('mediatheque_photos','mediatheque_videos','actualites','mur_social')) ) { 
      echo 'color_medias';
    }
    if ( is_page(array('eleves_enseignants','dossiers_pedagogiques','academie')) ) { 
      echo 'color_culture_actions';
    }
}

function logo_couleur() {
    if ( is_page(array('agenda','concerts-jeunes-publics', 'saison', 'artistes-invites', 'collaborations')) OR is_singular (array( 'artiste_invite','concert' )) ) { 
        echo '/dist/assets/images/logos/logo_orchestre_rose.png';
      }
    if ( is_front_page() ) { 
      echo '/dist/assets/images/logos/logo_orchestre_mauve.png';
    }
    if ( is_page(array('qui-sommes-nous', 'partenaires', 'notre-histoire', 'soutenez-nous-entreprise', 'soutenez-nous-particulier', 'soutenez-nous-picardissimo')) OR is_singular (array( 'orchestre' )) ) { 
      echo '/dist/assets/images/logos/logo_orchestre_bleu.png';
    }
    if ( is_page(array('mediatheque_photos','mediatheque_videos','actualites','mur_social')) ) { 
      echo '/dist/assets/images/logos/logo_orchestre_mauve.png';
    }
    if ( is_page(array('eleves_enseignants','dossiers_pedagogiques','academie')) ) { 
      echo '/dist/assets/images/logos/logo_orchestre_jaune.png';
    }
}

function menu_pipe_couleur() {
  if ( is_page(array('agenda','concerts-jeunes-publics', 'Saison', 'artistes-invites', 'collaborations')) OR is_singular (array( 'artiste_invite','concert' )) ) { 
      echo 'saison';
    }
  if ( is_front_page() ) { 
    echo 'accueil';
  }
  if ( is_page(array('qui-sommes-nous', 'partenaires', 'notre-histoire', 'soutenez-nous-entreprise', 'soutenez-nous-particulier', 'soutenez-nous-picardissimo')) OR is_singular (array( 'orchestre' )) ) { 
    echo 'orchestre';
  }
  if ( is_page(array('mediatheque_photos','mediatheque_videos','actualites','mur_social')) ) { 
    echo 'medias';
  }
  if ( is_page(array('eleves_enseignants','dossiers_pedagogiques','academie')) ) { 
    echo 'culture_actions';
  }
}

?>