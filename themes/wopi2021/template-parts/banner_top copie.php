<!-- ---------------- -->
<!-- BANNER -->
<!-- banner_top.php -->
<!-- ---------------- -->

<!-- ---------------- -->
<!-- MODE DESKTOP -->
<!-- ---------------- -->

<section class='banner_top grid_2col12_3row margin_section_botton'>
    <!-- ---------------- -->
    <!-- TITRE DE LA PAGE -->
    <!-- ---------------- -->
    <div class='Title_cell tx_color_noir_fonce'>
        <div>
            <h1 class='titre_page_container'>
                <!-- CONTENU DU TITRE DIFFERENTE SELON PAGE function_titre_page.php -->
                <span class='titre_gras'><?php titre_gras($post) ?></span>
                <br>
                <span class='titre_leger'><?php titre_leger($post) ?></span>
            </h1>
        </div>

    </div>

    <!-- ---------------- -->
    <!-- ACCROCHE -->
    <!-- ---------------- -->

    <!-- CONTENU DE L'ACCROCHE DIFFERENT SELON PAGE -->

    <!-- ACCUEIL -->
    <?php
    if ( is_front_page() ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <a href="<?php echo get_post_meta($post->ID, 'metadata_015', true); ?>">
                        <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_003', true); ?></span>
                        <br>
                        <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_004', true); ?></span>
                    </a>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- AGENDA -->
    <?php 
    if ( is_page(array('agenda')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_110', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_111', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- CONCERTS JEUNE PUBLIC -->
    <?php 
    if ( is_page(array('concerts-jeunes-publics')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_230', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_231', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- SAISON -->
    <?php 
    if ( is_page(array('saison')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_100', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_101', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- FICHE DU CONCERT -->
    <?php 
    if ( is_singular (array( 'concert' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <!-- GENRE -->
                    <span class='accroche_cell_texte_gras margint_20 block'>
                        <?php $concert_genre =  wp_get_post_terms($post->ID, 'genre', array("fields" => "names"));
                        if (!empty($concert_genre)) {echo $concert_genre[0];}?>
                    </span>
                    <br>
                    <!-- SOUS-TITRE -->
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_201', true); ?></span>
                </p>
            </div>
        </div> 
    <?php endif;?>

    <!-- ARTISTES INVITES -->
    <?php
    if ( is_page(array('artistes-invites')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_140', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_141', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>
    
    <!-- FICHE DE L'ARTISTE INVITE -->
    <?php 
    if ( is_singular (array( 'artiste_invite' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_120', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_121', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- COLLABORATIONS -->
    <?php
    if ( is_page(array('collaborations')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_160', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_161', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- QUI SOMMES-NOUS ? -->
    <?php
    if ( is_page(array('qui-sommes-nous')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_650', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_651', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS ENTREPRISE -->
    <?php
    if ( is_page(array('soutenez-nous-entreprise')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_670', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_671', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS PARTICULIER -->
    <?php
    if ( is_page(array('soutenez-nous-particulier')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_680', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_681', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS PICARDISSIMO -->
    <?php
    if ( is_page(array('soutenez-nous-picardissimo')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_690', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_691', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- HISTOIRE -->
    <?php
    if ( is_page(array('notre-histoire')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_630', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_631', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- RECRUTEMENT -->
    <?php
    if ( is_page(array('recrutements')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_660', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_661', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- FICHE DE L'ARTISTE ORCHESTRE -->
    <?php 
    if ( is_singular (array( 'orchestre' )) ) : ?>
        <!-- POSTES L'ARTISTE -->
        <div class='accroche_cell grid_1col1_1row align_center  bg_<?php couleur() ?>'>
            <div class=''>
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <?php if(!empty(get_post_meta($post->ID, 'metadata_604_'.$i, true))) { ?>
                    <p class='accroche_cell_texte'>
                        <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_604_'.$i, true); ?></span>
                    </p>
                <?php } ?>
            <?php } ?>
            </div>
        </div>
    <?php endif;?>

    <!-- PARTENAIRES-->
    <?php
    if ( is_page(array('partenaires')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_640', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_641', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- MEDIATHEQUE PHOTO-->
    <?php
    if ( is_page(array('mediatheque_photos')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_701', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_702', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- MEDIATHEQUE VIDEOS-->
    <?php
    if ( is_page(array('mediatheque_videos')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_761', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_762', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- A VOUS DE JOUER -->
    <?php
    if ( is_page(array('a_vous_de_jouer')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>AVEC NOMADPLAY</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>JOUER EN LIGNE AVEC LES MUSICIENS DE L'ORCHESTRE.</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ATUALITES-->
    <?php
    if ( is_page(array('actualites')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_909', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_908', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- FICHE ACTUALITE -->
    <?php 
    if ( is_singular (array( 'actualite' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <!-- DATE -->
                    <span class='accroche_cell_texte_gras margint_40 block'>
                        <?php echo mysql2date('l j F', get_post_meta($post->ID, 'metadata_903', true)); ?>
                    </span>
                </p>
            </div>
        </div> 
    <?php endif;?>

    <!-- MUR SOCIAL-->
    <?php
    if ( is_page(array('mur_social')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>INTERAGISSEZ AVEC</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>NOUS SUR LES RÉSEAUX SOCIAUX</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ELEVES ET ENSEIGNANTS -->
    <?php
    if ( is_page(array('eleves_enseignants')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_480', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_481', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- DOSSIERS PEDAGOGIQUES-->
    <?php
    if ( is_page(array('dossiers_pedagogiques')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>UN OUTIL PÉDAGOGIQUE</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>CLÉ EN MAIN À DESTINATION DES ÉLÈVES ET ENSEIGNANTS</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ACADEMIE-->
    <?php
    if ( is_page(array('academie')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_401', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_402', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ACTIONS CITOYENNES-->
    <?php
    if ( is_page(array('actions_citoyennes')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>APPORTER LA MUSIQUE</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>VIVANTE ET SUSCITER L'ÉMOTION AUPRÈS DE TOUS, PARTOUT</span>
                </p>
            </div>
        </div>
    <?php endif; ?>   


    <!-- ---------------- -->
    <!-- ILLUSTRATION -->
    <!-- ---------------- -->

    
    <?php
    // PAGE D'ACCUEIL
    if ( is_front_page() ) : 


        // Récupère les données saisies
        $diapo_texte1 = get_post_meta($post->ID, 'metadata_006_1', true); 
        $diapo_illustration1 = get_post_meta($post->ID, 'metadata_005_1', true);
        $diapo_url1 = get_post_meta($post->ID, 'metadata_007_1', true);
        $diapo_texte2 = get_post_meta($post->ID, 'metadata_006_2', true); 
        $diapo_illustration2 = get_post_meta($post->ID, 'metadata_005_2', true);
        $diapo_url2 = get_post_meta($post->ID, 'metadata_007_2', true);
        $diapo_texte3 = get_post_meta($post->ID, 'metadata_006_3', true); 
        $diapo_illustration3 = get_post_meta($post->ID, 'metadata_005_3', true);
        $diapo_url3 = get_post_meta($post->ID, 'metadata_007_3', true);
        $diapo_texte4 = get_post_meta($post->ID, 'metadata_006_4', true); 
        $diapo_illustration4 = get_post_meta($post->ID, 'metadata_005_4', true);
        $diapo_url4 = get_post_meta($post->ID, 'metadata_007_4', true);
        $diapo_texte5 = get_post_meta($post->ID, 'metadata_006_5', true); 
        $diapo_illustration5 = get_post_meta($post->ID, 'metadata_005_5', true);
        $diapo_url5 = get_post_meta($post->ID, 'metadata_007_5', true);
        $diapo_texte6 = get_post_meta($post->ID, 'metadata_006_6', true); 
        $diapo_illustration6 = get_post_meta($post->ID, 'metadata_005_6', true);
        $diapo_url6 = get_post_meta($post->ID, 'metadata_007_6', true);
        
        $compteur_diapo = 0;

        ?>
        <div class="grid">
            <div class="grid_area_11">
                <!-- SLIDE 1 -->
                <?php if (!empty($diapo_illustration1)) :
                    $compteur_diapo++;?>
                    <div id="slide_diapo_1" class='slide_active_diapo illustration_cell grid'>

                        <!-- ILLUSTRATION CLIQUABLE -->
                        <!-- Données saisies dans la page Accueil -->
                        <div class="grid_area_11">
                            <a class="ubuntu_bold tx_color_blanc fontsize_33" href="<?php echo $diapo_url1; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration1; ?>" alt="Illustration de la page"></a>
                        </div>

                        <!-- TEXTE SUR IMAGE -->
                        <div class="grid_area_11 alignself_center justifys_center">
                            <p class="ubuntu_bold tx_color_blanc fontsize_33"><?php echo $diapo_texte1; ?></p>
                        </div>            

                    </div>
                <?php endif; ?>

                <!-- SLIDE 2 -->
                <?php if (!empty($diapo_illustration2)) :
                    $compteur_diapo++;?>
                    <div id="slide_diapo_2" class='illustration_cell grid slide_hidden_diapo'>

                        <!-- ILLUSTRATION CLIQUABLE -->
                        <!-- Données saisies dans la page Accueil -->
                        <div class="grid_area_11">
                            <a class="ubuntu_bold tx_color_blanc fontsize_33" href="<?php echo $diapo_url2; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration2; ?>" alt="Illustration de la page"></a>
                        </div>

                        <!-- TEXTE SUR IMAGE -->
                        <div class="grid_area_11 alignself_center justifys_center">
                            <p class="ubuntu_bold tx_color_blanc fontsize_33"><?php echo $diapo_texte2; ?></p>
                        </div>
                        
                    </div>
                <?php endif; ?>

                <!-- SLIDE 3 -->
                <?php if (!empty($diapo_illustration3)) :
                    $compteur_diapo++;?>
                    <div id="slide_diapo_3" class='illustration_cell grid slide_hidden_diapo'>

                        <!-- ILLUSTRATION CLIQUABLE -->
                        <!-- Données saisies dans la page Accueil -->
                        <div class="grid_area_11">
                            <a class="ubuntu_bold tx_color_blanc fontsize_33" href="<?php echo $diapo_url3; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration3; ?>" alt="Illustration de la page"></a>
                        </div>

                        <!-- TEXTE SUR IMAGE -->
                        <div class="grid_area_11 alignself_center justifys_center">
                            <p class="ubuntu_bold tx_color_blanc fontsize_33"><?php echo $diapo_texte3; ?></p>
                        </div>

                    </div>
                <?php endif; ?>


                <!-- SLIDE 4 -->
                <?php if (!empty($diapo_illustration4)) :
                    $compteur_diapo++;?>
                    <div id="slide_diapo_4" class='illustration_cell grid slide_hidden_diapo'>

                        <!-- ILLUSTRATION CLIQUABLE -->
                        <!-- Données saisies dans la page Accueil -->
                        <div class="grid_area_11">
                            <a class="ubuntu_bold tx_color_blanc fontsize_33" href="<?php echo $diapo_url4; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration4; ?>" alt="Illustration de la page"></a>
                        </div>

                        <!-- TEXTE SUR IMAGE -->
                        <div class="grid_area_11 alignself_center justifys_center">
                            <p class="ubuntu_bold tx_color_blanc fontsize_33"><?php echo $diapo_texte4; ?></p>
                        </div>

                    </div>
                <?php endif; ?>


                <!-- SLIDE 5 -->
                <?php if (!empty($diapo_illustration5)) :
                    $compteur_diapo++;?>
                    <div id="slide_diapo_5" class='illustration_cell grid slide_hidden_diapo'>

                        <!-- ILLUSTRATION CLIQUABLE -->
                        <!-- Données saisies dans la page Accueil -->
                        <div class="grid_area_11">
                            <a class="ubuntu_bold tx_color_blanc fontsize_33" href="<?php echo $diapo_url5; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration5; ?>" alt="Illustration de la page"></a>
                        </div>

                        <!-- TEXTE SUR IMAGE -->
                        <div class="grid_area_11 alignself_center justifys_center">
                            <p class="ubuntu_bold tx_color_blanc fontsize_33"><?php echo $diapo_texte5; ?></p>
                        </div>

                    </div>
                <?php endif; ?>


                <!-- SLIDE 6 -->
                <?php if (!empty($diapo_illustration6)) :
                    $compteur_diapo++;?>
                    <div id="slide_diapo_6" class='illustration_cell grid slide_hidden_diapo'>

                        <!-- ILLUSTRATION CLIQUABLE -->
                        <!-- Données saisies dans la page Accueil -->
                        <div class="grid_area_11">
                            <a class="ubuntu_bold tx_color_blanc fontsize_33" href="<?php echo $diapo_url6; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration6; ?>" alt="Illustration de la page"></a>
                        </div>

                        <!-- TEXTE SUR IMAGE -->
                        <div class="grid_area_11 alignself_center justifys_center">
                            <p class="ubuntu_bold tx_color_blanc fontsize_33"><?php echo $diapo_texte6; ?></p>
                        </div>    

                    </div>
                <?php endif; ?>
            </div>


            <!-- FLÈCHE -->
            <div class="grid_area_11 grid alignself_center">
                <div id="precedent" class="grid_area_11 paddingl_15 marginb_20_mobilexs" onclick="ChangeSlidediapo('gauche',<?php echo $compteur_diapo ?>)"><i class="fas fa-arrow-left fontsize_25 tx_color_blanc"></i></div>
                <div id="suivant" class="grid_area_11 justify_end paddingr_15 margint_20_mobilexs" onclick="ChangeSlidediapo('droite',<?php echo $compteur_diapo ?>)"><i class="fas fa-arrow-right fontsize_25 tx_color_blanc"></i></div>
            </div>  
        </div>
        <!-- JAVASCRIPT DU SLIDER PAGE ACCUEIL -->
        <script>

            // CHANGEMENT DE DIAPO AUTOMATIQUEMENT
            
            console.log("avant setInterval");
            function changeDiapoauto() {
                // Compteur de diapo à 1 puisqu'on sera dans la diapo 1
                nIntervId = setInterval(ChangeSlidediapoauto, 5000);
            }
            console.log("après setInterval");

            function ChangeSlidediapo(sens_diapo,compteur_diapo) {
                
                // STOPPER LE DÉFILLEMENT AUTO QUAND ON CLIQUE SUR UNE FLÈCHE
                clearInterval(nIntervId);
                console.log("On a clearInterval",nIntervId );

                // Le id de la slide
                slideid_courante_diapo = 0;
                console.log("On est dans la fonction ChangeSlidediapo");
                console.log("slideid_courante_diapo = ",slideid_courante_diapo );
                
                // Le numéro de la slide
                id_slide_diapo = 0;
                console.log("id_slide_diapo =",id_slide_diapo );
                // Si clic sur flèche de DROITE
                if (sens_diapo === 'droite') {
                    console.log("On est dans le sens = ",sens_diapo);
                    // CACHER LA SLIDE COURANTE

                    // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
                    slideid_courante_diapo = document.getElementsByClassName('slide_active_diapo')[0].id;
                    console.log("Récupérer l'ID de la slide courante = ",slideid_courante_diapo);
                    //changer le classe active par une classe qui cache son contenu
                    document.getElementById(slideid_courante_diapo).classList.replace("slide_active_diapo", "slide_hidden_diapo");
                    console.log("on met la classe slide_hidden_diapo à ",slideid_courante_diapo);
                    // AFFICHER LA SLIDE SUIVANTE

                    // Récupérer le numéro de slide dans le ID "slide_x"
                    id_slide_diapo = slideid_courante_diapo.substr(12,1);
                    console.log("écupérer le numéro de slide dans le ID ",id_slide_diapo);

                    // Si on clique plus que le nombre de slide existante on revient à la slide 1
                    console.log("compteur_diapo = ",compteur_diapo);

                    if (id_slide_diapo >= compteur_diapo) {
                        console.log("IF id_slide_diapo >= 6 = ",id_slide_diapo);
                        id_slide_diapo = 0;
                        compteur_diapo = 0;

                    }

                    // on incrémente le numéro de slide pour afficher la slide suivante
                    id_slide_diapo++;

                    id_slide_diapo = 'slide_diapo_' + id_slide_diapo;
                    

                    document.getElementById(id_slide_diapo).classList.replace("slide_hidden_diapo", "slide_active_diapo");

                }

                // Si clic sur flèche de GAUCHE
                if (sens_diapo === 'gauche') {
                    
                    console.log("On est dans le sens = ",sens_diapo);

                    // CACHER LA SLIDE COURANTE

                    // Récupérer l'ID de la slide courante via sa classe qui est forcément l'active
                    slideid_courante_diapo = document.getElementsByClassName('slide_active_diapo')[0].id;

                    //chnager le classe active par une classe qui cache son contenu
                    document.getElementById(slideid_courante_diapo).classList.replace("slide_active_diapo", "slide_hidden_diapo");

                    // AFFICHER LA SLIDE SUIVANTE

                    // Récupérer le nuémro de slide dans le ID "slide_x"
                    id_slide_diapo = slideid_courante_diapo.substr(12,1);


                    // on incrémente le numéro de slide pour afficher la slide suivante
                    id_slide_diapo--;

                    if (id_slide_diapo === 0) {
                        id_slide_diapo = compteur_diapo;

                    }

                    id_slide_diapo = 'slide_diapo_' + id_slide_diapo;

                    document.getElementById(id_slide_diapo).classList.replace("slide_hidden_diapo", "slide_active_diapo");

                }
                
            }

            function ChangeSlidediapoauto() {

                // Cette fonction servira à 
                // - récupérer le numéro de slide en cours
                // - revenir à la première slide si on est à la fin
                // - cacher la slide en cours
                // - afficher la slide suivante

                console.log("On est dans la fonction ChangeSlidediapoauto");

                // QUELLE SLIDE EST AFFICHÉE
                // La slide en cours est la slide qui a la classe 'slide_active_diapo'
                // Avec la classe 'slide_active_diapo', on récupère le id du div de la slide
                // id du div
                slideid_courante_diapo = document.getElementsByClassName('slide_active_diapo')[0].id;
                console.log("ID de la slide courante = ",slideid_courante_diapo);
                // numéro de slide correspondante
                // Récupérer le numéro de slide de ID "slide_diapo_x"
                id_slide_diapo = slideid_courante_diapo.substr(12,1);
                console.log("numéro de slide dans le ID = ",id_slide_diapo);

                // CACHER LA SLIDE COURANTE
                // changer le classe active par une classe qui cache son contenu à partir de l'ID
                document.getElementById(slideid_courante_diapo).classList.replace("slide_active_diapo", "slide_hidden_diapo");
                console.log("on met la classe slide_hidden_diapo à ",slideid_courante_diapo);
 
                // Si on est sur la dernière slide on revient au début
                // Si on clique plus que le nombre de slide existante on revient à la slide 1
                console.log("id_slide_diapo = ",id_slide_diapo);
                if (id_slide_diapo == 6) {
                    console.log("if (id_slide_diapo = 6) ");
                    id_slide_diapo = 0;
                }

                // AFFICHER LA SLIDE SUIVANTE
                // on incrémente le numéro de slide pour afficher la slide suivante
                id_slide_diapo++;
                id_slide_diapo = 'slide_diapo_' + id_slide_diapo;
                console.log("id_slide_diapo que l'on va afficher = ",id_slide_diapo);
                document.getElementById(id_slide_diapo).classList.replace("slide_hidden_diapo", "slide_active_diapo");
                
            }

        </script>



        <!-- LES AUTRES PAGES -->
        <?php else : ?>
            
            <!-- ILLUSTRATION -->
            <div class='illustration_cell'>
                <img class='img_ajust' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration de la page">
            </div>


    <?php endif; ?>


    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX -->
    <!-- ---------------- -->

    <nav class="nav_res_soc_cell">
        <ul class='tx_<?php couleur() ?>'>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">Instajeunes</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a  target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a></li>
        </ul>
    </nav>


</section>  

<!-- ---------------- -->
<!-- MODE MOBILE -->
<!-- ---------------- -->

<section class="banner_top_mobile margin_section_botton">

    <!-- ---------------- -->
    <!-- TITRE DE LA PAGE -->
    <!-- ---------------- -->
    <div class='tx_color_noir_fonce'>
        <div>
            <h1 class='titre_page_container'>
                <!-- CONTENU DU TITRE DIFFERENTE SELON PAGE -->
                <span class='titre_gras'><?php titre_gras($post) ?></span>
                <br>
                <span class='titre_leger'><?php titre_leger($post) ?></span>
            </h1>
        </div>

    </div>

    <!-- GRID -->
    <div class="grid_2col12_3row_mobile">

        <!-- BANDE DE COULEUR -->

        <div class="case_couleur_12 bg_<?php couleur() ?>">
        </div>

        <!-- ---------------- -->
        <!-- ILLUSTRATION -->
        <!-- ---------------- -->

        <div class='illustration_cell'>
            <img class='img_ajust' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration">
        </div>

    </div>

    <!-- ---------------- -->
    <!-- ACCROCHE -->
    <!-- ---------------- -->

    <!-- CONTENU DE L'ACCROCHE DIFFERENT SELON PAGE -->

    <!-- ACCUEIL -->
    <?php
    if ( is_front_page() ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <a href="<?php echo get_post_meta($post->ID, 'metadata_015', true); ?>">
                        <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_003', true); ?></span>
                        <br>
                        <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_004', true); ?></span>
                    </a>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- AGENDA -->
    <?php 
    if ( is_page(array('agenda')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_110', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_111', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- CONCERTS JEUNE PUBLIC -->
    <?php 
    if ( is_page(array('concerts-jeunes-publics')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_230', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_231', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- SAISON -->
    <?php 
    if ( is_page(array('saison')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_100', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_101', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- FICHE DU CONCERT -->
    <?php 
    if ( is_singular (array( 'concert' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <!-- GENRE -->
                    <span class='accroche_cell_texte_gras block'>
                        <?php $concert_genre =  wp_get_post_terms($post->ID, 'genre', array("fields" => "names"));
                        if (!empty($concert_genre)) {echo $concert_genre[0];}?>
                    </span>
                    <br>
                    <!-- SOUS-TITRE -->
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_201', true); ?></span>
                </p>
            </div>
        </div> 
    <?php endif;?>

    <!-- ARTISTES INVITES -->
    <?php
    if ( is_page(array('artistes-invites')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                        <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_140', true); ?></span>
                        <br>
                        <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_141', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- FICHE DE L'ARTISTE INVITE -->
    <?php 
    if ( is_singular (array( 'artiste_invite' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_120', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_121', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>


    <!-- COLLABORATIONS -->
    <?php
    if ( is_page(array('collaborations')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_160', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_161', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>
    
    <!-- FICHE DE L'ARTISTE ORCHESTRE -->
    <?php 
    if ( is_singular (array( 'orchestre' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center  bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_601', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_602', true); ?></span>
                </p>
            </div>
        </div> 
    <?php endif;?>

    <!-- QUI SOMMES-NOUS ? -->
    <?php
    if ( is_page(array('qui-sommes-nous')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                        <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_650', true); ?></span>
                        <br>
                        <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_651', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- HISTOIRE -->
    <?php
    if ( is_page(array('notre-histoire')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_630', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_631', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS ENTREPRISE -->
    <?php
    if ( is_page(array('soutenez-nous-entreprise')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_670', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_671', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>
    
    <!-- SOUTENEZ-NOUS PARTICULIER -->
    <?php
    if ( is_page(array('soutenez-nous-particulier')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_680', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_681', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS PICARDISSIMO -->
    <?php
    if ( is_page(array('soutenez-nous-picardissimo')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_690', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_691', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- RECRUTEMENT -->
    <?php
    if ( is_page(array('recrutements')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_660', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_661', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- PARTENAIRES-->
    <?php
    if ( is_page(array('partenaires')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_640', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_641', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- MEDIATHEQUE PHOTO-->
    <?php
    if ( is_page(array('mediatheque_photos')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_701', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_702', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- MEDIATHEQUE VIDEOS-->
    <?php
    if ( is_page(array('mediatheque_videos')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_761', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_762', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- A VOUS DE JOUER -->
    <?php
    if ( is_page(array('a_vous_de_jouer')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>AVEC NOMADPLAY</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>JOUER EN LIGNE AVEC LES MUSICIENS DE L'ORCHESTRE.</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ATUALITES-->
    <?php
    if ( is_page(array('actualites')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_909', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_908', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- FICHE ACTUALITE -->
    <?php 
    if ( is_singular (array( 'actualite' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <!-- DATE -->
                    <span class='accroche_cell_texte_gras block'>
                        <?php echo mysql2date('l j F', get_post_meta($post->ID, 'metadata_903', true)); ?>
                    </span>
                </p>
            </div>
        </div> 
    <?php endif;?>

    <!-- MUR SOCIAL-->
    <?php
    if ( is_page(array('mur_social')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>INTERAGISSEZ AVEC</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>NOUS SUR LES RÉSEAUX SOCIAUX</span>
                </p>
            </div>
        </div>
    <?php endif; ?>
    
    <!-- ELEVES ET ENSEIGNANTS -->
    <?php
    if ( is_page(array('eleves_enseignants')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_480', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_481', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- DOSSIERS PEDAGOGIQUES-->
    <?php
    if ( is_page(array('dossiers_pedagogiques')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>UN OUTIL PÉDAGOGIQUE</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>CLÉ EN MAIN À DESTINATION DES ÉLÈVES ET ENSEIGNANTS</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ACADEMIE-->
    <?php
    if ( is_page(array('academie')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_401', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_402', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ACTIONS CITOYENNES-->
    <?php
    if ( is_page(array('actions_citoyennes')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>APPORTER LA MUSIQUE</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>VIVANTE ET SUSCITER L'ÉMOTION AUPRÈS DE TOUS, PARTOUT</span>
                </p>
            </div>
        </div>
    <?php endif; ?>   
    
    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX -->
    <!-- ---------------- -->
    <div class="margint_30">
        <nav class="nav_res_soc_cell grid_1col1_1row justify_center">
            <ul class='tx_<?php couleur() ?>'>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">Instajeunes</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a  target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a></li>
            </ul>
        </nav>
    </div>


</section>
