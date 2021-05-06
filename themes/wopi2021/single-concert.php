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

    <article class="grid_2col12_5row tx_color_noir_fonce margin_section_botton">
        
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
                    <p class="artiste"><span class="artiste_nom ubuntu_bold"><?php echo get_post_meta($post->ID, 'metadata_186_'.$i, true); ?></span><span class="ubuntu_leger"><?php echo get_post_meta($post->ID, 'metadata_187_'.$i, true); ?></span></p>
                <?php } ?>
            </div>


        </section>

        <!-- DATES -->
        <section class="dates_concert_cell">
             <!-- Titre -->
            <div>
                <h3 class='titre_chapitre_container'>
                    <span class='titre_page_gras'>DATES</span>
                    <br>
                    <span class='titre_page_leger'>ET REPRÉSENTATIONS</span>
                </h3>
            </div>

            <!-- Les dates -->
            <div class="dates_liste ubuntu_leger">

                <?php for ($i = 1; $i <= 10; $i++) {
                    // LOOP pour aller chercher la salle et ses informations
                    if(!empty(get_post_meta($post->ID, 'metadata_182_'.$i, true))) {
                        $salle = get_post_meta($post->ID, 'metadata_182_'.$i, true);
                        $args_salle = array('post_type' => 'salle','title' => $salle,'posts_per_page' => 999,);
                        $loop_salle = new WP_Query( $args_salle );
                        if ($loop_salle->have_posts()) {
                            while ($loop_salle->have_posts()) {
                                $loop_salle->the_post();

                                $ville = get_post_meta($post->ID, 'metadata_272', true);
                                $nom_salle = get_post_meta($post->ID, 'metadata_270', true);
                                $url_salle = get_post_meta($post->ID, 'metadata_275', true);
                                $adresse_salle = get_post_meta($post->ID, 'metadata_271', true);
                                $telephone_salle = get_post_meta($post->ID, 'metadata_273', true);
                                $mail_salle = get_post_meta($post->ID, 'metadata_274', true);
                            }
                        }
                    } wp_reset_query(); ?>
                    <div class="date_item">
                        <!-- LA DATE -->
                            <p>
                                — <span class="jour"><?php echo mysql2date('l j F', get_post_meta($post->ID, 'metadata_180_'.$i, true)); ?></span>
                                <span class="heure"><?php echo get_post_meta($post->ID, 'metadata_181_'.$i, true); ?></span>
                                <span class="ville ubuntu_bold"><?php echo $ville;?></span><span class="icone" onclick="document.querySelector('.salle<?php echo $i; ?>').classList.toggle('ouvrir')"><img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/icone_ticket.svg" alt="icone billeterie à cliquer"></span>
                            </p>
    
                        <!-- CONCERT ANNULE / REPORTE -->
                        <?php if(get_post_meta($post->ID, 'metadata_183_'.$i, true)=="annul") { ?>
                            <p class="alert ubuntu_moyen">CONCERT ANNULÉ</p>
                        <?php };?>
                        <?php if(get_post_meta($post->ID, 'metadata_184_'.$i, true)=="report") { ?>
                            <p class="alert ubuntu_moyen">CONCERT REPORTÉ</p>
                        <?php };?>

                        <!-- INFOS SALLE -->
                        <div class='infos_salle salle<?php echo $i; ?>'>
                            <p class="nom_salle"><span class="nom_salle_content ubuntu_moyen"><?php echo $nom_salle;?></span>
                                <button><a target="_blank" href="<?php echo $url_salle;?>">SITE INTERNET</a></button></p>
                            <p class="adresse_salle"><?php echo $adresse_salle;?></p>
                            <p class="contact_salle"><span class='telephone_salle'><?php echo $telephone_salle;?></span><span class='mail_salle'><?php echo $mail_salle;?></span></p>
                            
                            <!-- TARIFS -->
                            <p class='souligne'>Tarifs :</p>
                            <?php for ($j = 1; $j <= 5; $j++) { ?>
                                <p class="tarif_salle">- <?php echo get_post_meta($post->ID, 'metadata_185_'.$i.'_'.$j, true);?></p>
                            <?php };?>
                        </div>
                    </div>
                <?php };?>
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
                    <p class="artiste"><span class="artiste_nom ubuntu_bold"><?php echo get_post_meta($post->ID, 'metadata_194_'.$i, true); ?></span><span class="ubuntu_leger"><?php echo get_post_meta($post->ID, 'metadata_195_'.$i, true); ?></span></p>
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


    <!-- --------------------------------- -->
    <!-- LES PHOTOS ET VIDEOS -->
    <!-- --------------------------------- -->

    <section>
        
        <!--  -->
        <div class="">

        </div>

    </section>



</main>

<?php
 get_footer();
?>
