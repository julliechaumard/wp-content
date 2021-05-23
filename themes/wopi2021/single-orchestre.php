<?php
/*
Template Name: single-orchestre
Template Post Type: orchestre
*/
?>

<?php
 get_header();
 get_template_part('template-parts/header','page');
?>

<main>

    <!-- --------------------------------- -->
    <!-- POSTE / SITE INTERNET / DESCRIPTION -->
    <!-- --------------------------------- -->
    <article class="grid_2col12_5row tx_color_noir_fonce margin_section_botton">
        
        <section class="programme_concert_cell margin_section_botton">
             
            <!-- TITRE -->
            <div>
                <h2 class='titre_chapitre_container'>
                    <span class='titre_gras'>PRÉSENTATION</span>
                    <br>
                    <span class='titre_leger'>DE L' ARTISTE</span>
                </h2>
            </div>

            <!-- POSTE -->
            <div class='liste_art_comp margin_subtitle_bottom'>
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <?php if(!empty(get_post_meta($post->ID, 'metadata_604_'.$i, true))) { ?>
                        <div class="artiste paddingb_5">
                            <div class="paddingr_8 ubuntu_bold">
                                <?php echo get_post_meta($post->ID, 'metadata_604_'.$i, true); ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <!-- DESCRIPTION -->
            <div class='content_wp'>
                <?php while(have_posts())  : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

            <!-- SITE INTERNET -->
            <?php if(!empty(get_post_meta($post->ID, 'metadata_612', true))) { ?>
                <p class="margint_40"><button class="button_petit button_orchestre"><a target="_blank" href="<?php echo get_post_meta($post->ID, 'metadata_612', true);?>">SON SITE INTERNET</a></button></p>
            <?php } ?>

        </section>
        
    </article>

</main>

<?php
 get_footer();
?>
