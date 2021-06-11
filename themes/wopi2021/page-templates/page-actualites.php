<?php
/*
Template Name: page_actualites
*/
?>
<?php

 get_header();
 get_template_part('template-parts/header','page');

?>
<main>


    <article>

        <!-- ----------------------- -->
        <!-- ACCENT ACTU  -->
        <!-- ----------------------- -->
        <section class="margint_90 margin_section_botton">

            <!-- LOOP ACTU accent -->
            <?php 
            $args_actu_accent = array(
                'post_type' => 'actualite',
                'posts_per_page' => 1,

                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'saison',
                        'field'    => 'slug',
                        'terms'    => array('2020-2021', '2021-2022')),
                    array(
                        'taxonomy' => 'categorie_actu',
                        'field'    => 'slug',
                        'terms'    => 'accent')),
                'orderby' => 'meta_value',
                'meta_key' => 'metadata_903',
                'order'=> 'DESC'
                );
            $loop_actu_accent = new WP_Query( $args_actu_accent );
            if ($loop_actu_accent->have_posts()) :
                while ($loop_actu_accent->have_posts()) :
                    $loop_actu_accent->the_post();
                    ?>

                    <!-- TITRE MOBILE -->
                    <div class="block_mobile margin_section_botton_mobile">
                        <h2 class='titre_card_container_grand'>
                            <span class='titre_gras'>L'ACCENT SUR</span>
                            <br>
                            <span class='titre_leger'>L’ACTUALITÉ</span>
                        </h2>
                    </div>

                    <div class="grid_2col12">
                        <!-- ILLUSTRATION -->
                        <div class="concert_card nopagemarge_mob encoche_one_card grid grid_area_21_desk">
                            <img class='img_ajust_liste grid_area_21' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration de l'actu">
                            <div class="grid_area_21 encoche_blanc_grand"></div>
                            
                        </div>
                    
                        <!-- INFORMATIONS -->
                        <div class="grid paddingr_30 paddingb_10">
                            <!-- TITRE DESKTOP-->
                            <div class="hide_desktop">
                                <h2 class='titre_card_container_grand'>
                                    <span class='titre_gras'>L'ACCENT SUR</span>
                                    <br>
                                    <span class='titre_leger'>L’ACTUALITÉ</span>
                                </h2>
                            </div>

                            <!-- DESCRIPTION -->
                            <div class='liste_art_comp paddingt_12'>
                                <div class="artiste marginb_10 margint_15_mobile">
                                    <!-- TITRE -->
                                    <div class="paddingr_8 ubuntu_bold">
                                        <?php echo get_post_meta($post->ID, 'metadata_901', true); ?> <?php echo get_post_meta($post->ID, 'metadata_902', true); ?>
                                    </div>
                                </div>
                                    <!-- DESCRIPTION -->
                                    <?php if(!empty(get_post_meta($post->ID, 'metadata_904', true))) { ?>
                                        <div class="artiste">
                                            <div class="ubuntu_fin">
                                                <?php echo get_post_meta($post->ID, 'metadata_904', true); ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                            </div>

                            <!-- EN SAVOIR PLUS -->
                            <div class="fleche fleche_accueil alignself_end justify_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                        </div>
                    </div>

            <?php endwhile; endif; wp_reset_query(); ?>
        </section>

        <!-- --------------------------------- -->
        <!-- LES COULISSES -->
        <!-- --------------------------------- -->

        <!-- LOOP LES COULISSES   -->
        <?php 
        $args_actu_coulisse = array(
            'post_type' => 'actualite',
            'posts_per_page' => -1,

            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'categorie_actu',
                    'field'    => 'slug',
                    'terms'    => 'coulisse'),
                array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2020-2021', '2021-2022'))),
            'orderby' => 'meta_value',
            'meta_key' => 'metadata_903',
            'order'=> 'DESC'
        );
        $loop_actu_coulisse = new WP_Query( $args_actu_coulisse );
        if ($loop_actu_coulisse->have_posts()) :?>

            <section class="margin_section_botton">

                <!-- Titre -->
                <div class="paddingt_30">
                    <h2 class='titre_chapitre_container marginb_20'>
                        <span class='titre_leger'>LES COULISSES</span>
                        <br>
                        <span class='titre_gras'>DE L’ORCHESTRE</span>
                    </h2>
                </div>
                <!-- LES ACTUS  -->
                <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">
                    <?php while ($loop_actu_coulisse->have_posts()) :
                        $loop_actu_coulisse->the_post();?>

                            <!-- L'ACTU  -->
                            <div class="encoche_list_card">
                                <!-- ILLUSTRATION -->
                                <div class="grid nopagemarge_mobxs">
                                    <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_907', true); ?>" alt="Photo de l'actu">
                                    <div class="grid_area_11 encoche_blanc"></div>
                                </div>                            
                                <!-- INFORMATION -->
                                <div class="margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                    <div>
                                        <div>
                                            <!-- Titre -->
                                            <p class="ubuntu_bold paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_901', true); ?> <?php echo get_post_meta($post->ID, 'metadata_902', true); ?></p>
                                            <!-- DESCRIPTION COURTE -->
                                            <?php if (!empty(get_post_meta($post->ID, 'metadata_904', true))): ?>
                                                <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_904', true); ?></p>
                                            <?php endif;?>
                                        </div>
                                        <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                                    </div>
                                    
                                </div>
                            </div>
                    <?php endwhile;?>
                </div>
            </section>
        <?php endif; 
        wp_reset_query(); ?>


        <!-- --------------------------------- -->
        <!-- ACTUS JEUNES -->
        <!-- --------------------------------- -->

        <!-- LOOP ACTUS JEUNES   -->
        <?php 
        $args_actu_jeunes = array(
            'post_type' => 'actualite',
            'posts_per_page' => -1,

            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'categorie_actu',
                    'field'    => 'slug',
                    'terms'    => 'jeune'),
                array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2020-2021', '2021-2022'))),
            'orderby' => 'meta_value',
            'meta_key' => 'metadata_903',
            'order'=> 'DESC'
        );
        $loop_actu_jeunes = new WP_Query( $args_actu_jeunes );
        if ($loop_actu_jeunes->have_posts()) :?>

            <section class="margin_section_botton">

                <!-- Titre -->
                <div class="paddingt_30">
                    <h2 class='titre_chapitre_container marginb_20'>
                        <span class='titre_leger'>ACTUS</span>
                        <br>
                        <span class='titre_gras'>JEUNES PUBLICS</span>
                    </h2>
                </div>
                <!-- LES ACTUS  -->
                <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">
                    <?php while ($loop_actu_jeunes->have_posts()) :
                        $loop_actu_jeunes->the_post();?>

                            <!-- L'ACTU  -->
                            <div class="encoche_list_card">
                                <!-- ILLUSTRATION -->
                                <div class="grid nopagemarge_mobxs">
                                    <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_907', true); ?>" alt="Photo de l'actu">
                                    <div class="grid_area_11 encoche_blanc"></div>
                                </div>                            
                                <!-- INFORMATION -->
                                <div class="margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                    <div>
                                        <div>
                                            <!-- Titre -->
                                            <p class="ubuntu_bold paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_901', true); ?> <?php echo get_post_meta($post->ID, 'metadata_902', true); ?></p>
                                            <!-- DESCRIPTION COURTE -->
                                            <?php if (!empty(get_post_meta($post->ID, 'metadata_904', true))): ?>
                                                <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_904', true); ?></p>
                                            <?php endif;?>
                                        </div>
                                        <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                                    </div>
                                    
                                </div>
                            </div>
                    <?php endwhile;?>
                </div>
            </section>
        <?php endif; 
        wp_reset_query(); ?>


        <!-- --------------------------------- -->
        <!-- EVENEMENTS -->
        <!-- --------------------------------- -->

        <!-- LOOP EVENEMENTS  -->
        <?php 
        $args_actu_event = array(
            'post_type' => 'actualite',
            'posts_per_page' => -1,

            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'categorie_actu',
                    'field'    => 'slug',
                    'terms'    => 'evenement'),
                array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2020-2021', '2021-2022'))),
            'orderby' => 'meta_value',
            'meta_key' => 'metadata_903',
            'order'=> 'DESC'
        );
        $loop_actu_event = new WP_Query( $args_actu_event );
        if ($loop_actu_event->have_posts()) :?>

            <section class="margin_section_botton">

                <!-- Titre -->
                <div class="paddingt_30">
                    <h2 class='titre_chapitre_container marginb_20'>
                        <span class='titre_leger'>ÉVÉNEMENTS</span>
                        <br>
                        <span class='titre_gras'>DE L'ORCHESTRE</span>
                    </h2>
                </div>
                <!-- LES EVENTS  -->
                <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">
                    <?php while ($loop_actu_event->have_posts()) :
                        $loop_actu_event->the_post();?>

                            <!-- L'EVENT  -->
                            <div class="encoche_list_card">
                                <!-- ILLUSTRATION -->
                                <div class="grid nopagemarge_mobxs">
                                    <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_907', true); ?>" alt="Photo de l'actu">
                                    <div class="grid_area_11 encoche_blanc"></div>
                                </div>                            
                                <!-- INFORMATION -->
                                <div class="margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                    <div>
                                        <div>
                                            <!-- Titre -->
                                            <p class="ubuntu_bold paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_901', true); ?> <?php echo get_post_meta($post->ID, 'metadata_902', true); ?></p>
                                            <!-- DESCRIPTION COURTE -->
                                            <?php if (!empty(get_post_meta($post->ID, 'metadata_904', true))): ?>
                                                <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_904', true); ?></p>
                                            <?php endif;?>
                                        </div>
                                        <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                                    </div>
                                    
                                </div>
                            </div>
                    <?php endwhile;?>
                </div>
            </section>
        <?php endif; 
        wp_reset_query(); ?>

        <!-- --------------------------------- -->
        <!-- ACTUS EN LIGNE -->
        <!-- --------------------------------- -->

        <!-- LOOP ACTUS EN LIGNE  -->
        <?php 
        $args_actu_ligne = array(
            'post_type' => 'actualite',
            'posts_per_page' => -1,

            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'categorie_actu',
                    'field'    => 'slug',
                    'terms'    => 'ligne'),
                array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2020-2021', '2021-2022'))),
            'orderby' => 'meta_value',
            'meta_key' => 'metadata_903',
            'order'=> 'DESC'
        );
        $loop_actu_ligne = new WP_Query( $args_actu_ligne );
        if ($loop_actu_ligne->have_posts()) :?>

            <section class="margin_section_botton">

                <!-- Titre -->
                <div class="paddingt_30">
                    <h2 class='titre_chapitre_container marginb_20'>
                        <span class='titre_leger'>ACTUALITÉS</span>
                        <br>
                        <span class='titre_gras'>EN LIGNE</span>
                    </h2>
                </div>
                <!-- LES ACTUS  -->
                <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">
                    <?php while ($loop_actu_ligne->have_posts()) :
                        $loop_actu_ligne->the_post();?>

                            <!-- L'ACTU  -->
                            <div class="encoche_list_card">
                                <!-- ILLUSTRATION -->
                                <div class="grid nopagemarge_mobxs">
                                    <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_907', true); ?>" alt="Photo de l'actu">
                                    <div class="grid_area_11 encoche_blanc"></div>
                                </div>                            
                                <!-- INFORMATION -->
                                <div class="margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                    <div>
                                        <div>
                                            <!-- Titre -->
                                            <p class="ubuntu_bold paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_901', true); ?> <?php echo get_post_meta($post->ID, 'metadata_902', true); ?></p>
                                            <!-- DESCRIPTION COURTE -->
                                            <?php if (!empty(get_post_meta($post->ID, 'metadata_904', true))): ?>
                                                <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_904', true); ?></p>
                                            <?php endif;?>
                                        </div>
                                        <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                                    </div>
                                    
                                </div>
                            </div>
                    <?php endwhile;?>
                </div>
            </section>
        <?php endif; 
        wp_reset_query(); ?>
                





    </article>


</main>


<?php
 get_footer();
?>