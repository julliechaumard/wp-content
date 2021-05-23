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
    <!-- COMPOSITEUR EN RESIDENCE -->
    <!-- --------------------------------- -->
    <section class="grid_2col40_45 paddingt_30 margin_section_botton">

        <!-- Titre -->
        <div class="">
            <h2 class='titre_chapitre_container'>
                <span class='titre_leger'>COMPOSITEUR</span>
                <br>
                <span class='titre_gras'>EN RÉSIDENCE</span>
            </h2>
        </div>

        <!-- COMPOSITEUR -->
        <div class="">

                <!-- LOOP COMPOSITEUR  -->
                <?php 
                $args_residence = array(
                    'post_type' => 'artiste_invite',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'categorie_artiste_invite',
                            'field'    => 'slug',
                            'terms'    => 'residence'),
                        array(
                            'taxonomy' => 'saison',
                            'field'    => 'slug',
                            'terms'    => array('2021-2022'))),
                );
                $loop_residence = new WP_Query( $args_residence );
                if ($loop_residence->have_posts()) :
                    while ($loop_residence->have_posts()) :
                        $loop_residence->the_post();?>
                        <div class="encoche_one_card">
                            <!-- ILLUSTRATION -->
                            <div class="grid">
                                <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_130', true); ?>" alt="Photo du musicien">
                                <div class="grid_area_11 encoche_blanc"></div>
                            </div>
                            <!-- INFORMATION -->
                            <div class="concert_card_border margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                <div>
                                    <div class="titre_card_container">
                                        <!-- NOM DU MUSICIEN -->
                                        <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_122', true); ?></p>
                                        <!-- POSTES -->
                                        <div class="tx_simple_size">
                                            <?php for ($i = 1; $i <= 4; $i++):
                                                if (!empty(get_post_meta($post->ID, 'metadata_123_'.$i, true))): ?>
                                                    <p class="titre_leger paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_123_'.$i, true); ?></p>
                                                <?php endif;
                                            endfor; ?>
                                        </div>
                                        <!-- DESCRIPTION COURTE -->
                                        <?php if (!empty(get_post_meta($post->ID, 'metadata_125', true))): ?>
                                            <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_125', true); ?></p>
                                        <?php endif;?>
                                    </div>
                                    <div class="fleche fleche_saison alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_saison"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_rose.png" alt=""></a></div>
                                </div>
                                
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            
        </div>
    </section>

    <!-- --------------------------------- -->
    <!-- LISTE DES CHEFS d'ORCHESTRE INVITES -->
    <!-- --------------------------------- -->
    <section class="margin_section_botton">

        <!-- Titre -->
        <div class="paddingt_30">
            <h2 class='titre_chapitre_container'>
                <span class='titre_leger'>CHEFS D'ORCHESTRE</span>
                <br>
                <span class='titre_gras'>INVITÉS</span>
            </h2>
        </div>

        <!-- LES CHEFS d'ORCHESTRE INVITES -->
        <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">

                <!-- LOOP CHEFS d'ORCHESTRE INVITES  -->
                <?php 
                $args_chef_invite = array(
                    'post_type' => 'artiste_invite',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'categorie_artiste_invite',
                            'field'    => 'slug',
                            'terms'    => 'chef'),
                        array(
                            'taxonomy' => 'saison',
                            'field'    => 'slug',
                            'terms'    => array('2021-2022'))),
                );
                $loop_chef_invite = new WP_Query( $args_chef_invite );
                if ($loop_chef_invite->have_posts()) :
                    while ($loop_chef_invite->have_posts()) :
                        $loop_chef_invite->the_post();?>
                        <div class="encoche_list_card">
                            <!-- ILLUSTRATION -->
                            <div class="grid">
                                <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_130', true); ?>" alt="Photo du musicien">
                                <div class="grid_area_11 encoche_blanc"></div>
                          </div>
                            <!-- INFORMATION -->
                            <div class="concert_card_border margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                <div>
                                    <div class="titre_card_container">
                                        <!-- NOM DU MUSICIEN -->
                                        <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_122', true); ?></p>
                                        <!-- POSTES -->
                                        <?php for ($i = 1; $i <= 4; $i++):
                                            if (!empty(get_post_meta($post->ID, 'metadata_123_'.$i, true))): ?>
                                                <p class="titre_leger paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_123_'.$i, true); ?></p>
                                            <?php endif;
                                        endfor; ?>
                                        <!-- DESCRIPTION COURTE -->
                                        <?php if (!empty(get_post_meta($post->ID, 'metadata_125', true))): ?>
                                            <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_125', true); ?></p>
                                        <?php endif;?>
                                    </div>
                                    <div class="fleche fleche_saison alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_saison"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_rose.png" alt=""></a></div>
                                </div>
                                
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            
        </div>
    </section>

    <!-- --------------------------------- -->
    <!-- LISTE DES SOLISTES INVITES -->
    <!-- --------------------------------- -->
    <section class="margin_section_botton">

        <!-- Titre -->
        <div class="paddingt_30">
            <h2 class='titre_chapitre_container'>
                <span class='titre_leger'>SOLISTES</span>
                <br>
                <span class='titre_gras'>INVITÉS</span>
            </h2>
        </div>

        <!-- LES SOLISTES INVITES  -->
        <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">

                <!-- LOOP SOLISTES INVITES   -->
                <?php 
                $args_soliste = array(
                    'post_type' => 'artiste_invite',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'categorie_artiste_invite',
                            'field'    => 'slug',
                            'terms'    => 'soliste'),
                        array(
                            'taxonomy' => 'saison',
                            'field'    => 'slug',
                            'terms'    => array('2021-2022'))),
                );
                $loop_soliste = new WP_Query( $args_soliste );
                if ($loop_soliste->have_posts()) :
                    while ($loop_soliste->have_posts()) :
                        $loop_soliste->the_post();?>
                            <div class="encoche_list_card">
                                <!-- ILLUSTRATION -->
                                <div class="grid">
                                    <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_130', true); ?>" alt="Photo du musicien">
                                    <div class="grid_area_11 encoche_blanc"></div>
                            </div>                            
                            <!-- INFORMATION -->
                            <div class="concert_card_border margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                <div>
                                    <div class="titre_card_container">
                                        <!-- NOM DU MUSICIEN -->
                                        <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_122', true); ?></p>
                                        <!-- POSTES -->
                                        <?php for ($i = 1; $i <= 4; $i++):
                                            if (!empty(get_post_meta($post->ID, 'metadata_123_'.$i, true))): ?>
                                                <p class="titre_leger paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_123_'.$i, true); ?></p>
                                            <?php endif;
                                        endfor; ?>
                                        <!-- DESCRIPTION COURTE -->
                                        <?php if (!empty(get_post_meta($post->ID, 'metadata_125', true))): ?>
                                            <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_125', true); ?></p>
                                        <?php endif;?>
                                    </div>
                                    <div class="fleche fleche_saison alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_saison"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_rose.png" alt=""></a></div>
                                </div>
                                
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            
        </div>
    </section>

    <!-- --------------------------------- -->
    <!-- LISTE DES AUTRES ARTISTES INVITES -->
    <!-- --------------------------------- -->
    <section class="margin_section_botton">

        <!-- Titre -->
        <div class="paddingt_30">
            <h2 class='titre_chapitre_container'>
                <span class='titre_leger'>AUTRES ARTISTES</span>
                <br>
                <span class='titre_gras'>INVITÉS</span>
            </h2>
        </div>

        <!-- LES AUTRES ARTISTES INVITES  -->
        <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">

                <!-- LOOP AUTRES ARTISTES INVITES   -->
                <?php 
                $args_autre = array(
                    'post_type' => 'artiste_invite',
                    'posts_per_page' => -1,

                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'categorie_artiste_invite',
                            'field'    => 'slug',
                            'terms'    => 'autre'),
                        array(
                            'taxonomy' => 'saison',
                            'field'    => 'slug',
                            'terms'    => array('2021-2022'))),
                );
                $loop_autre = new WP_Query( $args_autre );
                if ($loop_autre->have_posts()) :
                    while ($loop_autre->have_posts()) :
                        $loop_autre->the_post();?>
                        <div class="encoche_list_card">
                            <!-- ILLUSTRATION -->
                            <div class="grid">
                                <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_130', true); ?>" alt="Photo du musicien">
                                <div class="grid_area_11 encoche_blanc"></div>
                            </div>
                            <!-- INFORMATION -->
                            <div class="concert_card_border margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                <div>
                                    <div class="titre_card_container">
                                        <!-- NOM DU MUSICIEN -->
                                        <p class="titre_gras paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_122', true); ?></p>
                                        <!-- POSTES -->
                                        <?php for ($i = 1; $i <= 4; $i++):
                                            if (!empty(get_post_meta($post->ID, 'metadata_123_'.$i, true))): ?>
                                                <p class="titre_leger paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_123_'.$i, true); ?></p>
                                            <?php endif;
                                        endfor; ?>
                                        <!-- DESCRIPTION COURTE -->
                                        <?php if (!empty(get_post_meta($post->ID, 'metadata_125', true))): ?>
                                            <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_125', true); ?></p>
                                        <?php endif;?>
                                    </div>
                                    <div class="fleche fleche_saison alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_saison"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_rose.png" alt=""></a></div>
                                </div>
                                
                            </div>
                        </div>
                    <?php endwhile; 
                endif; 
                wp_reset_query(); ?>
            
        </div>
    </section>


</article>


</main>

<?php
 get_footer();
?>
