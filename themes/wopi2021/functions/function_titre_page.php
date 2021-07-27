<?php 
// TITRE GRAS ET LEGER
// DANS LE BANNER
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
    if ( is_singular (array( 'actualite' )) ) { 
      echo "L'ACTUALITÉ";
    }
    if ( is_page(array('agenda')) ) { 
      echo "AGENDA";
    }
    if ( is_page(array('concerts-jeunes-publics')) ) { 
      echo "AGENDA";
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
    if ( is_page(array('notre-histoire')) ) { 
      echo "NOTRE HISTOIRE";
    }
    if ( is_page(array('soutenez-nous-entreprise')) ) { 
      echo "SOUTENEZ-NOUS";
    }
    if ( is_page(array('soutenez-nous-particulier')) ) { 
      echo "SOUTENEZ-NOUS";
    }
    if ( is_page(array('soutenez-nous-picardissimo')) ) { 
      echo "SOUTENEZ-NOUS";
    }
    if ( is_page(array('recrutements')) ) { 
      echo "RECRUTEMENT";
    }
    if ( is_page(array('partenaires')) ) { 
      echo "LES PARTENAIRES";
    }
    if ( is_page(array('artistes-invites')) ) { 
      echo "LES ARTISTES";
    }
    if ( is_page(array('mediatheque_photos')) ) { 
      echo "MÉDIATHÈQUE";
    }
    if ( is_page(array('mediatheque_videos')) ) { 
      echo "MÉDIATHÈQUE";
    }
    if ( is_page(array('a_vous_de_jouer')) ) { 
      echo "À VOUS";
    }
    if ( is_page(array('actualites')) ) { 
      echo "NOS DERNIÈRES";
    }
    if ( is_page(array('mur_social')) ) { 
      echo "LES RÉSEAUX";
    }
    if ( is_page(array('eleves_enseignants')) ) { 
      echo "ÉLÈVES ET";
    }
    if ( is_page(array('dossiers_pedagogiques')) ) { 
      echo "DOSSIERS";
    }
    if ( is_page(array('academie')) ) { 
      echo "ACCOMPAGNER";
    }
    if ( is_page(array('actions_citoyennes')) ) { 
      echo "ACTIONS";
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
  if ( is_singular (array( 'actualite' )) ) { 
    echo "DE L'ORCHESTRE";
  }
  if ( is_page(array('agenda')) ) { 
    echo "DES CONCERTS";
  }
  if ( is_page(array('concerts-jeunes-publics')) ) { 
    echo "POUR PETITS & GRANDS";
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
  if ( is_page(array('notre-histoire')) ) { 
    echo "NOS MISSIONS";
  }
  if ( is_page(array('soutenez-nous-entreprise')) ) { 
    echo "ENTREPRISE";
  }
  if ( is_page(array('soutenez-nous-particulier')) ) { 
    echo "PARTICULIER";
  }
  if ( is_page(array('soutenez-nous-picardissimo')) ) { 
    echo "PICARDISSIMO";
  }
  if ( is_page(array('recrutements')) ) { 
    echo "DE L’ORCHESTRE";
  }
  if ( is_page(array('partenaires')) ) { 
    echo "DE L’ORCHESTRE";
  }
  if ( is_page(array('artistes-invites')) ) { 
    echo "INVITÉS";
  }
  if ( is_page(array('mediatheque_photos')) ) { 
    echo "PHOTOS";
  }
  if ( is_page(array('mediatheque_videos')) ) { 
    echo "VIDÉOS";
  }
  if ( is_page(array('a_vous_de_jouer')) ) { 
    echo "DE JOUER !";
  }
  if ( is_page(array('actualites')) ) { 
    echo "ACTUALITÉS";
  }
  if ( is_page(array('mur_social')) ) { 
    echo "SOCIAUX";
  }
  if ( is_page(array('eleves_enseignants')) ) { 
    echo "ENSEIGNANTS";
  }
  if ( is_page(array('dossiers_pedagogiques')) ) { 
    echo "PÉDAGOGIQUES";
  }
  if ( is_page(array('academie')) ) { 
    echo "LES JEUNES TALENTS";
  }
  if ( is_page(array('actions_citoyennes')) ) { 
    echo "CITOYENNES ET SOCIALES";
  }

}

?>