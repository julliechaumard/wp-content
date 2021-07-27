<?php
/*
Template Name: page_recrutement
*/
?>
<?php

get_header();
get_template_part('template-parts/header','page');

?>
<main>

<article>


    <!-- ----------------------- -->
    <!-- POSTS RECRUTEMENT -->
    <!-- ----------------------- -->
   
            <!-- INFORMATION -->
            <!-- LOOP POUR RECUPERER LE CONTENU WP-CONTENT DES POSTS RECRUTEMENT -->
            <?php 
            $args_recrutement = array(
                'post_type' => 'recrutement',
                'posts_per_page' => -1,
            );
            $loop_recrutement = new WP_Query( $args_recrutement );
            if ($loop_recrutement->have_posts()) :
                while ($loop_recrutement->have_posts()) :
                    $loop_recrutement->the_post();?>

                    <section class="margint_90 margin_section_botton">
                        <div class="grid_2col12">
                            <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                                <div class="content_wp">
                                    <?php the_content(); ?>
                                </div>
                                <!-- --------------------------------- -->
                                <!-- INFORMATIONS PRATIQUES -->
                                <!-- --------------------------------- -->
                                <section class='grid_column_gap40 paddingb_50'>

                                    <!-- TITRE -->
                                    <div>
                                        <h2 class='titre_chapitre_container margint_40 marginb_20 tx_color_orchestre'>
                                            <span class='titre_gras'>INFORMATIONS</span>
                                            <br>
                                            <span class='titre_leger'>PRATIQUES</span>
                                        </h2>
                                    </div>

                                    <div class="grid_area_1_32_mob marginl_12_mobilexs">

                                        <!-- INFORMATION -->
                                        <div class="content_wp">
                                            <?php echo get_post_meta($post->ID, 'metadata_663', true); ?>
                                            <?php if (!empty(get_post_meta($post->ID, 'metadata_662', true))): ?>
                                                <p class="marginb_6"><button class="button_petit button_orchestre"><a download target="_blank" href="<?php echo get_post_meta($post->ID, 'metadata_662', true); ?>">ANNONCE</a></button></p>
                                            <?php endif;?>
                                        </div>

                                    </div>

                                </section>

                            </div>
                    
                            <!-- TITRE -->
                            <div class="grid paddingr_30 marginb_20_mobile">
                                <div class="grid">
                                    <!-- TITRE-->
                                    <div class="">
                                        <h2 class='titre_card_container_grand'>
                                            <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_664', true); ?></span>
                                            <br>
                                            <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_665', true); ?></span>
                                        </h2>
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
