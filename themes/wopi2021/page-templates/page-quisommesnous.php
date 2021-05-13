<?php
/*
Template Name: page_accueil
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
?>

<main>

<article>

    <section>

        <!-- Titre -->
        <div class="paddingt_30">
            <h2 class='titre_chapitre_container'>
                <span class='titre_leger'>LA DIRECTION</span>
                <br>
                <span class='titre_gras'>DE L'ORCHESTRE</span>
            </h2>
        </div>

        <!-- LISTE DES MEMBRES DE LA DIRECTION -->

        <div class="grid_2col_11 grid_column_gap40 height_min_200">
            <!-- DIRECTEUR MUSICAL -->
            <div class="grid_2col_45_55">
                <!-- LOOP CONCERT categorie_orchestre  -->

                <?php 
                $args_directeur_musical = array(
                    'post_type' => 'orchestre',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        array(
                        'taxonomy' => 'categorie_orchestre',
                        'field'    => 'slug',
                        'terms'    => 'chef')
                    ),
                );
                $loop_directeur_musical = new WP_Query( $args_directeur_musical );
                if ($loop_directeur_musical->have_posts()) :
                    while ($loop_directeur_musical->have_posts()) :
                        $loop_directeur_musical->the_post();
                        ?>



                        <!-- ILLUSTRATION -->
                        <img class='img_ajust' src="<?php the_post_thumbnail_url(); ?>" alt="Photo du directeur musical">

                        <div class="flex flex_align_end bg_color_orchestre">
                            <div>
                                <div>
                                    <p><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                    <p><?php echo get_post_meta($post->ID, 'metadata_605', true); ?></p>
                                </div>
                                <div class="fleche fleche_blanc alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_blanc"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_blanc.png" alt=""></a></div>
                            </div>
                            
                        </div>
                        




                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
    


            </div>

            <!-- DIRECTEUR GENERAL -->
            <div class="grid_2col_45_55">
                <!-- LOOP CONCERT categorie_orchestre  -->

                <?php 
                $args_directeur_musical = array(
                    'post_type' => 'orchestre',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        array(
                        'taxonomy' => 'categorie_orchestre',
                        'field'    => 'slug',
                        'terms'    => 'directeur')
                    ),
                );
                $loop_directeur_musical = new WP_Query( $args_directeur_musical );
                if ($loop_directeur_musical->have_posts()) :
                    while ($loop_directeur_musical->have_posts()) :
                        $loop_directeur_musical->the_post();
                        ?>



                        <!-- ILLUSTRATION -->
                        <img class='img_ajust' src="<?php the_post_thumbnail_url(); ?>" alt="Photo du directeur musical">

                        <div class="flex flex_align_end bg_color_orchestre">
                            <div>
                                <div>
                                    <p><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                    <p><?php echo get_post_meta($post->ID, 'metadata_605', true); ?></p>
                                </div>
                                <div class="fleche fleche_blanc alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_blanc"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_blanc.png" alt=""></a></div>
                            </div>
                            
                        </div>
                        




                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
    


            </div>



        </div>


    </section>

</article>


</main>

<?php
 get_footer();
?>
