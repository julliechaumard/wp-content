<?php
/*
Template Name: page_actions_citoyennes
*/
?>
<?php

get_header();
get_template_part('template-parts/header','page');

?>
<main>

<article>

    <!-- ----------------------- -->
    <!-- HOPITAL  -->
    <!-- ----------------------- -->

            <!-- LOOP POUR RECUPERER LE CONTENU WP-CONTENT DU POST ACTION CULTURELLE "HOPITAL" -->
            <?php 
            $args_hopital = array(
                'post_type' => 'cultureaction',
                'posts_per_page' => 1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'action_culturelle',
                        'field'    => 'slug',
                        'terms'    => 'hopital'),
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2021-2022'))),
            );
            $loop_hopital = new WP_Query( $args_hopital );
            if ($loop_hopital->have_posts()) : ?>

                <section class="margin_section_botton">

                   <!-- TITRE ET DESCRIPTION -->
                    <div class="grid_2col12">

                        <?php while ($loop_hopital->have_posts()) :
                            $loop_hopital->the_post();?>

                            <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
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
                                            <span class='titre_leger'>L’ORCHESTRE</span>
                                            <br>
                                            <span class='titre_gras'>À L’HÔPITAL</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                    </div>
                            <!-- --------------------------------- -->
                            <!-- LES PHOTOS ET VIDEOS -->
                            <!-- --------------------------------- -->

                            <div class="margin_section_botton margint_30">

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


                        <?php endwhile;?>

                </section>

            <?php endif; ?>
            <?php wp_reset_query(); ?>

            <!-- ----------------------- -->
            <!-- PROCHAIN CONCERT HOPITAL       -->
            <!-- ----------------------- -->
        <div class="margin_section_botton">

            <!-- LES PROCHAINS CONCERTS HOPITAL -->
            <div>
                <p class="texte_right nopagemarge_mob ubuntu_moyen tx_color_gris_clair">ACTIONS SOCIALES</p>                        
            </div>

            <!-- LOOP CONCERTS HOPITAL -->
            <?php 
            $args_prochain_concert_hopital = array(
                'post_type' => 'concert',
                'posts_per_page' => -1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2020-2021', '2021-2022')),
                    array(
                        'taxonomy' => 'action_culturelle',
                        'field'    => 'slug',
                        'terms'    => 'hopital'))

                );
            $loop_prochain_concert_hopital = new WP_Query( $args_prochain_concert_hopital );
            if ($loop_prochain_concert_hopital->have_posts()) :
                while ($loop_prochain_concert_hopital->have_posts()) :
                    $loop_prochain_concert_hopital->the_post();
                    ?>

                    <!-- ILLUSTRATION -->
                    <div class="grid_2col12 marginb_60">
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
                            endif;
                            if (!empty(get_post_meta($post->ID, 'metadata_180_10', true))) : 
                                $datefin = get_post_meta($post->ID, 'metadata_180_10', true);
                            endif;
                            if (empty(get_post_meta($post->ID, 'metadata_180_1', true))) : 
                                $datedebut = get_post_meta($post->ID, 'metadata_180_10', true);
                                $datefin = '';
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
                        <div class="grid paddingt_30 paddingr_8 paddingb_10 paddingl_15 prochain_concert_card_border_desk prochain_concert_card_border_mob marginr_-15_mobile marginl_5_mobile">
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

    <!-- ----------------------- -->
    <!-- TEMOIGNAGE  -->
    <!-- ----------------------- -->
    <?php  get_template_part('template-parts/temoignage_slider'); ?>


    <!-- ----------------------- -->
    <!-- UN ORCHESTRE OUVERT A TOUS  -->
    <!-- ----------------------- -->

            <!-- LOOP POUR RECUPERER LE CONTENU WP-CONTENT DU POST ACTION CULTURELLE "UN ORCHESTRE OUVERT A TOUS" -->
            <?php 
            $args_ouvert_tous = array(
                'post_type' => 'cultureaction',
                'posts_per_page' => 1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'action_culturelle',
                        'field'    => 'slug',
                        'terms'    => 'ouvert_tous'),
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2021-2022'))),
            );
            $loop_ouvert_tous = new WP_Query( $args_ouvert_tous );
            if ($loop_ouvert_tous->have_posts()) : ?>

                <section class="margin_section_botton">

                   <!-- TITRE ET DESCRIPTION -->
                    <div class="grid_2col12">

                        <?php while ($loop_ouvert_tous->have_posts()) :
                            $loop_ouvert_tous->the_post();?>

                            <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
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
                                            <span class='titre_leger'>UN ORCHESTRE</span>
                                            <br>
                                            <span class='titre_gras'>OUVERT À TOUS</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                    </div>
                            <!-- --------------------------------- -->
                            <!-- LES PHOTOS ET VIDEOS -->
                            <!-- --------------------------------- -->

                            <div class="margin_section_botton margint_30">

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


                        <?php endwhile;?>

                </section>

            <?php endif; ?>
            <?php wp_reset_query(); ?>

        <!-- ----------------------- -->
        <!-- PROCHAIN CONCERT OUVERT A TOUS       -->
        <!-- ----------------------- -->
        <div class="margin_section_botton">

            <!-- LES PROCHAINS CONCERTS OUVERT A TOUS -->
            <div>
                <p class="texte_right nopagemarge_mob ubuntu_moyen tx_color_gris_clair">PROCHAINS CONCERTS</p>                        
            </div>

            <!-- LOOP CONCERTS OUVERT A TOUS -->
            <?php 
            $args_prochain_concert_ouvert_tous = array(
                'post_type' => 'concert',
                'posts_per_page' => -1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2020-2021', '2021-2022')),
                    array(
                        'taxonomy' => 'action_culturelle',
                        'field'    => 'slug',
                        'terms'    => 'ouvert_tous'))

                );
            $loop_prochain_concert_ouvert_tous = new WP_Query( $args_prochain_concert_ouvert_tous );
            if ($loop_prochain_concert_ouvert_tous->have_posts()) :
                while ($loop_prochain_concert_ouvert_tous->have_posts()) :
                    $loop_prochain_concert_ouvert_tous->the_post();
                    ?>

                    <!-- ILLUSTRATION -->
                    <div class="grid_2col12 marginb_60">
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
                            endif;
                            if (!empty(get_post_meta($post->ID, 'metadata_180_10', true))) : 
                                $datefin = get_post_meta($post->ID, 'metadata_180_10', true);
                            endif;
                            if (empty(get_post_meta($post->ID, 'metadata_180_1', true))) : 
                                $datedebut = get_post_meta($post->ID, 'metadata_180_10', true);
                                $datefin = '';
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
                        <div class="grid paddingt_30 paddingr_8 paddingb_10 paddingl_15 prochain_concert_card_border_desk prochain_concert_card_border_mob marginr_-15_mobile marginl_5_mobile">
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

    <!-- ----------------------- -->
    <!-- REVUE DE PRESSE  -->
    <!-- ----------------------- -->
    <?php  get_template_part('template-parts/revuepresse_slider'); ?>



</article>

</main>


<?php
 get_footer();
?>