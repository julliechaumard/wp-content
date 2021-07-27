<!-- ---------------- -->
<!-- BANNER ILLUSTRATION -->
<!-- banner_top_illustration_desk.php -->
<!-- ---------------- -->

<!-- ---------------- -->
<!-- MODE DESKTOP -->
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
                            <a href="<?php echo $diapo_url1; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration1; ?>" alt="Illustration de la page"></a>
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
                            <a href="<?php echo $diapo_url2; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration2; ?>" alt="Illustration de la page"></a>
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
                            <a href="<?php echo $diapo_url3; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration3; ?>" alt="Illustration de la page"></a>
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
                            <a href="<?php echo $diapo_url4; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration4; ?>" alt="Illustration de la page"></a>
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
                            <a href="<?php echo $diapo_url5; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration5; ?>" alt="Illustration de la page"></a>
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
                            <a href="<?php echo $diapo_url6; ?>"><img class='img_ajust' src="<?php echo $diapo_illustration6; ?>" alt="Illustration de la page"></a>
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
                <!-- data-compteur = dataset pour récupérer le compteur de slide dans le JS pour la fonction slide automatique -->
                <div id="precedent" data-compteur="<?php echo $compteur_diapo; ?>" class="grid_area_11 justifys_start paddingl_15 marginb_20_mobilexs" onclick="ChangeSlidediapo('gauche',<?php echo $compteur_diapo ?>)">
                    <i class="fas fa-arrow-left fontsize_25 tx_color_blanc"></i></div>
                <div id="suivant" class="grid_area_11 justify_end paddingr_15 margint_20_mobilexs" onclick="ChangeSlidediapo('droite',<?php echo $compteur_diapo ?>)"><i class="fas fa-arrow-right fontsize_25 tx_color_blanc"></i></div>
            </div>  
        </div>





        <!-- LES AUTRES PAGES -->
        <?php else : ?>
            
            <!-- ILLUSTRATION -->
            <div class='illustration_cell'>
                <img class='img_ajust' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration de la page">
            </div>


    <?php endif; ?>