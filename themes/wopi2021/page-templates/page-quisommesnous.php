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

    <!-- --------------------------------- -->
    <!-- LISTE DES MUSICIENS -->
    <!-- --------------------------------- -->
    <section class="margin_section_botton">

        <!-- Titre -->
        <div class="paddingt_30">
            <h2 class='titre_chapitre_container marginb_20'>
                <span class='titre_leger'>LES ARTISTES</span>
                <br>
                <span class='titre_gras'>MUSICIENS</span>
            </h2>
        </div>

        <!-- DIRECTEUR MUSICAL -->
        <div class="grid_2col1fr_400 grid_column_gap24 margin_section_botton">

            <div class="grid_2col_45_55">

                <!-- LOOP MUSICIEN chef  -->
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
                        $loop_directeur_musical->the_post();?>

                        <!-- ILLUSTRATION -->
                        <img class='img_ajust_liste' src="<?php echo get_post_meta($post->ID, 'metadata_611', true); ?>" alt="Photo du directeur musical">
                        

                        <!-- INFORMATION -->
                        <div class="flex flex_align_end paddingt_15 paddingb_15 paddingr_15 paddingl_15 bg_color_orchestre tx_color_blanc">
                            <div>
                                <div class="titre_card_container">
                                    <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                    <p class="titre_leger"><?php echo get_post_meta($post->ID, 'metadata_605', true); ?></p>
                                </div>
                                <div class="fleche fleche_blanc alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_blanc"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_blanc.png" alt=""></a></div>
                            </div>
                            
                        </div>
            
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            </div>
        </div>

        <!-- LES MUSICIENS -->
        <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">

                <!-- LOOP musicien  -->
                <?php 
                $args_musicien = array(
                    'post_type' => 'orchestre',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        array(
                        'taxonomy' => 'categorie_orchestre',
                        'field'    => 'slug',
                        'terms'    => 'musicien')
                    ),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $loop_musicien = new WP_Query( $args_musicien );
                if ($loop_musicien->have_posts()) :
                    while ($loop_musicien->have_posts()) :
                        $loop_musicien->the_post();?>
                        <div class="">
                            <!-- ILLUSTRATION -->
                            <img class='img_ajust_liste' src="<?php echo get_post_meta($post->ID, 'metadata_611', true); ?>" alt="Photo du musicien">

                            <!-- INFORMATION -->
                            <div class="concert_card_border margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                <div>
                                    <div class="titre_card_container">
                                        <!-- NOM DU MUSICIEN -->
                                        <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                        <!-- POSTES -->
                                        <?php for ($i = 1; $i <= 4; $i++):
                                            if (!empty(get_post_meta($post->ID, 'metadata_604_'.$i, true))): ?>
                                                <p class="titre_leger fontsize_16 fontsize_15_mob paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_604_'.$i, true); ?></p>
                                            <?php endif;
                                        endfor; ?>
                                        <!-- DESCRIPTION COURTE -->
                                        <?php if (!empty(get_post_meta($post->ID, 'metadata_606', true))): ?>
                                            <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_606', true); ?></p>
                                        <?php endif;?>
                                    </div>
                                    <div class="fleche fleche_orchestre alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_orchestre"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_vert.png" alt=""></a></div>
                                </div>
                                
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            
        </div>
    </section>



    <!-- --------------------------------- -->
    <!-- LISTE DES ADMINISTRATIFS -->
    <!-- --------------------------------- -->
    <section class="margin_section_botton">

        <!-- Titre -->
        <div class="paddingt_30">
            <h2 class='titre_chapitre_container marginb_20'>
                <span class='titre_leger'>L'ÉQUIPE</span>
                <br>
                <span class='titre_gras'>ADMINISTRATIVE ET TECHNIQUE</span>
            </h2>
        </div>

        <!-- DIRECTEUR -->
        <div class="grid_2col1fr_400 grid_column_gap24 margin_section_botton">

            <div class="grid_2col_45_55">

                <!-- LOOP Directeur  -->
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
                        $loop_directeur_musical->the_post();?>

                        <!-- ILLUSTRATION -->
                        <img class='img_ajust_liste' src="<?php echo get_post_meta($post->ID, 'metadata_611', true); ?>" alt="Photo du directeur musical">
                        
                        <!-- INFORMATION -->
                        <div class="flex flex_align_end paddingt_15 paddingb_15 paddingr_15 paddingl_15 bg_color_orchestre tx_color_blanc">
                            <div>
                                <div class="titre_card_container">
                                    <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                    <p class="titre_leger"><?php echo get_post_meta($post->ID, 'metadata_605', true); ?></p>
                                </div>
                            </div>
                            
                        </div>
            
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            </div>
        </div>

        <!-- LES ADMINISTRATIFS -->
        <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">

            

                <!-- LOOP ADMINISTRATIFS  -->
                <?php 
                $args_administratif = array(
                    'post_type' => 'orchestre',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        array(
                        'taxonomy' => 'categorie_orchestre',
                        'field'    => 'slug',
                        'terms'    => 'administratif')
                    ),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $loop_administratif = new WP_Query( $args_administratif );
                if ($loop_administratif->have_posts()) :
                    while ($loop_administratif->have_posts()) :
                        $loop_administratif->the_post();?>
                        <div class="">
                            <!-- ILLUSTRATION -->
                            <img class='img_ajust_liste' src="<?php echo get_post_meta($post->ID, 'metadata_611', true); ?>" alt="Photo du musicien">

                            <!-- INFORMATION -->
                            <div class="concert_card_border margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                <div>
                                    <div class="titre_card_container">
                                        <!-- NOM DU ADMINISTRATIF -->
                                        <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                        <!-- POSTES -->
                                        <?php for ($i = 1; $i <= 4; $i++):
                                            if (!empty(get_post_meta($post->ID, 'metadata_604_'.$i, true))): ?>
                                                <p class="titre_leger fontsize_16 fontsize_15_mob paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_604_'.$i, true); ?></p>
                                            <?php endif;
                                        endfor; ?>
                                        <!-- DESCRIPTION COURTE -->
                                        <?php if (!empty(get_post_meta($post->ID, 'metadata_606', true))): ?>
                                            <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_606', true); ?></p>
                                        <?php endif;?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            
        </div>
    </section>


    <!-- --------------------------------- -->
    <!-- LISTE DES ASSOCIATIONS -->
    <!-- --------------------------------- -->
    <section class="margin_section_botton">

        <!-- Titre -->
        <div class="borderb marginb_20 paddingt_30">
            <h2 class='titre_chapitre_container marginb_20'>
                <span class='titre_leger'>L'ASSOCIATION</span>
                <br>
                <span class='titre_gras'>BUREAU</span>
            </h2>
        </div>

        <!-- LES ASSOCIATIONS -->
        <div class="grid_2colmax_20_110 grid_row_gap20_mob marginr_40 marginl_20">

            <!-- ICONE -->
            <div>
                <img class='' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/association_icone.png" alt="Logo Orchestre de Picardie">
            </div>
            
            <!-- LES MEMBRES -->
            <div>
                <!-- PRESIDENT  -->
                <?php 
                $args_president = array(
                    'post_type' => 'orchestre',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        array(
                        'taxonomy' => 'categorie_orchestre',
                        'field'    => 'slug',
                        'terms'    => 'president')
                    ),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $loop_president = new WP_Query( $args_president );
                if ($loop_president->have_posts()) :
                    while ($loop_president->have_posts()) :
                        $loop_president->the_post();?>
                        <div class="">
                        
                            <!-- INFORMATION -->
                            <div class="grid_2col24_46 grid_column_gap24 align_start marginb_20 ">
                                <!-- NOM DU PRESIDENT -->
                                <div>
                                    <p class="paddingb_5 titre_gras texte_right texte_left_mob"><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                    <img class='img_ajust border_gris_clair' src="<?php echo get_post_meta($post->ID, 'metadata_611', true); ?>" alt="Photo du directeur">
                                </div>
                                <!-- DESCRIPTION COURTE -->
                                <?php if (!empty(get_post_meta($post->ID, 'metadata_606', true))): ?>
                                    <p class="fontsize_13 ubuntu_fin"><?php echo get_post_meta($post->ID, 'metadata_606', true); ?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>


                <!-- MEMBRES  -->
                <?php 
                $args_bureau = array(
                    'post_type' => 'orchestre',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        array(
                        'taxonomy' => 'categorie_orchestre',
                        'field'    => 'slug',
                        'terms'    => 'bureau')
                    ),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $loop_bureau = new WP_Query( $args_bureau );
                if ($loop_bureau->have_posts()) :
                    while ($loop_bureau->have_posts()) :
                        $loop_bureau->the_post();?>
                        <div class="">
                           
                            <!-- INFORMATION -->
                            <div class="grid_2col24_46 grid_column_gap24 align_start marginb_20 ">
                                <!-- NOM DU ASSOCIATION -->
                                <p class="titre_gras texte_right texte_left_mob"><?php echo get_post_meta($post->ID, 'metadata_603', true); ?></p>
                                <!-- DESCRIPTION COURTE -->
                                <?php if (!empty(get_post_meta($post->ID, 'metadata_606', true))): ?>
                                    <p class="fontsize_13 ubuntu_fin"><?php echo get_post_meta($post->ID, 'metadata_606', true); ?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>

            </div>
            
        </div>
    </section>


    </section>

</article>


</main>

<?php
 get_footer();
?>
