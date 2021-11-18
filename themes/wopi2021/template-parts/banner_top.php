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
    
    <?php get_template_part('template-parts/banner_top_colorsquare_desk'); ?>
    

    <!-- ---------------- -->
    <!-- ILLUSTRATION -->
    <!-- ---------------- -->

    <?php get_template_part('template-parts/banner_top_illustration_desk'); ?>
    


    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX -->
    <!-- ---------------- -->
    
    <div class="nav_res_soc_cell">
        <?php if(!is_singular (array( 'concert' ))): ?>
            <ul class='tx_<?php couleur() ?>'>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">@musicodpic</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a  target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a></li>
            </ul>
        <?php endif; ?>
        <!-- FICHE CONCERT -->
        <?php if(is_singular (array( 'concert' ))): ?>
            <ul class='tx_<?php couleur() ?>'>
                <li class='menu_res_soc_item ubuntu_bold_i'>PARTAGER SUR</li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Partager sur Facebook">Facebook</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>/&text=<?php the_title(); ?>&via=orchespicardie" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Partager sur Twitter">Twitter</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Partager sur whatsapp">Whatsapp</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="mailto:?subject=Orchestre de Picardie - <?php echo get_post_meta($post->ID, 'metadata_199', true);?> <?php echo get_post_meta($post->ID, 'metadata_200', true);?>&body=Voici le lien - <?php echo get_post_meta($post->ID, 'metadata_199', true);?> <?php echo get_post_meta($post->ID, 'metadata_200', true);?> - vers le site web de l'Orchestre de Picardie : <?php the_permalink(); ?>">Mail</a></li>

                </li>
            </ul>
        <?php endif; ?>
        </div>
    
    



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

        <?php get_template_part('template-parts/banner_top_illustration_mob'); ?>

        <!-- JAVASCRIPT d'EXECUTION DU SLIDER -->
        <script src="<?php bloginfo('template_directory');?>/dist/assets/js/slider_banner.js"></script>

    </div>

    <!-- ---------------- -->
    <!-- ACCROCHE -->
    <!-- ---------------- -->
    
    <?php get_template_part('template-parts/banner_top_colorsquare_mob'); ?>
   

    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX -->
    <!-- ---------------- -->
    <!-- TOUTES PAGES SAUF FICHE CONCERT -->
    <?php if(!is_singular (array( 'concert' ))): ?>
        <div class="margint_30">
            <div class="nav_res_soc_cell grid_1col1_1row justify_center">
                <ul class='tx_<?php couleur() ?>'>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">@musicodpic</a></li>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <!-- FICHE CONCERT -->
    <?php if(is_singular (array( 'concert' ))): ?>
        <div class="margint_30">
            <div class="nav_res_soc_cell grid_1col1_1row justify_center">
                <ul class='tx_<?php couleur() ?>'>
                    <li class='menu_res_soc_item ubuntu_bold_i'>PARTAGER SUR</li>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">Facebook</a></li>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>/&text=<?php the_title(); ?>&via=orchespicardie" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Partager sur Twitter">Twitter</a></li>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">Whatsapp</a></li>
                    <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="mailto:?subject=Orchestre de Picardie - <?php echo get_post_meta($post->ID, 'metadata_199', true);?> <?php echo get_post_meta($post->ID, 'metadata_200', true);?>&body=Voici le lien - <?php echo get_post_meta($post->ID, 'metadata_199', true);?> <?php echo get_post_meta($post->ID, 'metadata_200', true);?> - vers le site web de l'Orchestre de Picardie : <?php the_permalink(); ?>">Mail</a></li>
                </ul>
            </div>
        </div>


    <?php endif; ?>


</section>
