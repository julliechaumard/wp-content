<?php
/*
Template Name: page_agenda
*/
?>
<?php

 get_header();
 get_template_part('template-parts/header','page');

?>
<main>

    <article>
        <!-- Titre -->
        <div class="paddingt_30">
            <h2 class='titre_chapitre_container'>
                <span class='titre_leger'>LES PROCHAINS</span>
                <br>
                <span class='titre_gras'>CONCERTS</span>
            </h2>
        </div>

        <!-- LISTE DES CONCERTS -->
        <section class="grid_3col_liste grid_column_gap24 grid_row_gap50 margint_40 margin_section_botton">

            <!-- LOOP AGENDA DES CONCERTS => AUJOURD'HUI -->

            <?php 
            $args_liste_concert = array(
                'post_type' => 'concert',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2021-2022'))
                ),
                'meta_query' => array(
                    array(
                      'key'     => 'metadata_180_10',
                      'value'   => date('Y-m-d',strtotime("today")),
                      'type'    => 'DATE',
                      'compare' => '>=',
                    ),
                  ),
                'orderby' => 'meta_value',
                'meta_key' => 'metadata_180_1',
                'order'=> 'ASC'
                );
            $loop_liste_concert = new WP_Query( $args_liste_concert );
            if ($loop_liste_concert->have_posts()) :
                while ($loop_liste_concert->have_posts()) :
                    $loop_liste_concert->the_post();
                    ?>

                    <!-- UN CONCERT -->
                    <div class="concert_card encoche_list_card">
                        <!-- GENRE -->
                        <div>
                            <p class="texte_right ubuntu_moyen tx_color_gris_clair">
                                <?php $concert_genre =  wp_get_post_terms($post->ID, 'genre', array("fields" => "names"));
                                if (!empty($concert_genre)) {echo $concert_genre[0];}?>
                            </p>                        
                        </div>
                        <!-- ILLUSTRATION -->
                        <div class="grid">
                            <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_189', true); ?>" alt="Illustration du concert">
                            <div class="grid_area_11 encoche_blanc"></div>
                        </div>
                        <div class="concert_card_layout concert_card_border">
                            <!-- TITRE -->
                            <div class="">
                                <h2 class='titre_card_container'>
                                    <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_199', true); ?></span>
                                    
                                    <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_200', true); ?></span>
                                </h2>
                            </div>
                            <!-- SOUS-TITRE -->
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_201', true))) { ?>
                                <div class="paddingt_5 ubuntu_fin tx_simple_size">
                                    <p><?php echo get_post_meta($post->ID, 'metadata_201', true); ?></p>
                                </div>
                            <?php } ?>
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
                            
                                <!-- BOUCLE SUR LES 10 DATES -->
                                <?php for ($i = 1; $i <= 10; $i++) :

                                    // SI LA DATE EXISTE
                                    if(!empty(get_post_meta($post->ID, 'metadata_180_'.$i, true))) :

                                        // Aller chercher la ville de la salle
                                        if(!empty(get_post_meta($post->ID, 'metadata_182_'.$i, true))) :
                                            $salle = get_post_meta($post->ID, 'metadata_182_'.$i, true);
                                            $ville = get_page_by_path($salle, OBJECT, 'salle');
                                            $ville = get_post_meta($ville->ID, 'metadata_272', true);
                                        endif; ?>

                                        <div class="paddingb_1">
                                            <!-- LA DATE -->
                                                <p>
                                                    — <span class="jour ubuntu_fin"><?php echo mysql2date('j F', get_post_meta($post->ID, 'metadata_180_'.$i, true)); ?></span>
                                                    <span class="heure ubuntu_fin"><?php echo get_post_meta($post->ID, 'metadata_181_'.$i, true); ?></span>
                                                    <span class="ville ubuntu_bold"><?php echo $ville;?></span>
                                                    <!-- CONCERT ANNULE / REPORTE -->
                                                    <?php if(get_post_meta($post->ID, 'metadata_183_'.$i, true)=="annul") { ?>
                                                        <span class="alert ubuntu_moyen fontsize_13">CONCERT ANNULÉ</span>
                                                    <?php };?>
                                                    <?php if(get_post_meta($post->ID, 'metadata_184_'.$i, true)=="report") { ?>
                                                        <span class="alert ubuntu_moyen fontsize_13">CONCERT REPORTÉ</span>
                                                    <?php };?>
                                                </p>

                                           

                                        </div>
                                        <!-- RESETER LES VARIABLES -->
                                        <?php 
                                        unset($salle);
                                        unset($ville);
                                    endif;
                                endfor;?>
                            </div>

                            <div class="fleche fleche_saison paddingt_20 marginb_6 ubuntu_bold tx_color_saison"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_rose.png" alt=""></a></div>
                        </div>

                    </div>

 


            <?php endwhile; endif; wp_reset_query(); ?>

        </section>

    </article>

</main>


<?php
 get_footer();
?>
