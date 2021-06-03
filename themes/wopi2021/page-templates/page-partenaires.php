<?php
/*
Template Name: page_collaborations
*/
?>
<?php

get_header();
get_template_part('template-parts/header','page');

?>
<main>

<article>

    <!-- --------------------------------- -->
    <!-- SOUTIEN FINANCIER -->
    <!-- --------------------------------- -->
    <section class="paddingt_30 borderb paddingb_40">

        <!-- TITRE -->
        <div class="marginb_50">
            <h2 class='titre_chapitre_container marginb_20'>
                <span class='titre_leger'>SOUTIEN FINANCIER</span>
                <br>
                <span class='titre_gras'>DE L’ÉTAT ET DES COLLECTIVITÉS TERRITORIALES</span>
            </h2>
        </div>

        <div class="grid_autocolmax_autorow_220 align_center marginl_20 marginl_0_mob">

            <!--  LOOP SOUTIEN FINANCIER -->

            <?php 
                $args_financier = array(
                    'post_type' => 'partenaire',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'categorie_partenaire',
                            'field'    => 'slug',
                            'terms'    => 'financier'),
                        array(
                            'taxonomy' => 'saison',
                            'field'    => 'slug',
                            'terms'    => array('2021-2022'))),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $loop_financier = new WP_Query( $args_financier );
                if ($loop_financier->have_posts()) :
                    while ($loop_financier->have_posts()) :
                        $loop_financier->the_post();?>

                        <!-- LOGO avec lien vers le site internet du partenaire -->
                        <?php if (!empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                            <div class="texte_right">
                                <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Photo du partenaire">
                                <a class='ubuntu_fin fontsize_10' href="<?php echo get_post_meta($post->ID, 'metadata_251', true) ?>" target="_blank" >Site internet</a>
                            </div>
                        <?php endif; ?>
                        <!-- LOGO sans lien vers le site internet du partenaire -->
                        <?php if (empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                            <div>
                                <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Photo du partenaire">
                            </div>
                        <?php endif; ?>

                    <?php endwhile; 
                endif; 
            ?>


        </div>




    </section>


    <!-- --------------------------------- -->
    <!-- AUTRE SOUTIEN -->
    <!-- --------------------------------- -->
    <section class="paddingt_30 margin_section_botton">

        <!-- TITRE -->
        <div class="marginb_50">
            <h2 class='titre_chapitre_container marginb_20'>
                <span class='titre_leger'>AUTRES</span>
                <br>
                <span class='titre_gras'>SOUTIENS</span>
            </h2>
        </div>

        <div class="grid_autocolmax_autorow_220 align_center marginl_20 marginl_0_mob">

            <!--  LOOP SOUTIEN FINANCIER -->

            <?php 
                $args_autres = array(
                    'post_type' => 'partenaire',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'categorie_partenaire',
                            'field'    => 'slug',
                            'terms'    => 'autres'),
                        array(
                            'taxonomy' => 'saison',
                            'field'    => 'slug',
                            'terms'    => array('2021-2022'))),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $loop_autres = new WP_Query( $args_autres );
                if ($loop_autres->have_posts()) :
                    while ($loop_autres->have_posts()) :
                        $loop_autres->the_post();?>

                            <!-- LOGO avec lien vers le site internet du partenaire -->
                            <?php if (!empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                <div class="texte_right">
                                    <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Photo du partenaire">
                                    <a class='ubuntu_fin fontsize_10' href="<?php echo get_post_meta($post->ID, 'metadata_251', true) ?>" target="_blank" >Site internet</a>
                                </div>
                            <?php endif; ?>
                            <!-- LOGO sans lien vers le site internet du partenaire -->
                            <?php if (empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                <div>
                                    <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Photo du partenaire">
                                </div>
                            <?php endif; ?>
            
                    <?php endwhile; 
                endif; 
            ?>


        </div>




    </section>


</article>

</main>


<?php
 get_footer();
?>
