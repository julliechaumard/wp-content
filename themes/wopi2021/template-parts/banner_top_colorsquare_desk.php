<!-- ---------------- -->
<!-- BANNER CARRÉ DE COULEUR -->
<!-- ACCROCHE -->
<!-- banner_top_colorsquare_desk.php -->
<!-- ---------------- -->

<!-- ---------------- -->
<!-- MODE DESKTOP -->
<!-- ---------------- -->



    <!-- CONTENU DE L'ACCROCHE DIFFERENT SELON PAGE -->

    <!-- ACCUEIL -->
    <?php
    if ( is_front_page() ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <a href="<?php echo get_post_meta($post->ID, 'metadata_015', true); ?>">
                        <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_003', true); ?></span>
                        <br>
                        <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_004', true); ?></span>
                    </a>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- AGENDA -->
    <?php 
    if ( is_page(array('agenda')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_110', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_111', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- CONCERTS JEUNE PUBLIC -->
    <?php 
    if ( is_page(array('concerts-jeunes-publics')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_230', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_231', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- SAISON -->
    <?php 
    if ( is_page(array('saison')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_100', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_101', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- FICHE DU CONCERT -->
    <?php 
    if ( is_singular (array( 'concert' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <!-- GENRE -->
                    <span class='accroche_cell_texte_gras margint_20 block'>
                        <?php $concert_genre =  wp_get_post_terms($post->ID, 'genre', array("fields" => "names"));
                        if (!empty($concert_genre)) {echo $concert_genre[0];}?>
                    </span>
                    <br>
                    <!-- SOUS-TITRE -->
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_201', true); ?></span>
                </p>
            </div>
        </div> 
    <?php endif;?>

    <!-- ARTISTES INVITES -->
    <?php
    if ( is_page(array('artistes-invites')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_140', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_141', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>
    
    <!-- FICHE DE L'ARTISTE INVITE -->
    <?php 
    if ( is_singular (array( 'artiste_invite' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_120', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_121', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif;?>

    <!-- COLLABORATIONS -->
    <?php
    if ( is_page(array('collaborations')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_160', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_161', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- QUI SOMMES-NOUS ? -->
    <?php
    if ( is_page(array('qui-sommes-nous')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_650', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_651', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS ENTREPRISE -->
    <?php
    if ( is_page(array('soutenez-nous-entreprise')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_670', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_671', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS PARTICULIER -->
    <?php
    if ( is_page(array('soutenez-nous-particulier')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_680', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_681', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- SOUTENEZ-NOUS PICARDISSIMO -->
    <?php
    if ( is_page(array('soutenez-nous-picardissimo')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_690', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_691', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- HISTOIRE -->
    <?php
    if ( is_page(array('notre-histoire')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_630', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_631', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- RECRUTEMENT -->
    <?php
    if ( is_page(array('recrutements')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_660', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_661', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- FICHE DE L'ARTISTE ORCHESTRE -->
    <?php 
    if ( is_singular (array( 'orchestre' )) ) : ?>
        <!-- POSTES L'ARTISTE -->
        <div class='accroche_cell grid_1col1_1row align_center  bg_<?php couleur() ?>'>
            <div class=''>
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <?php if(!empty(get_post_meta($post->ID, 'metadata_604_'.$i, true))) { ?>
                    <p class='accroche_cell_texte'>
                        <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_604_'.$i, true); ?></span>
                    </p>
                <?php } ?>
            <?php } ?>
            </div>
        </div>
    <?php endif;?>

    <!-- PARTENAIRES-->
    <?php
    if ( is_page(array('partenaires')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_640', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_641', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- MEDIATHEQUE PHOTO-->
    <?php
    if ( is_page(array('mediatheque_photos')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_701', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_702', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- MEDIATHEQUE VIDEOS-->
    <?php
    if ( is_page(array('mediatheque_videos')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_761', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_762', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- A VOUS DE JOUER -->
    <?php
    if ( is_page(array('a_vous_de_jouer')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>AVEC NOMADPLAY</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>JOUER EN LIGNE AVEC LES MUSICIENS DE L'ORCHESTRE.</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ATUALITES-->
    <?php
    if ( is_page(array('actualites')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_909', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_908', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- FICHE ACTUALITE -->
    <?php 
    if ( is_singular (array( 'actualite' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <!-- DATE -->
                    <span class='accroche_cell_texte_gras margint_40 block'>
                        <?php echo mysql2date('l j F', get_post_meta($post->ID, 'metadata_903', true)); ?>
                    </span>
                </p>
            </div>
        </div> 
    <?php endif;?>

    <!-- MUR SOCIAL-->
    <?php
    if ( is_page(array('mur_social')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>INTERAGISSEZ AVEC</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>NOUS SUR LES RÉSEAUX SOCIAUX</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ELEVES ET ENSEIGNANTS -->
    <?php
    if ( is_page(array('eleves_enseignants')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_480', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_481', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- DOSSIERS PEDAGOGIQUES-->
    <?php
    if ( is_page(array('dossiers_pedagogiques')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>UN OUTIL PÉDAGOGIQUE</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>CLÉ EN MAIN À DESTINATION DES ÉLÈVES ET ENSEIGNANTS</span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ACADEMIE-->
    <?php
    if ( is_page(array('academie')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_401', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_402', true); ?></span>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <!-- ACTIONS CITOYENNES-->
    <?php
    if ( is_page(array('actions_citoyennes')) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'>APPORTER LA MUSIQUE</span>
                    <br>
                    <span class='accroche_cell_texte_leger'>VIVANTE ET SUSCITER L'ÉMOTION AUPRÈS DE TOUS, PARTOUT</span>
                </p>
            </div>
        </div>
    <?php endif; ?>   
