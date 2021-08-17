<?php
/*
Template Name: page_medias_concertsenligne
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
 get_template_part('template-parts/nav_secondaire');
?>

<main>

<article>

    <!-- --------------------------------- -->
    <!-- VIDEOS YOUTUBE -->
    <!-- --------------------------------- -->

    <section class="marginb_80">

        <!-- TITRE -->
        <?php if(!empty(get_post_meta($post->ID, 'metadata_722_1', true))) { ?>
            <div>
                <p class='titre_chapitre_container marginb_60'>
                    <span class='titre_gras'>CONCERTS</span>
                    <br>
                    <span class='titre_leger'>SUR YOUTUBE</span>
                </p>
            </div>
        <?php }; ?>

        <!-- VIDEOS -->
        <div class="photos_container grid_media_ligne grid_column_gap10 grid_row_gap50">

            <!-- Boucle pour les 15 VIDEOS -->
            <?php for ($j = 1; $j <= 15; $j++) {?>
                <?php if(!empty(get_post_meta($post->ID, 'metadata_722_'.$j.'', true))) { ?>
                    <!-- TITRE DU CONCERT AVEC ENCOCHE DE COULEUR -->
                    <div class="marginb_20_mobile">
                        <div class="flex flex_align_center">
                            <div class="encoche_violet marginr_10"></div>
                            <p class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_725_'.$j.'', true) ?></p>
                        </div>
                        
                    </div>
                    <div class="embed-responsive embed-responsive-16by9 marginb_60_mobile">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'metadata_722_'.$j.'', true); ?>" allowfullscreen></iframe>
                    </div>
                <?php }; ?>
            <?php }; ?>
            <div></div>

        </div>

    </section>

    <!-- --------------------------------- -->
    <!-- POSTS FACEBOOK -->
    <!-- --------------------------------- -->

    <!-- FACEBOOK EMBED - Load JavaScript SDK -->
    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

    <section class="marginb_80">

        <!-- TITRE -->
        <?php if(!empty(get_post_meta($post->ID, 'metadata_723_1', true))) { ?>
            <div>
                <p class='titre_chapitre_container marginb_60'>
                    <span class='titre_gras'>CONCERTS</span>
                    <br>
                    <span class='titre_leger'>SUR FACEBOOK</span>
                </p>
            </div>
        <?php }; ?>

        <!-- POSTS -->
        <div class="photos_container grid_media_ligne grid_column_gap10 grid_row_gap50">

            <!-- Boucle pour les 15 POSTS -->
            <?php for ($j = 1; $j <= 15; $j++) {?>
                <?php if(!empty(get_post_meta($post->ID, 'metadata_723_'.$j.'', true))) { ?>
                    <!-- TITRE DU CONCERT AVEC ENCOCHE DE COULEUR -->
                    <div class="marginb_20_mobile">
                        <div class="flex flex_align_center">
                            <div class="encoche_violet marginr_10"></div>
                            <p class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_726_'.$j.'', true) ?></p>
                        </div>
                        
                    </div>

                    <div class="marginb_60_mobile">
                        <div class="fb-post" data-width="" data-href="<?php echo get_post_meta($post->ID, 'metadata_723_'.$j.'', true) ?>"></div>
                    </div>
                <?php }; ?>
            <?php }; ?>
            <div></div>

        </div>

    </section>

    <!-- --------------------------------- -->
    <!-- PAGE INTERNET -->
    <!-- --------------------------------- -->

    <section class="marginb_80">

        <!-- TITRE -->
        <?php if(!empty(get_post_meta($post->ID, 'metadata_724_1', true))) { ?>
            <div>
                <p class='titre_chapitre_container marginb_60'>
                    <span class='titre_gras'>CONCERTS</span>
                    <br>
                    <span class='titre_leger'>EN LIGNE</span>
                </p>
            </div>
        <?php }; ?>

        <!-- LIENS -->
        <div class="grid_media_ligne grid_column_gap10 grid_row_gap50">

            <!-- Boucle pour les 15 sites internet -->
            <?php for ($j = 1; $j <= 15; $j++) {?>
                <?php if(!empty(get_post_meta($post->ID, 'metadata_724_'.$j.'', true))) { ?>
                    <!-- TITRE DU CONCERT AVEC ENCOCHE DE COULEUR -->
                    <div class="marginb_20_mobile">
                        <div class="flex flex_align_center">
                            <div class="encoche_violet marginr_10"></div>
                            <p class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_727_'.$j.'', true) ?></p>
                        </div>
                        
                    </div>

                    <div class="marginb_60_mobile">
                        <div class="fleche fleche_accueil alignself_end marginb_6 ubuntu_bold tx_color_accueil"><a href="<?php echo get_post_meta($post->ID, 'metadata_724_'.$j.'', true) ?>">ACCÉDER AU CONCERT <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                    </div>
                <?php }; ?>
            <?php }; ?>
            <div></div>

        </div>

    </section>

</article>

</main>

<?php
 get_footer();
?>