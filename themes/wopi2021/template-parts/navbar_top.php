<?php
// COULEUR LOGO + COULEUR
// selon page
if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) OR is_front_page() ) { 
    $url_logo = '/dist/assets/images/logos/logo_orchestre_rose.jpg';
    $color = 'color_saison';
  }
?>

<!-- TOP BAR -->
<section class='grid_2col12_1row align_center margin_section_botton'>
    <div>
        <img class='img_ajust' src="<?php bloginfo('template_directory'); logo_couleur()?>" alt="Logo Orchestre de Picardie">
    </div>
    <?php get_template_part('template-parts/menu_main'); ?>
</section>


