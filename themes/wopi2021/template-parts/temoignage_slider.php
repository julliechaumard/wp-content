<?php
//// BLOC TEMOIGNAGE

?>


<!-- SELON PAGE -->
<?php
if ( is_front_page() ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_014_1', true); 
    $temoignage_nom1 = get_post_meta($post->ID, 'metadata_013_1', true);
    $temoignage_texte2 = get_post_meta($post->ID, 'metadata_014_2', true); 
    $temoignage_nom2 = get_post_meta($post->ID, 'metadata_013_2', true);
    $temoignage_texte3 = get_post_meta($post->ID, 'metadata_014_3', true); 
    $temoignage_nom3 = get_post_meta($post->ID, 'metadata_013_3', true);
    $compteur_temoignage = 0;
endif; 
if ( is_singular (array( 'artiste_invite')) ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_129', true); 
endif;
if ( is_singular (array( 'orchestre')) ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_610', true); 
endif;
if ( is_page(array('collaborations')) ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_166_1', true); 
    $temoignage_nom1 = get_post_meta($post->ID, 'metadata_165_1', true);
    $temoignage_texte2 = get_post_meta($post->ID, 'metadata_166_2', true); 
    $temoignage_nom2 = get_post_meta($post->ID, 'metadata_165_2', true);
    $temoignage_texte3 = get_post_meta($post->ID, 'metadata_166_3', true); 
    $temoignage_nom3 = get_post_meta($post->ID, 'metadata_165_3', true);
    $compteur_temoignage = 0;
endif;
if ( is_page(array('academie')) ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_409_1', true); 
    $temoignage_nom1 = get_post_meta($post->ID, 'metadata_408_1', true);
    $temoignage_texte2 = get_post_meta($post->ID, 'metadata_409_2', true); 
    $temoignage_nom2 = get_post_meta($post->ID, 'metadata_408_2', true);
    $temoignage_texte3 = get_post_meta($post->ID, 'metadata_409_3', true); 
    $temoignage_nom3 = get_post_meta($post->ID, 'metadata_408_3', true);
    $compteur_temoignage = 0;
endif;
if ( is_page(array('eleves_enseignants')) ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_487_1', true); 
    $temoignage_nom1 = get_post_meta($post->ID, 'metadata_486_1', true);
    $temoignage_texte2 = get_post_meta($post->ID, 'metadata_487_2', true); 
    $temoignage_nom2 = get_post_meta($post->ID, 'metadata_486_2', true);
    $temoignage_texte3 = get_post_meta($post->ID, 'metadata_487_3', true); 
    $temoignage_nom3 = get_post_meta($post->ID, 'metadata_486_3', true);
    $compteur_temoignage = 0;
endif;
if ( is_page(array('actions_citoyennes')) ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_443_1', true); 
    $temoignage_nom1 = get_post_meta($post->ID, 'metadata_442_1', true);
    $temoignage_texte2 = get_post_meta($post->ID, 'metadata_443_2', true); 
    $temoignage_nom2 = get_post_meta($post->ID, 'metadata_442_2', true);
    $temoignage_texte3 = get_post_meta($post->ID, 'metadata_443_3', true); 
    $temoignage_nom3 = get_post_meta($post->ID, 'metadata_442_3', true);
    $compteur_temoignage = 0;
endif;

?>

<!-- --------------------------------- -->
<!-- 3 SLIDES MAX -->
<!-- SLIDER POUR PAGE D'ACCUEIL -->
<!-- SLIDER POUR PAGE COLLABORATION -->
<!-- SLIDER POUR PAGE ACADÉMIE -->
<!-- SLIDER POUR PAGE ÉLÈVES ET ENSEIGNANTS -->
<!-- SLIDER POUR PAGE ACTIONS CITOYENNES -->
<!-- --------------------------------- -->
<?php 
if ( is_front_page() OR is_page(array('collaborations','academie','eleves_enseignants','actions_citoyennes')) ) :
    if (!empty($temoignage_texte1)) :?>
        <section class='plainbox_temoignage grid justify_center bg_<?php couleur() ?> margint_70_desk margint_15_mobile margin_section_botton'>

            <!-- SLIDER -->
            <div id="slider_temoignage" class="grid_temoignage texte_center">

                <!-- TITRE -->
                <div class="grid_area_21 grid_area_1_1_mobxs">
                    <h2 class='titre_plainbox_container fontsize_27 marginb_30 tx_color_blanc'>
                        <span class='titre_leger'>TÉMOIGNAGE</span>
                    </h2>
                </div>


                <!-- SLIDE 1-->
                <?php if (!empty($temoignage_texte1)) :
                    $compteur_temoignage++;?>
                    <div id="slide_temoignage_1" class="slide_active grid_area_2_24 grid_area_1_35_mobxs">
                        <div class='texte_plainbox_container fontsize_20 margin_section_botton tx_color_blanc'>
                            <p class='courgette fontsize_25 fontsize_18_mobxs'><?php echo $temoignage_texte1; ?></p>
                        </div>
                        <div class='alignself_end flex flex_justify_center ubuntu_moyen fontsize_20 fontsize_16_mobxs tx_color_blanc'>
                            <p class="borderb_white"><?php echo $temoignage_nom1; ?></p>
                        </div>
                    </div>
                <?php endif; ?>




                <!-- SLIDE 2-->
                <?php if (!empty($temoignage_texte2)) :
                    $compteur_temoignage++;?>
                    <div id="slide_temoignage_2" class="grid_area_2_24 grid_area_1_35_mobxs slide_hidden">
                        <div class='texte_plainbox_container fontsize_20 margin_section_botton tx_color_blanc'>
                            <p class='courgette fontsize_25 fontsize_18_mobxs'><?php echo $temoignage_texte2; ?></p>
                        </div>
                        <div class='alignself_end flex flex_justify_center ubuntu_moyen fontsize_20 fontsize_16_mobxs tx_color_blanc'>
                            <p class="borderb_white"><?php echo $temoignage_nom2; ?></p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- SLIDE 3-->
                <?php if (!empty($temoignage_texte3)) :
                    $compteur_temoignage++;?>
                <div id="slide_temoignage_3" class="grid_area_2_24 grid_area_1_35_mobxs slide_hidden">
                    <div class='texte_plainbox_container margin_section_botton tx_color_blanc'>
                        <p class='courgette fontsize_25 fontsize_18_mobxs'><?php echo $temoignage_texte3; ?></p>
                    </div>
                    <div class='alignself_end flex flex_justify_center ubuntu_moyen fontsize_20 fontsize_16_mobxs tx_color_blanc'>
                        <p class="borderb_white"><?php echo $temoignage_nom3; ?></p>
                    </div>
                </div>
                <?php endif; ?>





                <!-- TÉMOIGNAGE -->
                <div id="precedent" class="grid_area_1_14 grid_area_1_2_mobxs alignself_center marginb_20_mobilexs" onclick="ChangeSlidetemoignage('gauche',<?php echo $compteur_temoignage ?>)"><i class="fas fa-arrow-left fontsize_25 tx_color_blanc"></i></div>
                <div id="suivant" class="grid_area_3_14 grid_area_1_5_mobxs alignself_center margint_20_mobilexs" onclick="ChangeSlidetemoignage('droite',<?php echo $compteur_temoignage ?>)"><i class="fas fa-arrow-right fontsize_25 tx_color_blanc"></i></div>

            </div>


            
        </section>
    <?php endif; 
endif; 
?>

<!-- --------------------------------- -->
<!-- SLIDE UNIQUE -->
<!-- SLIDER POUR FICHE ARTISTE INVITÉ -->
<!-- SLIDER POUR FICHE ARTISTE DE L'ORCHESTRE -->
<!-- --------------------------------- -->
<?php 
if ( is_singular (array( 'artiste_invite','orchestre')) ) :
    if (!empty($temoignage_texte1)) :?>
        <section class='plainbox_temoignage grid justify_center bg_<?php couleur() ?> margint_70_desk margint_15_mobile margin_section_botton'>

            <!-- SLIDER -->
            <div id="slider_temoignage" class="grid_temoignage texte_center">

                <!-- TITRE -->
                <div class="grid_area_21 grid_area_1_1_mobxs">
                    <h2 class='titre_plainbox_container fontsize_27 marginb_30 tx_color_blanc'>
                        <span class='titre_leger'>TÉMOIGNAGE DE L'ARTISTE</span>
                    </h2>
                </div>

                <!-- SLIDE UNIQUE-->
                <?php if (!empty($temoignage_texte1)) :?>
                    <div id="slide_temoignage_1" class="slide_active grid_area_2_24 grid_area_1_35_mobxs">
                        <div class='texte_plainbox_container fontsize_20 margin_section_botton tx_color_blanc'>
                            <p class='courgette fontsize_25 fontsize_18_mobxs'><?php echo $temoignage_texte1; ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>


            
        </section>
    <?php endif; 
endif; 
?>

<!-- JAVASCRIPT DU SLIDER TÉMOIGNAGE -->
<script>
    
    function ChangeSlidetemoignage(sens,compteur_temoignage) {
        // Le id de la slide
        slideid_courante = 0;
        // Le numéro de la slide
        id_slide = 0;
        // Si clic sur flèche de DROITE
        if (sens === 'droite') {
            // CACHER LA SLIDE COURANTE

            // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
            slideid_courante = document.getElementsByClassName('slide_active')[0].id;
            //chnager le classe active par une classe qui cache son contenu
            document.getElementById(slideid_courante).classList.replace("slide_active", "slide_hidden");

            // AFFICHER LA SLIDE SUIVANTE

            // Récupérer le nuémro de slide dans le ID "slide_x"
            id_slide = slideid_courante.substr(17,1);

            // Si on clique plus que le nombre de slide existante on revient à la slide 1
            if (id_slide >= compteur_temoignage) {
                id_slide = 0;

            }

            // on incrémente le numéro de slide pour afficher la slide suivante
            id_slide++;

            id_slide = 'slide_temoignage_' + id_slide;

            document.getElementById(id_slide).classList.replace("slide_hidden", "slide_active");

        }

        // Si clic sur flèche de GAUCHE
        if (sens === 'gauche') {

            // CACHER LA SLIDE COURANTE

            // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
            slideid_courante = document.getElementsByClassName('slide_active')[0].id;

            //chnager le classe active par une classe qui cache son contenu
            document.getElementById(slideid_courante).classList.replace("slide_active", "slide_hidden");

            // AFFICHER LA SLIDE SUIVANTE

            // Récupérer le nuémro de slide dans le ID "slide_x"
            id_slide = slideid_courante.substr(17,1);


            // on incrémente le numéro de slide pour afficher la slide suivante
            id_slide--;

            if (id_slide === 0) {
                id_slide = compteur_temoignage;

            }

            id_slide = 'slide_temoignage_' + id_slide;

            document.getElementById(id_slide).classList.replace("slide_hidden", "slide_active");

        }
        
    }



</script>