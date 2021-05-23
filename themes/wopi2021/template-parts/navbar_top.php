<?php
//// TOP BAR DE LA PAGE AVEC LE LOGO DE L'ORCHESTRE
//// ET LE MENU PRINCIPAL

?>

<!-- ---------------- -->
<!-- TOP BAR DESKTOP -->
<!-- ---------------- -->
<section class='top_bar_desktop grid_2col12_1row align_center marginb_50'>
    <!-- LOGO -->
    <div>
        <a href="<?php echo get_permalink(get_page_by_title('accueil')) ?>">
            <picture>
                <source media="(max-width: 890px)" srcset="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp_transparent.png">
                <source media="(min-width: 891px)" srcset="<?php bloginfo('template_directory'); logo_couleur()?>">
                <img class='img_width' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp.png" alt="Logo Orchestre de Picardie">
            </picture>
        </a>
    </div>

    <!-- MAIN MENU -->
    <nav class="menu_main tx_color_noir_fonce">
        <ul>
            <li class='menu_item <?php menu_active_saison() ?>'>Saison
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('agenda')) ?>">Agenda</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Concerts jeunes publics')) ?>">Jeune public</a></li>
                    <li class="sub_menu_item"><a href="<?php bloginfo( 'url' ) ?>/artistes-invites/">Artistes invités</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Collaborations')) ?>">Collaborations</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('saison')) ?>">Saison 2021-2022</a></li>
                </ul>
            </li>
            <li class='menu_item <?php  ?>'>Actions culturelles
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Elèves et enseignants</a></li>
                    <li class="sub_menu_item"><a href="#">Académie</a></li>
                    <li class="sub_menu_item"><a href="#">Actions citoyennes et  sociales</a></li>
                </ul>
            </li>
            <li class='menu_item <?php  ?>'>Actualités
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Actualités</a></li>
                    <li class="sub_menu_item"><a href="#">Mur social</a></li>
                </ul>
            </li>
            <li class='menu_item <?php menu_active_orchestre() ?>'>L'Orchestre
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="<?php bloginfo( 'url' ) ?>/qui-sommes-nous/">Qui sommes nous ?</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Notre histoire')) ?>">Notre histoire Nos missions</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Partenaires')) ?>">Partenaires</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Soutenez-nous entreprise')) ?>">Soutenez-nous</a></li>
                    <li class="sub_menu_item"><a href="#">Recrutements</a></li>
                </ul>
            </li>
            <li class='menu_item <?php  ?>'><a href="#">Médiathèque</a>
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Concerts en ligne</a></li>
                    <li class="sub_menu_item"><a href="#">Vidéos</a></li>
                    <li class="sub_menu_item"><a href="#">Photos</a></li>
                    <li class="sub_menu_item"><a href="#">Musiques</a></li>
                    <li class="sub_menu_item"><a href="#">Discographie</a></li>
                </ul>
            </li>
        </ul>

    </nav>


</section>


<!-- ---------------- -->
<!-- TOP BAR MOBILE -->
<!-- ---------------- -->
<section class="top_bar_mobile grid_2col12_1row_mob grid_row_gap14 bg_<?php couleur() ?>">
    <!-- LOGO -->
    <div>
        <a href="<?php echo get_permalink(get_page_by_title('accueil')) ?>">
            <picture>
                <source media="(max-width: 890px)" srcset="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp_transparent.png">
                <source media="(min-width: 891px)" srcset="<?php bloginfo('template_directory'); logo_couleur()?>">
                <img class='img_width' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_odp.png" alt="Logo Orchestre de Picardie">
            </picture>
        </a>
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
            <li class='menu_item <?php menu_active_saison() ?>'>Saison
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('agenda')) ?>">Agenda</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Concerts jeunes publics')) ?>">Jeune public</a></li>
                    <li class="sub_menu_item"><a href="<?php bloginfo( 'url' ) ?>/artistes-invites/">Artistes invités</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Collaborations')) ?>">Collaborations</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('saison')) ?>">Saison 2021-2022</a></li>
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
            <li class='menu_item <?php menu_active_orchestre() ?>'>L'Orchestre
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="<?php bloginfo( 'url' ) ?>/qui-sommes-nous/">Qui sommes nous ?</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Notre histoire')) ?>">Notre histoire Nos missions</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Partenaires')) ?>">Partenaires</a></li>
                    <li class="sub_menu_item"><a href="<?php echo get_permalink(get_page_by_title('Soutenez-nous entreprise')) ?>">Soutenez-nous</a></li>
                    <li class="sub_menu_item"><a href="#">Recrutements</a></li>
                </ul>
            </li>
            <li class='menu_item'><a href="#">Médiathèque</a>
                <ul class='sub_menu'>
                    <li class="sub_menu_item"><a href="#">Concerts en ligne</a></li>
                    <li class="sub_menu_item"><a href="#">Vidéos</a></li>
                    <li class="sub_menu_item"><a href="#">Photos</a></li>
                    <li class="sub_menu_item"><a href="#">Musiques</a></li>
                    <li class="sub_menu_item"><a href="#">Discographie</a></li>
                </ul>
            </li>
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