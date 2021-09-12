<?php
//// MENU SECONDAIRE
//// PAGES MECENATS
//// PAGES MEDIATHEQUES

?>

<!-- ----------------- -->
<!-- PAGES MECENATS -->
<!-- ----------------- -->

<?php 

if ( is_page(array('soutenez-nous-entreprise', 'soutenez-nous-particulier', 'soutenez-nous-picardissimo')) ) :?>
    
    <nav class="grid_3col35_32_a grid_row_gap16 margint_70 marginb_80">

        <!-- TITRE -->
        <div class='grid_area_13_1_max400px justify_end justify_start_max400px marginr_20 ubuntu_leger tx_color_noir_fonce fontsize_20'>MÉCÉNAT</div>
        
        <!-- MENU ITEM 1 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_noir_tres_fonce grid_area_1_2_max400px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_noir_tres_fonce alignself_center marginl_10 grid_area_2_2_max400px"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Soutenez-nous entreprise')) ?>">ENTREPRISE</a></div>

        <!-- MENU ITEM 2 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_noir_clair grid_area_2 grid_area_1_3_max400px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_noir_clair alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Soutenez-nous particulier')) ?>">PARTICULIER</a></div>

        <!-- MENU ITEM 3 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_gris_clair grid_area_2 grid_area_1_4_max400px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_gris_fonce alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Soutenez-nous Picardissimo')) ?>">PICARDISSIMO</a></div>

    </nav>

<?php endif;?>


<!-- ----------------- -->
<!-- PAGES MEDIATHEQUES -->
<!-- ----------------- -->

<?php 

if ( is_page(array('mediatheque_photos','mediatheque_videos','Mediatheque_disques','mediatheque_concertsenligne','a_vous_de_jouer')) ) :?>
    
    <nav class="grid_3col35_32_b grid_row_gap16 margint_70 marginb_60">

        <!-- TITRE -->
        <div class='grid_area_13_1_max500px justify_end justify_start_max500px marginr_20 ubuntu_leger tx_color_noir_fonce fontsize_20'>MÉDIATHÈQUE</div>
        
        <!-- MENU ITEM 1 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_media_ligne grid_area_1_2_max500px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_noir_fonce alignself_center marginl_10 grid_area_2_2_max500px"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Mediatheque_concertsenligne')) ?>">CONCERTS EN LIGNE</a></div>

        <!-- MENU ITEM 2 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_media_videos grid_area_2 grid_area_1_3_max500px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_noir_fonce alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Mediatheque_videos')) ?>">VIDÉOS</a></div>
        
        <!-- MENU ITEM 3 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_media_nomadplay grid_area_2 grid_area_1_4_max500px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_noir_fonce alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('A vous de jouer')) ?>">À VOUS DE JOUER ! NOMADPLAY</a></div>

        <!-- MENU ITEM 4 -->
        <!-- Carré de couleur -->
        <!-- <div class='nav_second_carre bg_color_media_musiques grid_area_2 grid_area_1_4_max500px'></div> -->
        <!-- Label + Flèche -->
        <!-- <div class="ubuntu_bold tx_color_noir_fonce alignself_center marginl_10"><a class='fontsize_16' href="">MUSIQUES</a></div> -->

        <!-- MENU ITEM 5 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_media_photos grid_area_2 grid_area_1_5_max500px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_noir_fonce alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Mediatheque_photos')) ?>">PHOTOS</a></div>

        <!-- MENU ITEM 6 -->
        <!-- Carré de couleur -->
        <div class='nav_second_carre bg_color_media_disco grid_area_2 grid_area_1_6_max500px'></div>
        <!-- Label + Flèche -->
        <div class="ubuntu_bold tx_color_noir_fonce alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Mediatheque_disques')) ?>">DISCOGRAPHIE</a></div>

    </nav>

<?php endif;?>