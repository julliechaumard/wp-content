<?php
//// BLOC REVUE DE PRESSE

?>


<!-- SELON PAGE -->
<?php
if ( is_front_page() ) :
    $revuepresse_texte1 = get_post_meta($post->ID, 'metadata_010_1', true); 
    $revuepresse_nom1 = get_post_meta($post->ID, 'metadata_009_1', true);
    $revuepresse_url1 = get_post_meta($post->ID, 'metadata_011_1', true);
    $revuepresse_texte2 = get_post_meta($post->ID, 'metadata_010_2', true); 
    $revuepresse_nom2 = get_post_meta($post->ID, 'metadata_009_2', true);
    $revuepresse_url2 = get_post_meta($post->ID, 'metadata_011_2', true);
    $revuepresse_texte3 = get_post_meta($post->ID, 'metadata_010_3', true); 
    $revuepresse_nom3 = get_post_meta($post->ID, 'metadata_009_3', true);
    $revuepresse_url3 = get_post_meta($post->ID, 'metadata_011_3', true);
    $compteur_revuepresse = 0;
endif; 

if ( is_singular (array('concert' )) ) :
    $revuepresse_texte1 = get_post_meta($post->ID, 'metadata_197_1', true); 
    $revuepresse_nom1 = get_post_meta($post->ID, 'metadata_196_1', true);
    $revuepresse_url1 = get_post_meta($post->ID, 'metadata_198_1', true);
    $revuepresse_texte2 = get_post_meta($post->ID, 'metadata_197_2', true); 
    $revuepresse_nom2 = get_post_meta($post->ID, 'metadata_196_2', true);
    $revuepresse_url2 = get_post_meta($post->ID, 'metadata_198_2', true);
    $revuepresse_texte3 = get_post_meta($post->ID, 'metadata_197_3', true); 
    $revuepresse_nom3 = get_post_meta($post->ID, 'metadata_196_3', true);
    $revuepresse_url3 = get_post_meta($post->ID, 'metadata_198_3', true);
    $compteur_revuepresse = 0;
endif;

if ( is_singular (array('artiste_invite' )) ) :
    $revuepresse_texte1 = get_post_meta($post->ID, 'metadata_127_1', true); 
    $revuepresse_nom1 = get_post_meta($post->ID, 'metadata_126_1', true);
    $revuepresse_url1 = get_post_meta($post->ID, 'metadata_128_1', true);
    $revuepresse_texte2 = get_post_meta($post->ID, 'metadata_127_2', true); 
    $revuepresse_nom2 = get_post_meta($post->ID, 'metadata_126_2', true);
    $revuepresse_url2 = get_post_meta($post->ID, 'metadata_128_2', true);
    $revuepresse_texte3 = get_post_meta($post->ID, 'metadata_127_3', true); 
    $revuepresse_nom3 = get_post_meta($post->ID, 'metadata_126_3', true);
    $revuepresse_url3 = get_post_meta($post->ID, 'metadata_128_3', true);
    $compteur_revuepresse = 0;
endif;

if ( is_page(array('collaborations')) ) :
    $revuepresse_texte1 = get_post_meta($post->ID, 'metadata_163_1', true); 
    $revuepresse_nom1 = get_post_meta($post->ID, 'metadata_162_1', true);
    $revuepresse_url1 = get_post_meta($post->ID, 'metadata_164_1', true);
    $revuepresse_texte2 = get_post_meta($post->ID, 'metadata_163_2', true); 
    $revuepresse_nom2 = get_post_meta($post->ID, 'metadata_162_2', true);
    $revuepresse_url2 = get_post_meta($post->ID, 'metadata_164_2', true);
    $revuepresse_texte3 = get_post_meta($post->ID, 'metadata_163_3', true); 
    $revuepresse_nom3 = get_post_meta($post->ID, 'metadata_162_3', true);
    $revuepresse_url3 = get_post_meta($post->ID, 'metadata_164_3', true);
    $compteur_revuepresse = 0;
endif; 

?>

<?php if (!empty($revuepresse_texte1)) :?>
    <section class='plainbox_temoignage grid justify_center bg_<?php couleur() ?> margint_70_desk margint_15_mobile margin_section_botton'>

        <!-- SLIDER -->
        <div id="slider_revuepresse" class="grid_temoignage texte_center">

            <!-- TITRE -->
            <div class="grid_area_21 grid_area_1_1_mobxs">
                <h2 class='titre_plainbox_container fontsize_27 marginb_30 tx_color_blanc'>
                    <span class='titre_leger'>REVUE DE PRESSE</span>
                </h2>
            </div>


            <!-- SLIDE 1-->
            <?php if (!empty($revuepresse_texte1)) :
                $compteur_revuepresse++;?>
                <div id="slide_revuepresse_1" class="slide_active_revuepresse grid_area_2_24 grid_area_1_35_mobxs">
                    <div class='texte_plainbox_container fontsize_20 margin_section_botton tx_color_blanc'>
                        <p class='courgette fontsize_25 fontsize_18_mobxs'><?php echo $revuepresse_texte1; ?></p>
                    </div>
                    <div class="texte_right margin_section_botton">
                        <a class="ubuntu_moyen tx_color_blanc" target="_blank" href="<?php echo $revuepresse_url1; ?>">LIRE LA SUITE...</a>
                    </div>
                    <div class='alignself_end flex flex_justify_center ubuntu_moyen fontsize_20 fontsize_16_mobxs tx_color_blanc'>
                        <p class="borderb_white"><?php echo $revuepresse_nom1; ?></p>
                    </div>
                </div>
            <?php endif; ?>


            <!-- SLIDE 2-->
            <?php if (!empty($revuepresse_texte2)) :
                $compteur_revuepresse++;?>
                <div id="slide_revuepresse_2" class="grid_area_2_24 grid_area_1_35_mobxs slide_hidden_revuepresse">
                    <div class='texte_plainbox_container fontsize_20 margin_section_botton tx_color_blanc'>
                        <p class='courgette fontsize_25 fontsize_18_mobxs'><?php echo $revuepresse_texte2; ?></p>
                    </div>
                    <div class="texte_right margin_section_botton">
                        <a class="ubuntu_moyen tx_color_blanc" target="_blank" href="<?php echo $revuepresse_url2; ?>">LIRE LA SUITE...</a>
                    </div>
                    <div class='alignself_end flex flex_justify_center ubuntu_moyen fontsize_20 fontsize_16_mobxs tx_color_blanc'>
                        <p class="borderb_white"><?php echo $revuepresse_nom2; ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- SLIDE 3-->
            <?php if (!empty($revuepresse_texte3)) :
                $compteur_revuepresse++;?>
            <div id="slide_revuepresse_3" class="grid_area_2_24 grid_area_1_35_mobxs slide_hidden_revuepresse">
                <div class='texte_plainbox_container margin_section_botton tx_color_blanc'>
                    <p class='courgette fontsize_25 fontsize_18_mobxs'><?php echo $revuepresse_texte3; ?></p>
                </div>
                <div class="texte_right margin_section_botton">
                        <a class="ubuntu_moyen tx_color_blanc" target="_blank" href="<?php echo $revuepresse_url3; ?>">LIRE LA SUITE...</a>
                    </div>
                <div class='alignself_end flex flex_justify_center ubuntu_moyen fontsize_20 fontsize_16_mobxs tx_color_blanc'>
                    <p class="borderb_white"><?php echo $revuepresse_nom3; ?></p>
                </div>
            </div>
            <?php endif; ?>





            <!-- FLÈCHE -->
            <div id="precedent" class="grid_area_1_14 grid_area_1_2_mobxs alignself_center marginb_20_mobilexs" onclick="ChangeSliderevuepresse('gauche',<?php echo $compteur_revuepresse ?>)"><i class="fas fa-arrow-left fontsize_25 tx_color_blanc"></i></div>
            <div id="suivant" class="grid_area_3_14 grid_area_1_5_mobxs alignself_center margint_20_mobilexs" onclick="ChangeSliderevuepresse('droite',<?php echo $compteur_revuepresse ?>)"><i class="fas fa-arrow-right fontsize_25 tx_color_blanc"></i></div>

        </div>


        
    </section>
<?php endif; ?>

<!-- JAVASCRIPT DU SLIDER REVUE DE PRESSE -->
<script>
    
    function ChangeSliderevuepresse(sens_revuepresse,compteur_revuepresse) {
        // Le id de la slide
        slideid_courante_revuepresse = 0;
        
        // Le numéro de la slide
        id_slide_revuepresse = 0;
        // Si clic sur flèche de DROITE
        if (sens_revuepresse === 'droite') {
            // CACHER LA SLIDE COURANTE

            // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
            slideid_courante_revuepresse = document.getElementsByClassName('slide_active_revuepresse')[0].id;
            //chnager le classe active par une classe qui cache son contenu
            document.getElementById(slideid_courante_revuepresse).classList.replace("slide_active_revuepresse", "slide_hidden_revuepresse");

            // AFFICHER LA SLIDE SUIVANTE

            // Récupérer le numéro de slide dans le ID "slide_x"
            id_slide_revuepresse = slideid_courante_revuepresse.substr(18,1);

            // Si on clique plus que le nombre de slide existante on revient à la slide 1
            if (id_slide_revuepresse >= compteur_revuepresse) {
                id_slide_revuepresse = 0;

            }

            // on incrémente le numéro de slide pour afficher la slide suivante
            id_slide_revuepresse++;

            id_slide_revuepresse = 'slide_revuepresse_' + id_slide_revuepresse;
            

            document.getElementById(id_slide_revuepresse).classList.replace("slide_hidden_revuepresse", "slide_active_revuepresse");

        }

        // Si clic sur flèche de GAUCHE
        if (sens_revuepresse === 'gauche') {

            // CACHER LA SLIDE COURANTE

            // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
            slideid_courante_revuepresse = document.getElementsByClassName('slide_active_revuepresse')[0].id;

            //chnager le classe active par une classe qui cache son contenu
            document.getElementById(slideid_courante_revuepresse).classList.replace("slide_active_revuepresse", "slide_hidden_revuepresse");

            // AFFICHER LA SLIDE SUIVANTE

            // Récupérer le nuémro de slide dans le ID "slide_x"
            id_slide_revuepresse = slideid_courante_revuepresse.substr(18,1);


            // on incrémente le numéro de slide pour afficher la slide suivante
            id_slide_revuepresse--;

            if (id_slide_revuepresse === 0) {
                id_slide_revuepresse = compteur_revuepresse;

            }

            id_slide_revuepresse = 'slide_revuepresse_' + id_slide_revuepresse;

            document.getElementById(id_slide_revuepresse).classList.replace("slide_hidden_revuepresse", "slide_active_revuepresse");

        }
        
    }



</script>