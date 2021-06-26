<?php
//// BLOC TEMOIGNAGE

?>


<!-- ACCUEIL -->
<?php
if ( is_front_page() ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_014_1', true); 
    $temoignage_nom1 = get_post_meta($post->ID, 'metadata_013_1', true);
    $temoignage_texte2 = get_post_meta($post->ID, 'metadata_014_2', true); 
    $temoignage_nom2 = get_post_meta($post->ID, 'metadata_013_2', true);
    $temoignage_texte3 = get_post_meta($post->ID, 'metadata_014_3', true); 
    $temoignage_nom3 = get_post_meta($post->ID, 'metadata_013_3', true);
    $compteur_temoignage = 0;
endif; ?>

<?php if (!empty($temoignage_texte1)) :?>
    <section class='plainbox_temoignage grid justify_center bg_color_accueil margint_70_desk margint_15_mobile margin_section_botton'>

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
<?php endif; ?>

<!-- JAVASCRIPT DU SLIDER TÉMOIGNAGE -->
<script>
    
    function ChangeSlidetemoignage(sens,compteur_temoignage) {
        slideid_courante = 0
        id_slide = 0
        console.log('COMPTEUR = ',compteur_temoignage);
        // Si clic sur flèche de DROITE
        if (sens === 'droite') {
            console.log('DROITE',sens);
            // CACHER LA SLIDE COURANTE

            // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
            slideid_courante = document.getElementsByClassName('slide_active')[0].id;
            console.log('DROITE slideid_courante = ', slideid_courante);
            //chnager le classe active par une classe qui cache son contenu
            document.getElementById(slideid_courante).classList.replace("slide_active", "slide_hidden");

            // AFFICHER LA SLIDE SUIVANTE

            // Récupérer le nuémro de slide dans le ID "slide_x"
            id_slide = slideid_courante.substr(17,1);
            console.log('DOITE id_slide = ', id_slide);
            // Si on clique plus que 3 fois on revient à la slide 1
            if (id_slide >= compteur_temoignage) {
                id_slide = 0;
                console.log('DROITE ON EST DANS LE IF id_slide>2');
            }
            console.log('DOITE id_slide = ', id_slide);
            // on incrémente le numéro de slide pour afficher la slide suivante
            id_slide++;
            console.log('DROITE id_slide = ', id_slide);
            id_slide = 'slide_temoignage_' + id_slide;
            console.log('DROITE id_slide = ', id_slide);
            document.getElementById(id_slide).classList.replace("slide_hidden", "slide_active");

        }

        // Si clic sur flèche de GAUCHE
        if (sens === 'gauche') {
            console.log(sens);
            // CACHER LA SLIDE COURANTE

            // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
            slideid_courante = document.getElementsByClassName('slide_active')[0].id;
            console.log('slideid_courante = ', slideid_courante);
            //chnager le classe active par une classe qui cache son contenu
            document.getElementById(slideid_courante).classList.replace("slide_active", "slide_hidden");
            console.log('ON A CACHE LA SLIDE COURANTE');
            // AFFICHER LA SLIDE SUIVANTE

            // Récupérer le nuémro de slide dans le ID "slide_x"
            id_slide = slideid_courante.substr(17,1);
            console.log('id_slide = ', id_slide);

            // on incrémente le numéro de slide pour afficher la slide suivante
            id_slide--;
            console.log('id_slide APRES  id_slide-- = ', id_slide);
            if (id_slide === 0) {
                id_slide = compteur_temoignage;
                console.log('ON EST DANS LE IF id_slide>2');
            }
            console.log('APRES LE IF id_slide = ', id_slide);
            id_slide = 'slide_temoignage_' + id_slide;
            console.log('id_slide = ', id_slide);
            document.getElementById(id_slide).classList.replace("slide_hidden", "slide_active");
            console.log('ON A AFFICHE LA SLIDE SUIVANTE');
        }
        
    }



</script>