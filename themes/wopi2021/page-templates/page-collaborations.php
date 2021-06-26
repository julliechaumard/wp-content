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

<article class="margint_90">

    <!-- ------------------------------ -->
    <!-- COLLABORATION AVEC DESCRIPTION -->
    <!-- ------------------------------ -->
    
    <!-- CARRE ROSE -->
    <div class="encoche_rose marginl_-3"></div>
    <!-- COLLABORATION AVEC DESCRIPTION -->
    <section class="grid_2col_11 grid_column_gap40 grid_row_gap50 align_center marginl_20 margin_section_botton">

        <!--  LOOP COLLABORATION AVEC DESCRIPTION -->
        <?php 
            $args_collaboration = array(
                'post_type' => 'partenaire',
                'posts_per_page' => -1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'categorie_partenaire',
                        'field'    => 'slug',
                        'terms'    => 'culturel'),
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2021-2022'))),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
            );
            $loop_collaboration = new WP_Query( $args_collaboration );
            if ($loop_collaboration->have_posts()) :
                while ($loop_collaboration->have_posts()) :
                    $loop_collaboration->the_post();?>


                    <?php 
                    if (!empty(get_post_meta($post->ID, 'metadata_254', true))) : ?>

                        <div class="grid_2col_11 align_center grid_column_gap7">
                            <div class="texte_center">
                                

                                <!-- LOGO avec lien vers le site internet du partenaire -->
                                <?php if (!empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                    
                                        <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Photo du partenaire">
                                        <a class='ubuntu_fin fontsize_10' href="<?php echo get_post_meta($post->ID, 'metadata_251', true) ?>" target="_blank" >Site internet</a>
                                    
                                <?php endif; ?>
                                <!-- LOGO sans lien vers le site internet du partenaire -->
                                <?php if (empty(get_post_meta($post->ID, 'metadata_251', true))) : ?>
                                    
                                        <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Photo du partenaire">
                                    
                                <?php endif; ?>



                            </div>
                            <div>
                                <p class="fontsize_13 ubuntu_leger paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_254', true) ?></p>
                            </div>
                        </div>



                    <?php endif; ?>




                <?php endwhile; 
            endif;
            wp_reset_query();    
        ?>


    </section>

    <!-- ----------------------- -->
    <!-- TEMOIGNAGE  -->
    <!-- ----------------------- -->
    <?php  get_template_part('template-parts/temoignage_slider'); ?>


    <!-- ------------------------------ -->
    <!-- COLLABORATION SANS DESCRIPTION -->
    <!-- ------------------------------ -->

    <!-- CARRE ROSE -->
    <div class="encoche_rose marginl_-3"></div>
    <!-- COLLABORATION SANS DESCRIPTION -->
    <section class="grid_autocolmax_autorow_220 align_center marginl_20 margin_section_botton">

        <!--  LOOP COLLABORATION SANS DESCRIPTION -->
        <?php 
            $args_collaboration = array(
                'post_type' => 'partenaire',
                'posts_per_page' => -1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'categorie_partenaire',
                        'field'    => 'slug',
                        'terms'    => 'culturel'),
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2021-2022'))),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
            );
            $loop_collaboration = new WP_Query( $args_collaboration );
            if ($loop_collaboration->have_posts()) :
                while ($loop_collaboration->have_posts()) :
                    $loop_collaboration->the_post();?>


                    <?php 
                    if (empty(get_post_meta($post->ID, 'metadata_254', true))) : ?>

                            <div class="">
                                <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Photo du partenaire">
                            </div>

                    <?php endif; ?>




                <?php endwhile; 
            endif;
            wp_reset_query();
        ?>


    </section>

</article>

<!-- ----------------------- -->
<!-- REVUE DE PRESSE  -->
<!-- ----------------------- -->
<?php  get_template_part('template-parts/revuepresse_slider'); ?>



</main>


<?php
 get_footer();
?>
