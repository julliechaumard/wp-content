<?php
/*
Template Name: page_academie
*/
?>
<?php

get_header();
get_template_part('template-parts/header','page');

?>
<main>

<article>

    <!-- ----------------------- -->
    <!-- LES CONCERTS ACADEMIES  -->
    <!-- ----------------------- -->
    <section class="margint_90 margin_section_botton">
        <div class="grid_2col12">
            <!-- INFORMATION -->
            <!-- RECUPERER LE CONTENU WP-CONTENT DE LA PAGE "ACADEMIE" -->
            <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                <div class='content_wp'>
                    <?php while(have_posts())  : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- TITRE -->
            <div class="grid paddingr_30 marginb_20_mobile">
                <div class="grid">
                    <!-- TITRE-->
                    <div class="">
                        <h2 class='titre_card_container_grand'>
                            <span class='titre_leger'>LES CONCERTS</span>
                            <br>
                            <span class='titre_gras'>DES ACADÉMIES</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- LE CONCERT "LA RENTREE EN MUSIQUE -->
        <div class="margint_70 margin_section_botton">

            <!-- TITRE PROCHAIN CONCERT -->
            <div>
                <p class="texte_right nopagemarge_mob ubuntu_moyen tx_color_gris_clair">ACADÉMIE</p>                        
            </div>

            <!-- LOOP CONCERT accueil_prochain_concert -->
            <?php 
            $args_prochain_concert = array(
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
                        'terms'    => 'academie')),
                'orderby' => 'meta_value',
                'meta_key' => 'metadata_180_10',
                'order'=> 'ASC'
                );
            $loop_prochain_concert = new WP_Query( $args_prochain_concert );
            if ($loop_prochain_concert->have_posts()) :
                while ($loop_prochain_concert->have_posts()) :
                    $loop_prochain_concert->the_post();
                    ?>

                    <!-- ILLUSTRATION -->
                    <div class="grid_2col12 marginb_80">
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

</article>



</main>


<?php
 get_footer();
?>
