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

<!-- ----------------------- -->
<!-- PRÉSENTATION DE LA SAISON  -->
<!-- ----------------------- -->

<section class="margin_section_botton">
    <!-- Titre -->
    <div class="paddingt_desk_30 paddingt_mob_15">
        <h2 class='titre_chapitre_container marginb_20'>
            <span class='titre_leger'>PRÉSENTATION</span>
            <br>
            <span class='titre_gras'>DE LA SAISON</span>
        </h2>
    </div>

    <!-- LES VIDEOS  -->
    <div class="grid_2col_11 grid_column_gap24 grid_row_gap50">
                <!-- 1 BLOC  -->
                <div>
                    <!-- VIDEO -->
                    <div class="nopagemarge_mobxs">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vszdaOWoz_Q" allowfullscreen></iframe>
                        </div>
                    </div>                            
                </div>

                <!-- 2 BLOC  -->
                <div>
                    <!-- VIDEO -->
                    <div class="nopagemarge_mobxs">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UXANiAhpUlI" allowfullscreen></iframe>
                        </div>
                    </div>                            
                </div>
    </div>

</section>


<!-- ----------------------- -->
<!-- PROCHAIN CONCERT        -->
<!-- ----------------------- -->

<section class="margint_70 margin_section_botton">

    <!-- Titre PROCHAIN CONCERT AU-DESSUS DU BLOC -->
    <div class="marginb_35">
        <h2 class='titre_chapitre_container marginb_20'>
            <span class='titre_gras'>DÉCOUVREZ NOTRE</span>
            <br>
            <span class='titre_leger'>PROCHAIN CONCERT...</span>
        </h2>
    </div>

    <!-- TITRE PROCHAIN CONCERT DANS BLOC-->
    <div>
        <p class="texte_right nopagemarge_mob ubuntu_moyen tx_color_gris_clair_genre">PROCHAIN CONCERT</p>                        
    </div>

    <!-- LOOP CONCERT accueil_prochain_concert -->
    <?php 
    $args_prochain_concert = array(
        'post_type' => 'concert',
        'posts_per_page' => 1,

        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'saison',
                'field'    => 'slug',
                'terms'    => array('2020-2021', '2021-2022')),
            array(
                'taxonomy' => 'placement',
                'field'    => 'slug',
                'terms'    => 'accueil_prochain_concert'))

        );
    $loop_prochain_concert = new WP_Query( $args_prochain_concert );
    if ($loop_prochain_concert->have_posts()) :
        while ($loop_prochain_concert->have_posts()) :
            $loop_prochain_concert->the_post();
            ?>

            <!-- ILLUSTRATION -->
            <div class="grid_2col12">
                <div class="concert_card nopagemarge_mob encoche_one_card grid_2col20px1fr grid_area_21_desk">

                    <!-- ILLUSTRATION -->
                    <img class='img_ajust_liste grid_area_21' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration du concert">
                    
                    <!-- DATE CADRE -->

                    <!-- RECUPERER LES DATES -->
                    <?php 
                    $datedebut = '';
                    $datefin = '';
                    if (!empty(get_post_meta($post->ID, 'metadata_180_1', true))) : 
                        $datedebut = get_post_meta($post->ID, 'metadata_180_1', true);
                    endif;
                    if (!empty(get_post_meta($post->ID, 'metadata_180_10', true))) : 
                        $datefin = get_post_meta($post->ID, 'metadata_180_10', true);
                    endif;
                    if (empty(get_post_meta($post->ID, 'metadata_180_1', true))) : 
                        $datedebut = get_post_meta($post->ID, 'metadata_180_10', true);
                        $datefin = '';
                    endif;?>

                    <!-- AFFICHER LES DATES -->
                    <div class="grid_area_21 date_cadre_container">
                        <div class="date_cadre_border date_cadre_1"></div>
                        <div class="date_cadre_2"></div>
                        <div class="relative date_cadre_texte date_cadre_texte_1 tx_color_noir_fonce"><span class="date_cadre_texte_jour"><?php echo mysql2date('j', $datedebut); ?></span><span class="date_cadre_texte_mois tx_color_noir_clair"><?php echo mysql2date('M', $datedebut); ?></span></div>
                        <div class="relative date_cadre_texte date_cadre_texte_2 tx_color_noir_fonce"><span class="date_cadre_texte_jour"><?php echo mysql2date('j', $datefin); ?></span><span class="date_cadre_texte_mois tx_color_noir_clair"><?php echo mysql2date('M', $datefin); ?></span></div>
                    </div>

                    <!-- RESET VARIABLES -->
                    <?php unset($datedebut); unset($datefin); ?>

                    <!-- GENRE -->
                    <div class="text_vertical grid_area_11 alignself_end marginb_4">
                        <p class="texte_right ubuntu_moyen tx_color_gris_clair_genre">
                            <?php $concert_genre =  wp_get_post_terms($post->ID, 'genre', array("fields" => "names"));
                            if (!empty($concert_genre)) {echo $concert_genre[0];}?>
                        </p>                        
                    </div>

                </div>
            
            <!-- INFORMATION -->
            <div class="grid paddingt_30 paddingr_8 paddingb_10 paddingl_15 prochain_concert_card_border_desk prochain_concert_card_border_mob marginr_-15_mobile marginl_5_mobile">
                        <!-- TITRE -->
                        <div class="">
                            <h2 class='titre_card_container'>
                                <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_199', true); ?></span>
                                <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_200', true); ?></span>
                            </h2>
                        </div>

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
                        
                            <!-- BOUCLE SUR LES 10 DATES POUR CHERCHER UN CONCERT ANNULE OU REPORTE-->
                            
                            <?php 
                            $check_annul = '';
                            for ($i = 1; $i <= 10; $i++) :

                                // SI LA DATE EXISTE
                                if(!empty(get_post_meta($post->ID, 'metadata_180_'.$i, true))) :
                                    if(get_post_meta( $post->ID, 'metadata_183_'.$i, true)=="annul") {
                                        $check_annul = "oui";
                                    };
                                    if(get_post_meta($post->ID, 'metadata_184_'.$i, true)=="report") {
                                        $check_annul = "oui";
                                    };
                                endif;
                            endfor;?>
                            <!-- CONCERT ANNULE / REPORTE -->
                            <?php if ($check_annul=="oui") : ?>
                                <div class="paddingb_1">
                                        <p class="alert ubuntu_moyen fontsize_13">Dates annulées ou reportées</p>
                                </div>
                            <?php endif; ?>
                            <!-- RESETER LES VARIABLES -->
                            <?php 
                            unset($check_annul);?>
                        </div>

                        <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                    </div>


            </div>

    <?php endwhile; endif; wp_reset_query(); ?>
</section>


<!-- ----------------------- -->
<!-- PROCHAIN CONCERT JEUNE  -->
<!-- ----------------------- -->

<section class="margint_70 margin_section_botton">

    <!-- Titre PROCHAIN CONCERT AU-DESSUS DU BLOC -->
    <div class="marginb_35">
        <h2 class='titre_chapitre_container marginb_20'>
            <span class='titre_leger'>...ET NOTRE PROCHAIN</span>
            <br>
            <span class='titre_gras'>CONCERT POUR PETITS ET GRANDS</span>
        </h2>
    </div>



        <!-- TITRE PROCHAIN CONCERT DANS BLOC -->
        <div>
            <p class="texte_right nopagemarge_mob ubuntu_moyen tx_color_gris_clair_genre">PROCHAIN CONCERT JEUNE</p>                        
        </div>

        <!-- LOOP CONCERT accueil_prochain_concert -->
        <?php 
        $args_prochain_concert = array(
            'post_type' => 'concert',
            'posts_per_page' => 1,

            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'saison',
                    'field'    => 'slug',
                    'terms'    => array('2020-2021', '2021-2022')),
                array(
                    'taxonomy' => 'placement',
                    'field'    => 'slug',
                    'terms'    => 'accueil_prochain_concert_jeune'))

            );
        $loop_prochain_concert = new WP_Query( $args_prochain_concert );
        if ($loop_prochain_concert->have_posts()) :
            while ($loop_prochain_concert->have_posts()) :
                $loop_prochain_concert->the_post();
                ?>

                <!-- ILLUSTRATION -->
                <div class="grid_2col12">
                    <div class="concert_card nopagemarge_mob encoche_one_card grid_2col20px1fr grid_area_21_desk">

                        <!-- ILLUSTRATION -->
                        <img class='img_ajust_liste grid_area_21' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration du concert">
                        
                        <!-- DATE CADRE -->

                        <!-- RECUPERER LES DATES -->
                        <?php 
                        $datedebut = '';
                        $datefin = '';
                        if (!empty(get_post_meta($post->ID, 'metadata_180_1', true))) : 
                            $datedebut = get_post_meta($post->ID, 'metadata_180_1', true);
                        endif;
                        if (!empty(get_post_meta($post->ID, 'metadata_180_10', true))) : 
                            $datefin = get_post_meta($post->ID, 'metadata_180_10', true);
                        endif;
                        if (empty(get_post_meta($post->ID, 'metadata_180_1', true))) : 
                            $datedebut = get_post_meta($post->ID, 'metadata_180_10', true);
                            $datefin = '';
                        endif;?>
                        <!-- AFFICHER LES DATES -->
                        <div class="grid_area_21 date_cadre_container">
                            <div class="date_cadre_border date_cadre_1"></div>
                            <div class="date_cadre_2"></div>
                            <div class="relative date_cadre_texte date_cadre_texte_1 tx_color_noir_fonce"><span class="date_cadre_texte_jour"><?php echo mysql2date('j', $datedebut); ?></span><span class="date_cadre_texte_mois tx_color_noir_clair"><?php echo mysql2date('M', $datedebut); ?></span></div>
                            <div class="relative date_cadre_texte date_cadre_texte_2 tx_color_noir_fonce"><span class="date_cadre_texte_jour"><?php echo mysql2date('j', $datefin); ?></span><span class="date_cadre_texte_mois tx_color_noir_clair"><?php echo mysql2date('M', $datefin); ?></span></div>
                        </div>

                        <!-- GENRE -->
                        <div class="text_vertical grid_area_11 alignself_end marginb_4">
                            <p class="texte_right ubuntu_moyen tx_color_gris_clair_genre">
                                <?php $concert_genre =  wp_get_post_terms($post->ID, 'genre', array("fields" => "names"));
                                if (!empty($concert_genre)) {echo $concert_genre[0];}?>
                            </p>                        
                        </div>

                    </div>
                
                <!-- INFORMATION -->
                <div class="grid paddingt_30 paddingr_8 paddingb_10 paddingl_15 prochain_concert_card_border_desk prochain_concert_card_border_mob marginr_-15_mobile marginl_5_mobile">
                            <!-- TITRE -->
                            <div class="">
                                <h2 class='titre_card_container'>
                                    <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_199', true); ?></span>
                                    
                                    <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_200', true); ?></span>
                                </h2>
                            </div>

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
                            
                                <!-- BOUCLE SUR LES 10 DATES POUR CHERCHER UN CONCERT ANNULE OU REPORTE-->
                                <?php 
                                $check_annul = '';
                                for ($i = 1; $i <= 10; $i++) :

                                    // SI LA DATE EXISTE
                                    if(!empty(get_post_meta($post->ID, 'metadata_180_'.$i, true))) :
                                        if(get_post_meta( $post->ID, 'metadata_183_'.$i, true)=="annul") {
                                            $check_annul = "oui";
                                        };
                                        if(get_post_meta($post->ID, 'metadata_184_'.$i, true)=="report") {
                                            $check_annul = "oui";
                                        };
                                    endif;
                                endfor;?>
                                <!-- CONCERT ANNULE / REPORTE -->
                                <?php if ($check_annul=="oui") : ?>
                                    <div class="paddingb_1">
                                            <p class="alert ubuntu_moyen fontsize_13">Dates annulées ou reportées</p>
                                    </div>
                                <?php endif; ?>
                                <!-- RESETER LES VARIABLES -->
                                <?php 
                                unset($check_annul);?>
                            </div>

                            <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                        </div>


                </div>

        <?php endwhile; endif; wp_reset_query(); ?>
</section>

<!-- ----------------------- -->
<!-- TEMOIGNAGE  -->
<!-- ----------------------- -->
<?php  get_template_part('template-parts/temoignage_slider'); ?>

<!-- ----------------------- -->
<!-- COTE SCENE COTE COULISSE  -->
<!-- + RECRUTEMENT  -->
<!-- ----------------------- -->

<section class="margin_section_botton">
    <!-- Titre -->
    <div class="paddingt_desk_30">
        <h2 class='titre_chapitre_container marginb_20'>
            <span class='titre_leger'>CÔTÉ SCÈNE</span>
            <br>
            <span class='titre_gras'>CÔTÉ COULISSES</span>
        </h2>
    </div>

    <!-- LOOP EVENEMENTS  -->
    <?php 
    $args_actu_event = array(
        'post_type' => 'actualite',
        'posts_per_page' => 6,

        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'saison',
                'field'    => 'slug',
                'terms'    => array('2020-2021', '2021-2022')),
            array(
                'taxonomy' => 'placement',
                'field'    => 'slug',
                'terms'    => 'accueil_actu_scene_coulisse')),
        'orderby' => 'meta_value',
        'meta_key' => 'metadata_903',
        'order'=> 'DESC'
    );
    $loop_actu_event = new WP_Query( $args_actu_event );
    if ($loop_actu_event->have_posts()) :?>
        <!-- LES EVENTS  -->
        <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200">
            <?php while ($loop_actu_event->have_posts()) :
                $loop_actu_event->the_post();?>

                    <!-- L'EVENT  -->
                    <div class="encoche_list_card grid">
                        <!-- ILLUSTRATION -->
                        <div class="grid nopagemarge_mobxs grid_area_11">
                            <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_907', true); ?>" alt="Photo de l'actu">
                            <div class="grid_area_11 encoche_blanc"></div>
                        </div>                            
                        <!-- TITRE -->
                        <div class="grid_area_11 alignself_end margint_-4 paddingt_15 paddingb_5 paddingr_10 paddingl_10">
                            <div>
                                <div>
                                    <!-- Titre -->
                                    <p class="ubuntu_bold tx_color_blanc paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_901', true); ?> <?php echo get_post_meta($post->ID, 'metadata_902', true); ?></p>
                                </div>
                            </div>  
                        </div>
                        <!-- FLECHE -->
                        <div class="margint_-4 paddingt_10 paddingb_15 paddingr_15">
                            <div>
                                <div class="fleche fleche_accueil alignself_end marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php the_permalink(); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                            </div>  
                        </div>
                    </div>
            <?php endwhile;?>
        </div>
    <?php endif; 
    wp_reset_query(); ?>


</section>

<!-- ----------------------- -->
<!-- REVUE DE PRESSE  -->
<!-- ----------------------- -->
<?php  get_template_part('template-parts/revuepresse_slider'); ?>

<!-- ----------------------- -->
<!-- MEDIATHEQUE  -->
<!-- ----------------------- -->

<section class="margint_90_desk margint_15_mobile margin_section_botton">


    <div class="grid_2col12">
        <!-- ILLUSTRATION -->
        <div class="concert_card nopagemarge_mob encoche_one_card grid grid_area_21_desk">
            <div class="embed-responsive embed-responsive-16by9 height_250">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'metadata_016', true) ?>" allowfullscreen></iframe>
            </div>
        </div>
    
        <!-- INFORMATIONS -->
        <div class="grid paddingr_30 paddingb_10 margint_20_mobile">
            <div>
                <!-- TITRE-->
                <div class="">
                    <h2 class='titre_card_container_grand'>
                        <span class='titre_leger'>DÉCOUVREZ</span>
                        <br>
                        <span class='titre_gras'>NOTRE MÉDIATHÈQUE</span>
                    </h2>
                </div>

                <!-- DESCRIPTION -->
                <div class='liste_art_comp paddingt_12 marginr_20'>
                    <!-- DESCRIPTION -->
                    <?php if(!empty(get_post_meta($post->ID, 'metadata_008', true))) { ?>
                        <div class="artiste">
                            <div class="ubuntu_fin">
                                <?php echo get_post_meta($post->ID, 'metadata_008', true); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>


            <!-- EN SAVOIR PLUS -->
            <div class="fleche fleche_accueil alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php echo get_permalink(get_page_by_title('Mediatheque_videos')) ?>">ACCÉDER À LA MÉDIATHEQUE <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
        </div>
    </div>

</section>

<!-- ----------------------- -->
<!-- SOUTENEZ-NOUS  -->
<!-- ----------------------- -->
<section class='plainbox grid align_center justify_center bg_color_accueil margint_70_desk margint_15_mobile margin_section_botton'>
        <div class="texte_center marginr_160_nomobile marginl_160_nomobile marginr_50_mobile marginl_50_mobile marginr_15_mobilexs marginl_15_mobilexs">
            <div>
                <h2 class='titre_plainbox_container fontsize_27 margin_section_botton tx_color_blanc'>
                    <span class='titre_leger'>SOUTENEZ-NOUS</span>
                </h2>
            </div>
            <div class='texte_plainbox_container fontsize_27 margin_section_botton tx_color_blanc'>
                <p class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_012', true); ?></p>
            </div>
            <div>
            <p class="marginb_6"><button class="button_petit button_accueil"><a href="<?php echo get_permalink(get_page_by_title('Soutenez-nous entreprise')) ?>">DÉCOUVREZ COMMENT NOUS SOUTENIR</a></button></p>
            </div>
            

        </div>

</section>

<!-- ----------------------- -->
<!-- RESEAUX SOCIAUX  -->
<!-- ----------------------- -->

<section>
    <!-- Titre -->
    <div class="grid_2col25_75 margint_70 marginb_20">
        <div class="">
            <h2 class='titre_chapitre_container marginb_20'>
                <span class='titre_leger'>NOS RÉSEAUX</span>
                <br>
                <span class='titre_gras'>SOCIAUX</span>
            </h2>
        </div>
        <div>
            <img class="img_ajust_liste" src="<?php bloginfo('template_directory');?>/dist/assets/images/illustration_reseausociaux_bandeau.png" alt="">
        </div>
    </div>


    <div class="">
        <script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>
        <link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
        <ul class="juicer-feed paddingrl_25_400" data-feed-id="orchespicardie"
            data-per="6" 
            data-pages="1" 
            data-truncate="200"
            data-columns="3"
            data-gutter="35"
            data-starting-at="2020-01-01"
            data-after="translateJuicer()">
        </ul>

        <script type="text/javascript">
            function translateJuicer() {
            $('.juicer-feed ul.j-display-filters li.all').text('Tous');
            jQuery('.j-paginate').text("Voir plus")
            }
        </script>
    </div>
</section>



</main>

<?php
 get_footer();
?>
