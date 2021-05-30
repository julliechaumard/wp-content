<?php
/*
Template Name: page_medias_photos
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
    <!-- PHOTOS PAR THEME (5 THEMES) -->
    <!-- --------------------------------- -->
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <section class="margin_section_botton">
            <!-- TITRE -->
            <div>
                <p class='titre_chapitre_container marginb_20'>
                    <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_703_'.$i, true); ?></span>
                    <br>
                    <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_704_'.$i, true); ?></span>
                </p>
            </div>

            <!-- PHOTOS -->
            <div class="photos_container grid_photos">

                <!-- Boucle pour les 10 PHOTOS -->
                <?php for ($j = 1; $j <= 10; $j++) {?>
                    <?php if(!empty(get_post_meta($post->ID, 'metadata_705_'.$i.'_'.$j.'', true))) { ?>
                        <div>
                            <img class="img_ajust" src="<?php echo get_post_meta($post->ID, 'metadata_705_'.$i.'_'.$j.'', true); ?>" alt="Photo médiathèque">
                        </div>
                    <?php }; ?>
                <?php }; ?>
                <div></div>

            </div>

        </section>
    <?php endfor; ?>

</article>

</main>

<?php
 get_footer();
?>