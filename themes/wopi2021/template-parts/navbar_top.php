<?php

// COULEUR LOGO + COULEUR
// selon page
if ( is_page(array('agenda', 'Saison')) OR is_singular (array( 'collaboration','concert' )) OR is_front_page() ) { 
    $url_logo = '/dist/assets/images/logos/logo_orchestre_rose.jpg';
    $color = 'color_saison';
  }

?>

<!-- ---------------- -->
<!-- TOP BAR DESKTOP -->
<!-- ---------------- -->
<section class='top_bar_desktop grid_2col12_1row align_center margin_section_botton'>
    <!-- LOGO -->
    <div>
        <picture>
            <source media="(max-width: 890px)" srcset="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp_transparent.png">
            <source media="(min-width: 891px)" srcset="<?php bloginfo('template_directory'); logo_couleur()?>">
            <img class='img_width' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp.png" alt="Logo Orchestre de Picardie">
        </picture>
    </div>

    <!-- MAIN MENU -->
    <nav class="menu_main tx_color_noir_fonce">
        <ul>
            <li class='menu_item <?php menu_active() ?>'>Saison
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Agenda</a></li>
                    <li class="sub_menu_item"><a href="#">Jeune public</a></li>
                    <li class="sub_menu_item"><a href="#">Artistes invités</a></li>
                    <li class="sub_menu_item"><a href="#">Collaborations</a></li>
                </ul>
            </li>
            <li class='menu_item'>Actions culturelles
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Elèves et enseignants</a></li>
                    <li class="sub_menu_item"><a href="#">Académie</a></li>
                    <li class="sub_menu_item"><a href="#">Actions citoyennes et  sociales</a></li>
                </ul>
            </li>
            <li class='menu_item'>Actualités
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Actualités</a></li>
                    <li class="sub_menu_item"><a href="#">Mur social</a></li>
                </ul>
            </li>
            <li class='menu_item'>L'Orchestre
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Qui sommes nous ?</a></li>
                    <li class="sub_menu_item"><a href="#">Notre histoire Nos missions</a></li>
                    <li class="sub_menu_item"><a href="#">Partenaires</a></li>
                    <li class="sub_menu_item"><a href="#">Soutenez-nous</a></li>
                    <li class="sub_menu_item"><a href="#">Recrutements</a></li>
                </ul>
            </li>
            <li class='menu_item menu_item_level1'><a href="#">Médiathèque</a></li>
        </ul>

    </nav>


</section>


<!-- ---------------- -->
<!-- TOP BAR MOBILE -->
<!-- ---------------- -->
<section class="top_bar_mobile grid_2col12_1row_mob bg_<?php couleur() ?>">
    <!-- LOGO -->
    <div>
        <picture>
            <source media="(max-width: 890px)" srcset="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp_transparent.png">
            <source media="(min-width: 891px)" srcset="<?php bloginfo('template_directory'); logo_couleur()?>">
            <img class='img_width_auto top_bar_height_logo' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp.png" alt="Logo Orchestre de Picardie">
        </picture>
    </div>
    <!-- ICONE HAMBURGER -->
    <!-- ICONE HAMBURGER FERME -->
    <div id="menu_hamburger_closed" class="menu_hamburger">
            <img class='icone_hamburger' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icone_hamburger.png" alt="Menu Hamburger">
    </div>
    <!-- ICONE HAMBURGER OUVERT -->
    <div id="menu_hamburger_open" class="menu_hamburger hide_menu_hamburger">
            <img class='icone_hamburger' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icone_fermer.png" alt="Menu Hamburger">
    </div>
    <!-- MAIN MENU -->
    <nav id="menu_hamburger_nav" class="hide_menu_hamburger">
        <ul>
            <li class='menu_item <?php menu_active() ?>'>Saison
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Agenda</a></li>
                    <li class="sub_menu_item"><a href="#">Jeune public</a></li>
                    <li class="sub_menu_item"><a href="#">Artistes invités</a></li>
                    <li class="sub_menu_item"><a href="#">Collaborations</a></li>
                </ul>
            </li>
            <li class='menu_item'>Actions culturelles
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Elèves et enseignants</a></li>
                    <li class="sub_menu_item"><a href="#">Académie</a></li>
                    <li class="sub_menu_item"><a href="#">Actions citoyennes et  sociales</a></li>
                </ul>
            </li>
            <li class='menu_item'>Actualités
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Actualités</a></li>
                    <li class="sub_menu_item"><a href="#">Mur social</a></li>
                </ul>
            </li>
            <li class='menu_item'>L'Orchestre
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Qui sommes nous ?</a></li>
                    <li class="sub_menu_item"><a href="#">Notre histoire Nos missions</a></li>
                    <li class="sub_menu_item"><a href="#">Partenaires</a></li>
                    <li class="sub_menu_item"><a href="#">Soutenez-nous</a></li>
                    <li class="sub_menu_item"><a href="#">Recrutements</a></li>
                </ul>
            </li>
            <li class='menu_item menu_item_level1'><a href="#">Médiathèque</a></li>
        </ul>
    </nav>

    <!-- JavaScript HAMBURGER -->
    <script>
        document.getElementById("menu_hamburger_closed").addEventListener("click",showMenuHamburger,false)
        document.getElementById("menu_hamburger_open").addEventListener("click",hideMenuHamburger,false)

        function showMenuHamburger() {
            document.getElementById("menu_hamburger_open").className = "menu_hamburger show_menu_hamburger";
            document.getElementById("menu_hamburger_closed").className = "menu_hamburger hide_menu_hamburger";
            document.getElementById("menu_hamburger_nav").className = "menu_main show_menu_hamburger";
        }

        function hideMenuHamburger() {
            document.getElementById("menu_hamburger_open").className = "menu_hamburger hide_menu_hamburger";
            document.getElementById("menu_hamburger_closed").className = "menu_hamburger show_menu_hamburger";
            document.getElementById("menu_hamburger_nav").className = "hide_menu_hamburger";
        }
    </script>

</section>