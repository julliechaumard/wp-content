<?php
/*
Template Name: single-actualite
Template Post Type: actualite
*/
?>

<?php
 get_header();
 get_template_part('template-parts/header','page');
?>

<main>

<article>

    <!-- ----------------------- -->
    <!-- L'ACTU  -->
    <!-- ----------------------- -->
    <section class="margint_90 margin_section_botton">


                <div class="grid_2col12">
                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob marginb_20">
                        <div class="content_wp">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- TITRE -->
                    <div class="grid paddingr_30 marginb_20_mobile">
                        <div class="grid">
                            <!-- TITRE-->
                            <div class="">
                                <h2 class='titre_card_container_grand'>
                                    <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_901', true) ?></span>
                                    <br>
                                    <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_902', true) ?></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --------------------------------- -->
                <!-- LES PHOTOS ET VIDEOS -->
                <!-- --------------------------------- -->

                <div class="margin_section_botton">
                    <!-- TITRE-->
                    <div class="marginb_20">
                        <h2 class='titre_card_container_grand'>
                            <span class='titre_gras'>PHOTOS & VIDÉOS</span>
                            <br>
                            <span class='titre_leger'>DE L’ACTUALITÉ</span>
                        </h2>
                    </div>

                    <!-- VIDEOS -->
                    <div class="photos_container grid_3col grid_column_gap10 grid_row_gap10 align_center">
                        <!-- Boucle pour les 3 VIDEOS -->
                        <?php for ($i = 1; $i <= 3; $i++) {?>
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_905_'.$i, true))) { ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'metadata_905_'.$i, true); ?>" allowfullscreen></iframe>
                                </div>
                            <?php }; ?>
                        <?php }; ?>
                        <div></div>
                    </div>

                    <!-- PHOTOS -->
                    <div class="photos_container grid_photos">

                        <!-- Boucle pour les 10 PHOTOS -->
                        <?php for ($i = 1; $i <= 10; $i++) {?>
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_906_'.$i, true))) { ?>
                                <div>
                                    <img class="img_ajust" src="<?php echo get_post_meta($post->ID, 'metadata_906_'.$i, true); ?>" alt="Photo Accueil aux répétitions">
                                </div>
                            <?php }; ?>
                        <?php }; ?>
                        <div></div>

                    </div>

                </div>
                

    </section>

</article>

</main>

<?php
 get_footer();
?>
