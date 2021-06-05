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

        <div>
            
        </div>

    </section>

</article>

</main>


<?php
 get_footer();
?>
