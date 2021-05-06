<?php
/*
Template Name: single-concert
Template Post Type: concert
*/
?>

<?php
 get_header();
 get_template_part('template-parts/header','page');
?>

<main>
    
    <!-- --------------------------------- -->
    <!-- LES INFORMATIONS DU CONCERT -->
    <!-- --------------------------------- -->

    <article class="grid_2col12_5row tx_color_noir_fonce">
        
        <!-- DISTRIBUTION -->
        <section class="distribution_concert_cell margin_section_botton">
            <!-- Titre -->
            <div>
                <h2 class='titre_chapitre_container'>
                    <span class='titre_page_gras'>DISTRIBUTION</span>
                    <br>
                    <span class='titre_page_leger'>DU CONCERT</span>
                </h2>
            </div>

            <!-- Les artistes -->
            <div class='artistes_list'>
                <?php for ($i = 1; $i <= 30; $i++) { ?>
                    <p class="artiste"><span class="artiste_nom"><?php echo get_post_meta($post->ID, 'metadata_186_'.$i, true); ?></span><span class="artiste_poste"><?php echo get_post_meta($post->ID, 'metadata_187_'.$i, true); ?></span></p>
                <?php } ?>
            </div>


        </section>

        <section class="dates_concert_cell">
            <div>
                <h3 class='titre_chapitre_container'>
                    <span class='titre_page_gras'>DATES</span>
                    <br>
                    <span class='titre_page_leger'>ET REPRÉSENTATIONS</span>
                </h3>
            </div>
        </section>

        <!-- PROGRAMME ET DESCRIPTION -->
        <section class="programme_concert_cell margin_section_botton">
             <!-- Titre -->
            <div>
                <h4 class='titre_chapitre_container'>
                    <span class='titre_page_gras'>PROGRAMME</span>
                    <br>
                    <span class='titre_page_leger'>DU CONCERT</span>
                </h4>
            </div>

            <!-- Les pieces -->
            <div class='artistes_list margin_section_botton'>
                <?php for ($i = 1; $i <= 20; $i++) { ?>
                    <p class="artiste"><span class="artiste_nom"><?php echo get_post_meta($post->ID, 'metadata_194_'.$i, true); ?></span><span class="artiste_poste"><?php echo get_post_meta($post->ID, 'metadata_195_'.$i, true); ?></span></p>
                <?php } ?>
            </div>

            <!-- La description -->
            <div class='content_wp'>
                <?php while(have_posts())  : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </section>
        
        <!-- PARTENAIRES-->
        <section class="partenaires_concert_cell">
            <div class="titre_paragraphe">PARTENAIRES</div>
            <div class="partenaires_concert_list">

                <!-- Partenaire avec mention -->
                <!-- LOOP pour aller chercher le partenaire avec mention -->
                <?php
                if(!empty(get_post_meta($post->ID, 'metadata_188', true))) {
                    $partenaire_mention = get_post_meta($post->ID, 'metadata_188', true);

                    $args_partenaire_mention = array('post_type' => 'partenaire','title' => $partenaire_mention,'posts_per_page' => 999,);

                    $loop_partenaire_mention = new WP_Query( $args_partenaire_mention );
                    if ($loop_partenaire_mention->have_posts()) {
                        while ($loop_partenaire_mention->have_posts()) {
                            $loop_partenaire_mention->the_post();?>

                            <!-- Récupérer logo et mention -->
                            <div class="partenaires_concert_item_mention grid_2colmax_1row align_center">
                                <div>
                                    <img class="img_ajust" src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Logo du partenaire">
                                </div>
                                <div>
                                    <p><?php echo get_post_meta($post->ID, 'metadata_253', true); ?></p>
                                </div>
                            </div>

                        <?php };
                    };
                };?>

                <!-- LOGOS des Partenaires -->
                <div class="partenaires_concert_logo_list grid_autocolmax_autorow">

                        <!-- Boucle pour les 15 partenaires -->
                        <?php for ($i = 1; $i <= 15; $i++) {
                            $partenaire = get_post_meta($post->ID, 'metadata_190_'.$i, true);
                            $args_partenaire = array('post_type' => 'partenaire','title' => $partenaire,'posts_per_page' => 999,);
                            $loop_partenaire = new WP_Query( $args_partenaire );
                            if ($loop_partenaire->have_posts()) {
                                while ($loop_partenaire->have_posts()) {
                                    $loop_partenaire->the_post();?>

                                    <div class="partenaires_concert_logo_item">
                                        <img class="img_ajust" src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" alt="Logo du partenaire">
                                    </div>
                                <?php };
                            };
                        };?>
                </div>

            </div>
        </section>


    </article>

</main>

<?php
 get_footer();
?>
