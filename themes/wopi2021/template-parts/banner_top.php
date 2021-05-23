<!-- ---------------- -->
<!-- BANNER -->
<!-- banner_top.php -->
<!-- ---------------- -->

<!-- ---------------- -->
<!-- MODE DESKTOP -->
<!-- ---------------- -->

<section class='banner_top grid_2col12_3row margin_section_botton'>
    <!-- ---------------- -->
    <!-- TITRE DE LA PAGE -->
    <!-- ---------------- -->
    <div class='Title_cell tx_color_noir_fonce'>
        <div>
            <h1 class='titre_page_container'>
                <!-- CONTENU DU TITRE DIFFERENTE SELON PAGE function_titre_page.php -->
                <span class='titre_gras'><?php titre_gras($post) ?></span>
                <br>
                <span class='titre_leger'><?php titre_leger($post) ?></span>
            </h1>
        </div>

    </div>

    <!-- ---------------- -->
    <!-- ACCROCHE -->
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
        <div class='accroche_cell grid_1col1_1row align_center  bg_<?php couleur() ?>'>
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

    <!-- HISTOIRE ? -->
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

    <!-- FICHE DE L'ARTISTE ORCHESTRE -->
    <?php 
    if ( is_singular (array( 'orchestre' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center  bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_601', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_602', true); ?></span>
                </p>
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

    <!-- ---------------- -->
    <!-- ILLUSTRATION -->
    <!-- ---------------- -->

    <div class='illustration_cell'>
        <img class='img_ajust' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration du concert">
    </div>

    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX -->
    <!-- ---------------- -->
    <nav class="nav_res_soc_cell">
        <ul class='tx_<?php couleur() ?>'>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">Instajeunes</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
            <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a  target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a></li>
        </ul>
    </nav>

</section>  

<!-- ---------------- -->
<!-- MODE MOBILE -->
<!-- ---------------- -->

<section class="banner_top_mobile margin_section_botton">

    <!-- ---------------- -->
    <!-- TITRE DE LA PAGE -->
    <!-- ---------------- -->
    <div class='tx_color_noir_fonce'>
        <div>
            <h1 class='titre_page_container'>
                <!-- CONTENU DU TITRE DIFFERENTE SELON PAGE -->
                <span class='titre_gras'><?php titre_gras($post) ?></span>
                <br>
                <span class='titre_leger'><?php titre_leger($post) ?></span>
            </h1>
        </div>

    </div>

    <!-- GRID -->
    <div class="grid_2col12_3row_mobile">

        <!-- BANDE DE COULEUR -->

        <div class="case_couleur_12 bg_<?php couleur() ?>">
        </div>

        <!-- ---------------- -->
        <!-- ILLUSTRATION -->
        <!-- ---------------- -->

        <div class='illustration_cell'>
            <img class='img_ajust' src="<?php the_post_thumbnail_url(); ?>" alt="Illustration du concert">
        </div>

    </div>

    <!-- ---------------- -->
    <!-- ACCROCHE -->
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
    <?php endif; ?>

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
                    <span class='accroche_cell_texte_gras block'>
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
    
    <!-- FICHE DE L'ARTISTE ORCHESTRE -->
    <?php 
    if ( is_singular (array( 'orchestre' )) ) : ?>
        <div class='accroche_cell grid_1col1_1row align_center  bg_<?php couleur() ?>'>
            <div class=''>
                <p class='accroche_cell_texte'>
                    <span class='accroche_cell_texte_gras'><?php echo get_post_meta($post->ID, 'metadata_601', true); ?></span>
                    <br>
                    <span class='accroche_cell_texte_leger'><?php echo get_post_meta($post->ID, 'metadata_602', true); ?></span>
                </p>
            </div>
        </div> 
    <?php endif;?>

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

    <!-- HISTOIRE ? -->
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

    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX -->
    <!-- ---------------- -->
    <div>
        <nav class="nav_res_soc_cell grid_1col1_1row justify_center">
            <ul class='tx_<?php couleur() ?>'>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">Instajeunes</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a  target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a></li>
            </ul>
        </nav>
    </div>


</section>
