<?php
/*
Template Name: page_medias_videos
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
    <!-- VIDEOS PAR THEME (5 THEMES) -->
    <!-- --------------------------------- -->
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <section class="marginb_80">

            <!-- TITRE -->
            <div>
                <p class='titre_chapitre_container marginb_20'>
                    <span class='titre_gras'><?php echo get_post_meta($post->ID, 'metadata_763_'.$i, true); ?></span>
                    <br>
                    <span class='titre_leger'><?php echo get_post_meta($post->ID, 'metadata_764_'.$i, true); ?></span>
                </p>
            </div>

            <!-- VIDEOS -->
            <div class="photos_container grid_3col grid_column_gap10 grid_row_gap10 align_center">

                <!-- Boucle pour les 10 VIDEOS -->
                <?php for ($j = 1; $j <= 10; $j++) {?>
                    <?php if(!empty(get_post_meta($post->ID, 'metadata_765_'.$i.'_'.$j.'', true))) { ?>
                        <div class="embed-responsive embed-responsive-16by9">
                         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'metadata_765_'.$i.'_'.$j.'', true); ?>" allowfullscreen></iframe>
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