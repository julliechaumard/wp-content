<?php
/*
Template Name: page_eleves_enseignants
*/
?>
<?php

get_header();
get_template_part('template-parts/header','page');

?>
<main>

<article>

    <!-- ----------------------- -->
    <!-- DYNAMIQUE RESEAUX  -->
    <!-- ----------------------- -->
    <section class="margint_90 margin_section_botton">
        <div class="grid_2col12">
            <!-- INFORMATION -->
            <!-- LOOP POUR RECUPERER LE CONTENU WP-CONTENT DU POST ACTION CULTURELLE "LA RENTREE EN MUSIQUE" -->
            <?php 
            $args_rentree = array(
                'post_type' => 'cultureaction',
                'posts_per_page' => 1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'action_culturelle',
                        'field'    => 'slug',
                        'terms'    => 'dynamique_reseaux'),
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2021-2022'))),
            );
            $loop_rentree = new WP_Query( $args_rentree );
            if ($loop_rentree->have_posts()) :
                while ($loop_rentree->have_posts()) :
                    $loop_rentree->the_post();?>

                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                        <div class="content_wp">
                            <?php the_content(); ?>
                        </div>
                    </div>
                
                <?php endwhile; 
            endif; 
            wp_reset_query(); ?>

            <!-- TITRE -->
            <div class="grid paddingr_30 marginb_20_mobile">
                <div class="grid">
                    <!-- TITRE-->
                    <div class="">
                        <h2 class='titre_card_container_grand'>
                            <span class='titre_leger'>DYNAMIQUE RÉSEAUX</span>
                            <br>
                            <span class='titre_gras'>POUR L'ACTION CULTURELLE</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ----------------------- -->
    <!-- ENCART DOSSIER PEDAGOGIQUE  -->
    <!-- ----------------------- -->

    <section class="margint_90 margin_section_botton">


        <div class="grid_2col12">
            <!-- ILLUSTRATION -->
            <div class="concert_card grid grid_area_21_desk bg_color_culture_actions paddingt_20 paddingb_20">
                <img class="height_mob_200 height_200 justifys_center" src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icone_dossier_grand_1.png" alt="Icone dossier pédagogique">
            </div>
        
            <!-- INFORMATIONS -->
            <div class="grid paddingr_30 paddingb_10 margint_20_mobile">
                <div>
                    <!-- TITRE-->
                    <div class="">
                        <h2 class='titre_card_container_grand'>
                            <span class='titre_leger'>DOSSIERS</span>
                            <br>
                            <span class='titre_gras'>PÉDAGOGIQUES</span>
                        </h2>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class='liste_art_comp paddingt_12 marginr_20'>
                        <!-- DESCRIPTION -->
                            <div class="artiste">
                                <div class="ubuntu_fin">
                                    Retrouvez tous les dossiers pédagogiques préparés par le professeur référant du service éducatif de l'académie d'Amiens.
                                </div>
                            </div>
                    </div>
                </div>


                <!-- EN SAVOIR PLUS -->
                <div class="fleche fleche_cultureactions alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_culture_actions"><a href="<?php echo get_permalink(get_page_by_title('Dossiers_pedagogiques')) ?>">ACCÉDER AUX DOSSIERS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_jaune.png" alt=""></a></div>
            </div>
        </div>

    </section>

    <!-- ----------------------- -->
    <!-- LA RENTREE EN MUSIQUE  -->
    <!-- ----------------------- -->
    <section class="margint_90 margin_section_botton">
        <div class="grid_2col12">
            <!-- INFORMATION -->
            <!-- LOOP POUR RECUPERER LE CONTENU WP-CONTENT DU POST ACTION CULTURELLE "LA RENTREE EN MUSIQUE" -->
            <?php 
            $args_rentree = array(
                'post_type' => 'cultureaction',
                'posts_per_page' => 1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'action_culturelle',
                        'field'    => 'slug',
                        'terms'    => 'rentree'),
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2021-2022'))),
            );
            $loop_rentree = new WP_Query( $args_rentree );
            if ($loop_rentree->have_posts()) :
                while ($loop_rentree->have_posts()) :
                    $loop_rentree->the_post();?>

                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                        <div class="content_wp">
                            <?php the_content(); ?>
                        </div>
                    </div>
                
                <?php endwhile; 
            endif; 
            wp_reset_query(); ?>

            <!-- TITRE -->
            <div class="grid paddingr_30 marginb_20_mobile">
                <div class="grid">
                    <!-- TITRE-->
                    <div class="">
                        <h2 class='titre_card_container_grand'>
                            <span class='titre_leger'>LA RENTRÉE</span>
                            <br>
                            <span class='titre_gras'>EN MUSIQUE</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- LE CONCERT "LA RENTREE EN MUSIQUE -->
        <div class="margint_70 margin_section_botton">

            <!-- TITRE PROCHAIN CONCERT -->
            <div>
                <p class="texte_right nopagemarge_mob ubuntu_moyen tx_color_gris_clair">RENTRÉE EN MUSIQUE</p>                        
            </div>

            <!-- LOOP CONCERT accueil_prochain_concert -->
            <?php 
            $args_prochain_concert = array(
                'post_type' => 'concert',
                'posts_per_page' => 1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2020-2021', '2021-2022')),
                    array(
                        'taxonomy' => 'action_culturelle',
                        'field'    => 'slug',
                        'terms'    => 'rentree'))

                );
            $loop_prochain_concert = new WP_Query( $args_prochain_concert );
            if ($loop_prochain_concert->have_posts()) :
                while ($loop_prochain_concert->have_posts()) :
                    $loop_prochain_concert->the_post();
                    ?>

                    <!-- ILLUSTRATION -->
                    <div class="grid_2col12">
                        <div class="concert_card nopagemarge_mob encoche_one_card grid_2col20px1fr grid_area_21_desk">

                            <!-- ILLUSTRATION -->
                            <img class='img_ajust img_ajust_prochain_concert grid_area_21' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration du concert">
                            
                            <!-- DATE CADRE -->

                            <!-- RECUPERER LES DATES -->
                            <?php 
                            $datedebut = '';
                            $datefin = '';
                            if (!empty(get_post_meta($post->ID, 'metadata_180_1', true))) : 
                                $datedebut = get_post_meta($post->ID, 'metadata_180_1', true);
                            endif;?>
                            <?php if (!empty(get_post_meta($post->ID, 'metadata_180_10', true))) : 
                                $datefin = get_post_meta($post->ID, 'metadata_180_10', true);
                            endif;?>
                            <!-- AFFICHER LES DATES -->
                            <div class="grid_area_21 date_cadre_container">
                                <div class="date_cadre_border date_cadre_1"></div>
                                <div class="date_cadre_2"></div>
                                <div class="relative date_cadre_texte date_cadre_texte_1 tx_color_noir_fonce"><span class="date_cadre_texte_jour"><?php echo mysql2date('j', $datedebut); ?></span><span class="date_cadre_texte_mois tx_color_noir_clair"><?php echo mysql2date('M', $datedebut); ?></span></div>
                                <div class="relative date_cadre_texte date_cadre_texte_2 tx_color_noir_fonce"><span class="date_cadre_texte_jour"><?php echo mysql2date('j', $datefin); ?></span><span class="date_cadre_texte_mois tx_color_noir_clair"><?php echo mysql2date('M', $datefin); ?></span></div>
                            </div>

                            <!-- RESET VARIABLES -->
                            <?php unset($datedebut); unset($datefin) ?>

                            <!-- GENRE -->
                            <div class="text_vertical grid_area_11 alignself_end marginb_4">
                                <p class="texte_right ubuntu_moyen tx_color_gris_clair">
                                    <?php $concert_genre =  wp_get_post_terms($post->ID, 'genre', array("fields" => "names"));
                                    if (!empty($concert_genre)) {echo $concert_genre[0];}?>
                                </p>                        
                            </div>

                        </div>
                    
                    <!-- INFORMATION -->
                    <div class="grid paddingt_30 paddingr_8 paddingb_10 paddingl_15 prochain_concert_card_border_desk">
                                <!-- TITRE -->
                                <div class="">
                                    <h2 class='titre_card_container'>
                                        <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_199', true); ?></span>
                                        <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_200', true); ?></span>
                                    </h2>
                                </div>

                                <!-- DISTRIBUTION -->
                                <div class='liste_art_comp paddingt_12'>
                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                        <?php if(!empty(get_post_meta($post->ID, 'metadata_186_'.$i, true))) { ?>
                                            <div class="artiste">
                                                <div class="paddingr_8 ubuntu_bold">
                                                    <?php echo get_post_meta($post->ID, 'metadata_186_'.$i, true); ?>
                                                </div>
                                                <div class="ubuntu_fin">
                                                    <?php echo get_post_meta($post->ID, 'metadata_187_'.$i, true); ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                <!-- DATES -->
                                <div class="liste_date paddingt_12">
                                
                                    <!-- BOUCLE SUR LES 10 DATES POUR CHERCHER UN CONCERT ANNULE OU REPORTE-->
                                    
                                    <?php 
                                    $check_annul = '';
                                    for ($i = 1; $i <= 10; $i++) :

                                        // SI LA DATE EXISTE
                                        if(!empty(get_post_meta($post->ID, 'metadata_180_'.$i, true))) :
                                            if(get_post_meta( $post->ID, 'metadata_183_'.$i, true)=="annul") {
                                                $check_annul = "oui";
                                            };
                                            if(get_post_meta($post->ID, 'metadata_184_'.$i, true)=="report") {
                                                $check_annul = "oui";
                                            };
                                        endif;
                                    endfor;?>
                                    <!-- CONCERT ANNULE / REPORTE -->
                                    <?php if ($check_annul=="oui") : ?>
                                        <div class="paddingb_1">
                                                <p class="alert ubuntu_moyen fontsize_13">Dates annulées ou reportées</p>
                                        </div>
                                    <?php endif; ?>
                                    <!-- RESETER LES VARIABLES -->
                                    <?php 
                                    unset($check_annul);?>
                                </div>

                                <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                            </div>


                    </div>
                <?php endwhile; 
            endif; wp_reset_query(); ?>

        </div>

    </section>

    <!-- ----------------------- -->
    <!-- ACCUEIL DES ELEVES AUX REPETITIONS  -->
    <!-- ----------------------- -->
    <section class="margint_90 margin_section_botton">

        <!-- LOOP POUR RECUPERER LE CONTENU WP-CONTENT DU POST ACTION CULTURELLE "ACCUEIL DES ELEVES AUX REPETITIONS" -->
        <?php 
        $args_accueil_repetitions = array(
            'post_type' => 'cultureaction',
            'posts_per_page' => 1,

            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'action_culturelle',
                    'field'    => 'slug',
                    'terms'    => 'accueil_repetitions'),
                array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2021-2022'))),
        );
        $loop_accueil_repetitions = new WP_Query( $args_accueil_repetitions );
        if ($loop_accueil_repetitions->have_posts()) :
            while ($loop_accueil_repetitions->have_posts()) :
                $loop_accueil_repetitions->the_post();?>
                <div class="grid_2col12">
                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob marginb_20">
                        <div class="content_wp">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- TITRE -->
                    <div class="grid paddingr_30 marginb_20_mobile">
                        <div class="grid">
                            <!-- TITRE-->
                            <div class="">
                                <h2 class='titre_card_container_grand'>
                                    <span class='titre_leger'>ACCUEIL DES ÉLÈVES</span>
                                    <br>
                                    <span class='titre_gras'>AUX RÉPÉTITIONS</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --------------------------------- -->
                <!-- LES PHOTOS ET VIDEOS -->
                <!-- --------------------------------- -->

                <div class="margin_section_botton">

                    <!-- VIDEOS -->
                    <div class="photos_container grid_3col grid_column_gap10 grid_row_gap10 align_center">
                        <!-- Boucle pour les 3 VIDEOS -->
                        <?php for ($i = 1; $i <= 3; $i++) {?>
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_422_'.$i, true))) { ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'metadata_422_'.$i, true); ?>" allowfullscreen></iframe>
                                </div>
                            <?php }; ?>
                        <?php }; ?>
                        <div></div>
                    </div>

                    <!-- PHOTOS -->
                    <div class="photos_container grid_photos">

                        <!-- Boucle pour les 10 PHOTOS -->
                        <?php for ($i = 1; $i <= 10; $i++) {?>
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_423_'.$i, true))) { ?>
                                <div>
                                    <img class="img_ajust" src="<?php echo get_post_meta($post->ID, 'metadata_423_'.$i, true); ?>" alt="Photo Accueil aux répétitions">
                                </div>
                            <?php }; ?>
                        <?php }; ?>
                        <div></div>

                    </div>

                </div>
                
            <?php endwhile; 
        endif; 
        wp_reset_query(); ?>

    </section>

    <!-- ----------------------- -->
    <!-- RENCONTRE AVEC L'ORCHESTRE  -->
    <!-- ----------------------- -->
    <section class="margint_90 margin_section_botton">

        <!-- LOOP POUR RECUPERER LE CONTENU WP-CONTENT DU POST ACTION CULTURELLE "RENCONTRE AVEC L'ORCHESTRE" -->
        <?php 
        $args_rencontre = array(
            'post_type' => 'cultureaction',
            'posts_per_page' => 1,

            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'action_culturelle',
                    'field'    => 'slug',
                    'terms'    => 'rencontre_orchestre'),
                array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2021-2022'))),
        );
        $loop_accueil_rencontre = new WP_Query( $args_rencontre );
        if ($loop_accueil_rencontre->have_posts()) :
            while ($loop_accueil_rencontre->have_posts()) :
                $loop_accueil_rencontre->the_post();?>
                <div class="grid_2col12">
                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob marginb_20">
                        <div class="content_wp">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- TITRE -->
                    <div class="grid paddingr_30 marginb_20_mobile">
                        <div class="grid">
                            <!-- TITRE-->
                            <div class="">
                                <h2 class='titre_card_container_grand'>
                                    <span class='titre_leger'>RENCONTRE</span>
                                    <br>
                                    <span class='titre_gras'>AVEC L'ORCHESTRE</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --------------------------------- -->
                <!-- LES PHOTOS ET VIDEOS -->
                <!-- --------------------------------- -->

                <div class="margin_section_botton">

                    <!-- VIDEOS -->
                    <div class="photos_container grid_3col grid_column_gap10 grid_row_gap10 align_center">
                        <!-- Boucle pour les 3 VIDEOS -->
                        <?php for ($i = 1; $i <= 3; $i++) {?>
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_422_'.$i, true))) { ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'metadata_422_'.$i, true); ?>" allowfullscreen></iframe>
                                </div>
                            <?php }; ?>
                        <?php }; ?>
                        <div></div>
                    </div>

                    <!-- PHOTOS -->
                    <div class="photos_container grid_photos">

                        <!-- Boucle pour les 10 PHOTOS -->
                        <?php for ($i = 1; $i <= 10; $i++) {?>
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_423_'.$i, true))) { ?>
                                <div>
                                    <img class="img_ajust" src="<?php echo get_post_meta($post->ID, 'metadata_423_'.$i, true); ?>" alt="Photo Accueil aux répétitions">
                                </div>
                            <?php }; ?>
                        <?php }; ?>
                        <div></div>

                    </div>

                </div>
                
            <?php endwhile; 
        endif; 
        wp_reset_query(); ?>

    </section>

    <!-- --------------------------------- -->
    <!-- INFORMATIONS PRATIQUES -->
    <!-- --------------------------------- -->
    <section class='grid_infos_pratiques grid_column_gap40 paddingb_50'>

        <!-- TITRE -->
        <div>
            <h2 class='titre_chapitre_container marginb_20 tx_color_culture_actions'>
                <span class='titre_gras'>INFORMATIONS</span>
                <br>
                <span class='titre_leger'>PRATIQUES</span>
            </h2>
        </div>
        <!-- ICONE -->
        <div class="marginb_12_mobilexs">
            <img class='width_50_desk max_width_44_mobile' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icones_informations_pratiques_jaune.png" alt="Icone Information pratique">
        </div>
        
        <div class="grid_area_1_32_mob marginl_12_mobilexs">
        
            <!-- INFORMATION -->
            <div class="content_wp">
                <?php echo get_post_meta($post->ID, 'metadata_482', true); ?>
                <p class="marginb_6"><button class="button_petit button_culture_actions"><a target="_blank" href="mailto:lullishop@icloud.com?subject=Contact MÉCÉNAT ENTREPRISE depuis le site internet de l'Orchestre">CONTACTEZ-NOUS</a></button></p>
            </div>

        </div>

    </section>

</article>

</main>


<?php
 get_footer();
?>
