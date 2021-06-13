<?php
/*
Template Name: page_dossiers_pedagogiques
*/
?>
<?php

get_header();
get_template_part('template-parts/header','page');

?>
<main>

<article>

    <!-- ----------------------- -->
    <!-- 1 DOSSIER  -->
    <!-- ----------------------- -->

    <!-- LOOP DOSSIER  -->

    <?php 
    $args_dossier = array(
        'post_type' => 'cultureaction',
        'posts_per_page' => -1,

        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'action_culturelle',
                'field'    => 'slug',
                'terms'    => 'dossier_pedagogique'),
            array(
                'taxonomy' => 'saison',
                'field'    => 'slug',
                'terms'    => array('2021-2022'))),
    );
    $loop_dossier = new WP_Query( $args_dossier );
    if ($loop_dossier->have_posts()) :
        while ($loop_dossier->have_posts()) :
            $loop_dossier->the_post();?>

            <section class="margint_90 margin_section_botton">
                <div class="grid_2col12">
                    <!-- INFORMATION -->
                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                        <div class="content_wp">
                            <?php the_content(); ?>
                        </div>
                        <div>
                            <p class="marginb_6 margint_20">
                                <button class="button_petit button_gris">
                                    <a class="flex_inline" target="_blank" href="<?php echo get_post_meta($post->ID, 'metadata_421', true); ?>">
                                    <p>TÉLÉCHARGER LE DOSSIER</p> 
                                    <img class="paddingl_8" src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icone_play_blanc.png" alt="">
                                    </a>
                                </button>
                            </p>
                        </div>
                    </div>
                
                    <!-- TITRE -->
                    <div class="grid paddingr_30 marginb_20_mobile">
                        <div class="grid">
                            <!-- TITRE-->
                            <div class="">
                                <h2 class='titre_card_container_grand'>
                                    <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_424', true); ?></span>
                                    <br>
                                    <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_425', true); ?></span>
                                </h2>
                            </div>

                            <!-- DESCRIPTION -->
                            <div class='liste_art_comp paddingt_12 marginr_20 alignself_end_desktop justifyself_end_desktop'>
                                <!-- ICONE -->
                                <div class="marginb_12_mobilexs">
                                    <img class='width_60_desk max_width_44_mobile' src="<?php echo get_post_meta($post->ID, 'metadata_420', true); ?>" alt="Icone dossier pédagogique">
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>

            </section>

        <?php endwhile; 
    endif; 
    wp_reset_query(); ?>

</article>

</main>


<?php
 get_footer();
?>
