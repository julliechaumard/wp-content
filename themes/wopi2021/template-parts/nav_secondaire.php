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
    
<nav class="grid_3col35_32_a grid_row_gap16 margint_70 marginb_60">

    <!-- TITRE -->
    <div class='grid_area_13_1_max400px justify_end justify_start_max400px marginr_20 ubuntu_bold tx_color_noir_fonce fontsize_20'>MÉCÉNAT</div>
    
    <!-- MENU ITEM 1 -->
    <!-- Carré de couleur -->
    <div class='nav_second_carre bg_color_noir_tres_fonce grid_area_1_2_max400px'></div>
    <!-- Label + Flèche -->
    <div class="fleche ubuntu_bold tx_color_noir_tres_fonce alignself_center marginl_10 grid_area_2_2_max400px"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Soutenez-nous entreprise')) ?>">ENTREPRISE <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_noir_tres_fonce.png" alt=""></a></div>

    <!-- MENU ITEM 2 -->
    <!-- Carré de couleur -->
    <div class='nav_second_carre bg_color_noir_clair grid_area_2 grid_area_1_3_max400px'></div>
    <!-- Label + Flèche -->
    <div class="fleche ubuntu_bold tx_color_noir_clair alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Soutenez-nous particulier')) ?>">PARTICULIER <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_noir_tres_fonce.png" alt=""></a></div>

    <!-- MENU ITEM 3 -->
    <!-- Carré de couleur -->
    <div class='nav_second_carre bg_color_gris_clair grid_area_2 grid_area_1_4_max400px'></div>
    <!-- Label + Flèche -->
    <div class="fleche ubuntu_bold tx_color_gris_fonce alignself_center marginl_10"><a class='fontsize_16' href="<?php echo get_permalink(get_page_by_title('Soutenez-nous Picardissimo')) ?>">PICARDISSIMO <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_noir_tres_fonce.png" alt=""></a></div>

</nav>


<?php endif;?>


