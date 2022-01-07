<!-- ---------------- -->
<!-- BANNER ILLUSTRATION -->
<!-- banner_top_illustration_desk.php -->
<!-- ---------------- -->

<!-- ---------------- -->
<!-- MODE DESKTOP -->
<!-- ---------------- -->


<!-- POUR PAGE ACCUEIL => UN CARROUSSEL -->
<!-- POUR LES AUTRES PAGES => UNE COMMANDE UNIQUE POUR TOUTES LES PAGES -->


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

            <div class="">
                <video class="img_ajust_liste" controls>
                    <source src="<?php bloginfo('template_directory');?>/dist/assets/videos/la_contrebasse_virtuose_hd1080p.mp4" type="video/mp4">
                    <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
                        Voici <a href="myVideo.mp4">un lien pour télécharger la vidéo</a>.</p>
                </video>
            </div>

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