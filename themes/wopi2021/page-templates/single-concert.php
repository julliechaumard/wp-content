<?php
/*
Template Name: single-concert
Template Post Type: concert
*/
?>

<?php
 get_header();
 get_template_part('template-parts/header','page');
?>

<main>
    
    <!-- --------------------------------- -->
    <!-- LES INFORMATIONS DU CONCERT -->
    <!-- --------------------------------- -->

    <article class="grid_2col12_5row tx_color_noir_fonce margin_section_botton">
        
        <!-- DISTRIBUTION -->
        <section class="distribution_concert_cell margin_section_botton">
            <!-- Titre -->
            <div>
                <h2 class='titre_chapitre_container marginb_20'>
                    <span class='titre_gras'>DISTRIBUTION</span>
                    <br>
                    <span class='titre_leger'>DU CONCERT</span>
                </h2>
            </div>

            <!-- Les artistes -->
            <div class='liste_art_comp'>
                <?php for ($i = 1; $i <= 30; $i++) { ?>
                    <?php if(!empty(get_post_meta($post->ID, 'metadata_186_'.$i, true))) { ?>
                        <div class="artiste paddingb_5">
                            <div class="paddingr_8 ubuntu_bold">
                                <?php 
                                    if( !empty(get_page_by_title(get_post_meta($post->ID, 'metadata_186_'.$i, true),OBJECT,array('orchestre','artiste_invite'))) ) :
                                        $distribution_lien = get_page_by_title(get_post_meta($post->ID, 'metadata_186_'.$i, true),OBJECT,array('orchestre','artiste_invite'));
                                        $distribution_lien = get_permalink($distribution_lien->ID);?>
                                        <a href="<?php echo $distribution_lien ?>"><?php echo get_post_meta($post->ID, 'metadata_186_'.$i, true); ?></a>
                                        <?php else :
                                            echo get_post_meta($post->ID, 'metadata_186_'.$i, true);
                                        endif;
                                ?>
                            </div>
                            <div class="ubuntu_fin">
                                <?php echo get_post_meta($post->ID, 'metadata_187_'.$i, true); ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>


        </section>

        <!-- DATES -->
        <section class="dates_concert_cell margin_section_botton_mobile">
             <!-- Titre -->
            <div>
                <h2 class='titre_chapitre_container marginb_20'>
                    <span class='titre_gras'>DATES</span>
                    <br>
                    <span class='titre_leger'>ET LIEUX</span>
                </h2>
            </div>

            <!-- Les dates -->
            <div class="liste_date ubuntu_leger">

                <!-- BOUCLE SUR LES 10 DATES -->
                <?php for ($i = 1; $i <= 10; $i++) {

                    // LOOP pour aller chercher la salle et ses informations
                    if(!empty(get_post_meta($post->ID, 'metadata_182_'.$i, true))) {
                        $salle = get_post_meta($post->ID, 'metadata_182_'.$i, true);
                        $args_salle = array('post_type' => 'salle','name' => $salle,'posts_per_page' => -1);
                        $loop_salle = new WP_Query( $args_salle );
                        if ($loop_salle->have_posts()) {

                            while ($loop_salle->have_posts()) {
                                $loop_salle->the_post();

                                $ville = get_post_meta($post->ID, 'metadata_272', true);
                                $nom_salle = get_post_meta($post->ID, 'metadata_270', true);
                                $url_salle = get_post_meta($post->ID, 'metadata_275', true);
                                $adresse_salle = get_post_meta($post->ID, 'metadata_271', true);
                                $telephone_salle = get_post_meta($post->ID, 'metadata_273', true);
                                $mail_salle = get_post_meta($post->ID, 'metadata_274', true);
                            }
                        } wp_reset_query();?>
                    
                        <div class="date_item">
                            <!-- LA DATE -->
                                <p>
                                    ??? <span class="jour"><?php echo mysql2date('l j F', get_post_meta($post->ID, 'metadata_180_'.$i, true)); ?></span>
                                    <span class="heure"><?php echo get_post_meta($post->ID, 'metadata_181_'.$i, true); ?></span>
                                    <span class="ville ubuntu_bold"><?php echo $ville;?></span>
                                    <span class="icone" onclick="document.querySelector('.salle<?php echo $i; ?>').classList.toggle('ouvrir')"><img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/icone_ticket.svg" alt="icone billeterie ?? cliquer"></span>
                                </p>
        
                            <!-- CONCERT ANNULE / REPORTE -->
                            <?php if(get_post_meta($post->ID, 'metadata_183_'.$i, true)=="annul") { ?>
                                <p class="alert ubuntu_moyen paddingt_5">CONCERT ANNUL??</p>
                            <?php };?>
                            <?php if(get_post_meta($post->ID, 'metadata_184_'.$i, true)=="report") { ?>
                                <p class="alert ubuntu_moyen paddingt_5">CONCERT REPORT??</p>
                            <?php };?>

                            <!-- INFOS SALLE -->
                            <div class='infos_salle salle<?php echo $i; ?>'>
                                <p class="marginb_6"><span class="nom_salle_content ubuntu_moyen"><?php echo $nom_salle;?></p>
                                <?php if(!empty($url_salle)) { ?>
                                    <p class="marginb_6"><button class="button_petit button_saison"><a target="_blank" href="<?php echo $url_salle;?>">SITE INTERNET</a></button></p>
                                <?php } ?>
                                <?php if(!empty($adresse_salle)) { ?>
                                    <p class="adresse_salle"><?php echo $adresse_salle;?></p>
                                <?php } ?>
                                <?php if(!empty($telephone_salle) or !empty($mail_salle)) { ?>
                                    <p class="contact_salle"><span class='telephone_salle'><?php echo $telephone_salle;?></span><span class='mail_salle'><?php echo $mail_salle;?></span></p>
                                <?php } ?>
                                <!-- TARIFS -->
                                <?php if(!empty(get_post_meta($post->ID, 'metadata_185_'.$i.'_1', true))) { ?>
                                    <p class='souligne'>Tarifs :</p>
                                    <?php for ($j = 1; $j <= 5; $j++) { 
                                        if(!empty(get_post_meta($post->ID, 'metadata_185_'.$i.'_'.$j, true))) {?>
                                            <p class="tarif_salle">- <?php echo get_post_meta($post->ID, 'metadata_185_'.$i.'_'.$j, true);?></p>
                                    <?php }}};?>
                            </div>
                        </div>
                    
                        <!-- RESETER LES VARIABLES -->
                        <?php 
                        unset($salle);
                        unset($ville);
                        unset($nom_salle);
                        unset($url_salle);
                        unset($adresse_salle);
                        unset($telephone_salle);
                        unset($mail_salle);
                    
                    }
                };?>
            </div>
        </section>

        <!-- PROGRAMME ET DESCRIPTION -->
        <section class="programme_concert_cell margin_section_botton">
             <!-- Titre -->
            <div>
                <h2 class='titre_chapitre_container marginb_20'>
                    <span class='titre_gras'>PROGRAMME</span>
                    <br>
                    <span class='titre_leger'>DU CONCERT</span>
                </h2>
            </div>

            <!-- Les pieces -->
            <div class='liste_art_comp marginb_20'>
                <?php for ($i = 1; $i <= 20; $i++) { ?>
                    <?php if(!empty(get_post_meta($post->ID, 'metadata_194_'.$i, true))) { ?>
                        <div class="artiste paddingb_5">
                            <div class="paddingr_8 ubuntu_bold">
                                <?php echo get_post_meta($post->ID, 'metadata_194_'.$i, true); ?>
                            </div>
                            <div class="ubuntu_leger">
                                <?php echo get_post_meta($post->ID, 'metadata_195_'.$i, true); ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="marginb_20">
                <?php if(!empty(get_post_meta($post->ID, 'metadata_202', true))) { ?>
                    <p class='ubuntu_leger'><span class='duree_concert_titre'>Dur??e : </span><?php echo get_post_meta($post->ID, 'metadata_202', true); ?></p>
                <?php } ?>
            </div>

            <!-- La description -->
            <div class='content_wp'>
                <?php while(have_posts())  : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </section>
        
        <!-- PARTENAIRES-->
        <section class="partenaires_concert_cell margin_section_botton_mobile">
            <div class="titre_paragraphe titre_paragraphe_size">PARTENAIRES</div>
            <div class="partenaires_concert_list">

                <!-- Partenaire avec mention -->
                <!-- LOOP pour aller chercher le partenaire avec mention -->
                <?php
                if(!empty(get_post_meta($post->ID, 'metadata_188', true))) {
                    $partenaire_mention = get_post_meta($post->ID, 'metadata_188', true);

                    $args_partenaire_mention = array('post_type' => 'partenaire','name' => $partenaire_mention,'posts_per_page' => 999,);

                    $loop_partenaire_mention = new WP_Query( $args_partenaire_mention );
                    if ($loop_partenaire_mention->have_posts()) {
                        while ($loop_partenaire_mention->have_posts()) {
                            $loop_partenaire_mention->the_post();?>

                            <!-- R??cup??rer logo et mention -->
                            <div class="partenaires_concert_item_mention grid_2colmax_1row align_center">
                                <div>
                                    <!-- LOGO avec lien vers le site internet du partenaire -->
                                    <?php if (!empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                        <div class="texte_center">
                                            <img class="img_width" src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Logo du partenaire">
                                            <a class='ubuntu_fin fontsize_10' href="<?php get_post_meta($post->ID, 'metadata_251', true) ?>" target="_blank" >Site internet</a>
                                        </div>
                                    <?php endif; ?>
                                    <!-- LOGO sans lien vers le site internet du partenaire -->
                                    <?php if (empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                        <div>
                                            <img class="img_width" src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Logo du partenaire">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <p><?php echo get_post_meta($post->ID, 'metadata_253', true); ?></p>
                                </div>
                            </div>

                        <?php };
                    };
                }; wp_reset_query(); ?>

                <!-- LOGOS des Partenaires -->
                <div class="partenaires_concert_logo_list grid_autocolmax_autorow">

                    <!-- Boucle pour les 15 partenaires -->
                    <?php for ($i = 1; $i <= 15; $i++) {

                        if(!empty(get_post_meta($post->ID, 'metadata_190_'.$i, true))) {
                            $partenaire = get_post_meta($post->ID, 'metadata_190_'.$i, true);
                            $args_partenaire = array('post_type' => 'partenaire','name' => $partenaire,'posts_per_page' => 999,);
                            $loop_partenaire = new WP_Query( $args_partenaire );
                            if ($loop_partenaire->have_posts()) {
                                while ($loop_partenaire->have_posts()) {
                                    $loop_partenaire->the_post();?>

                                    <!-- LOGO avec lien vers le site internet du partenaire -->
                                    <?php if (!empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                        <div class="texte_center">
                                            <img class="img_width" src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Logo du partenaire">
                                            <a class='ubuntu_fin fontsize_10' href="<?php echo get_post_meta($post->ID, 'metadata_251', true) ?>" target="_blank" >Site internet</a>
                                        </div>
                                    <?php endif; ?>
                                    <!-- LOGO sans lien vers le site internet du partenaire -->
                                    <?php if (empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                        <div>
                                            <img class="img_width" src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Logo du partenaire">
                                        </div>
                                    <?php endif; ?>

                                <?php };
                            };wp_reset_query(); 
                        };
                    }; ?>
                    </div>

            </div>
        </section>


    </article>

    <!-- --------------------------------- -->
    <!-- PROGRAMME DE SALLE -->
    <!-- --------------------------------- -->
    <?php if (!empty(get_post_meta($post->ID, 'metadata_193', true))): ?>
        <section class='plainbox_ss_padding grid align_center justify_center bg_color_noir_moyen margin_section_botton'>
            <div style="text-align:center;">
                <div style="margin:8px 0px 4px;">
                    <div>
                        <h2 class='titre_chapitre_container marginb_20 tx_color_blanc'>
                            <span class='ubuntu_fin'>T??L??CHARGER</span>
                            <br>
                            <span class='ubuntu_moyen'>LE PROGRAMME</span>
                        </h2>
                    </div>
                </div>
                
                <p class="margint_20"><button class="button_petit button_blanc"><a download target="_blank" href="<?php echo get_post_meta($post->ID, 'metadata_193', true); ?>">T??L??CHARGER PDF</a></button></p>
                                                
            </div>
        </section>
    <?php endif;?>



    <!-- --------------------------------- -->
    <!-- LES PHOTOS ET VIDEOS -->
    <!-- --------------------------------- -->

    <section class="margin_section_botton">
        <!-- TITRE -->
        <div>
            <p class='titre_chapitre_container marginb_20'>
                <span class='titre_gras'>PHOTOS & VID??OS</span>
                <br>
                <span class='titre_leger'>DU CONCERT</span>
            </p>
        </div>

        <!-- VIDEOS -->
        <div class="photos_container grid_3col grid_column_gap10 grid_row_gap10 align_center">
            <!-- Boucle pour les 3 VIDEOS -->
            <?php for ($i = 1; $i <= 3; $i++) {?>
                <?php if(!empty(get_post_meta($post->ID, 'metadata_191_'.$i, true))) { ?>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'metadata_191_'.$i, true); ?>" allowfullscreen></iframe>
                    </div>
                <?php }; ?>
            <?php }; ?>
            <div></div>
        </div>

        <!-- PHOTOS -->
        <div class="photos_container grid_photos">

            <!-- Boucle pour les 10 PHOTOS -->
            <?php for ($i = 1; $i <= 10; $i++) {?>
                <?php if(!empty(get_post_meta($post->ID, 'metadata_192_'.$i, true))) { ?>
                    <div>
                        <img class="img_ajust" src="<?php echo get_post_meta($post->ID, 'metadata_192_'.$i, true); ?>" alt="Photo du concert">
                    </div>
                <?php }; ?>
            <?php }; ?>
            <div></div>

        </div>

    </section>

    <!-- ----------------------- -->
    <!-- REVUE DE PRESSE  -->
    <!-- ----------------------- -->
    <?php  get_template_part('template-parts/revuepresse_slider'); ?>

</main>

<?php
 get_footer();
?>
