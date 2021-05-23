<?php
/*
Template Name: page_soutenez_particulier
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
 get_template_part('template-parts/nav_secondaire');
?>

<main>

<article class='back_image_mecenat'>

    <!-- --------------------------------- -->
    <!-- PRESENTATION DU MECENAT -->
    <!-- --------------------------------- -->    
    <section class="grid_2col12_5row tx_color_noir_fonce margin_section_botton">

        <!-- --------------------------------- -->
        <!-- PRESENTATION DU MECENAT -->
        <!-- --------------------------------- -->    
        <section class="grid_area_1-31 grid_area_21 margin_section_botton">
             
            <!-- TITRE -->
            <div>
                <h2 class='titre_chapitre_container'>
                    <span class='titre_gras'>PRÉSENTATION</span>
                    <br>
                    <span class='titre_leger'>DU MÉCÉNAT POUR LES PARTICULIERS</span>
                </h2>
            </div>

            <!-- DESCRIPTION -->
            <div class='content_wp'>
                <?php while(have_posts())  : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </section>

    </section>
        
    <!-- --------------------------------- -->
    <!-- INFORMATIONS PRATIQUES -->
    <!-- --------------------------------- -->
    <section class='grid_infos_pratiques grid_column_gap40 paddingb_50'>

        <!-- TITRE -->
        <div>
            <h2 class='titre_chapitre_container tx_color_orchestre'>
                <span class='titre_gras'>INFORMATIONS</span>
                <br>
                <span class='titre_leger'>PRATIQUES</span>
            </h2>
        </div>
        <!-- ICONE -->
        <div class="marginb_12_mobilexs">
            <img class='max_width_44_mobile' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icones_informations_pratiques_bleu.png" alt="Logo Orchestre de Picardie">
        </div>
        
        <div class="grid_area_1_32_mob marginl_12_mobilexs">
        
            <!-- INFORMATION -->
            <div class="content_wp">
                <p>Notre équipe est à votre écoute pour définir un ensemble de contreparties selon vos attentes et le montant de votre don.</p>
                <p>— Prénom NOM
                <br>
                Collaboratrice de Direction, Chargée du mécénat
                <br>
                03.22.92.15.04</p>
                <p class="marginb_6"><button class="button_petit button_orchestre"><a target="_blank" href="mailto:lullishop@icloud.com?subject=Contact MÉCÉNAT ENTREPRISE depuis le site internet de l'Orchestre">CONTACTEZ-NOUS</a></button></p>
            </div>

        </div>

    </section>

</article>



<!-- --------------------------------- -->
<!-- ACTION A L'HOPITAL -->
<!-- --------------------------------- -->

<section class='plainbox grid align_center justify_center bg_color_orchestre margin_section_botton'>
    <div class="texte_center marginr_100_nomobile marginl_100_nomobile marginr_50_mobile marginl_50_mobile marginr_15_mobilexs marginl_15_mobilexs">
            <div>
                <h2 class='titre_chapitre_container tx_color_blanc'>
                    <span class='titre_gras'>APPORTONS LA MUSIQUE À L’HÔPITAL</span>
                    <br>
                    <span class='titre_leger'>Campagne de financement participatif destinée à la mise en place de rencontres musicales au CHU Amiens-Picardie</span>
                </h2>
            </div>
        <div class="fleche fleche_blanc paddingt_20 marginb_6 ubuntu_bold tx_color_blanc"><a href="https://www.commeon.com/fr/projet/musique-a-lhopital" target="_blank">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_blanc.png" alt=""></a></div>

    </div>
</section>

<!-- --------------------------------- -->
<!-- MUR DOMATEUR -->
<!-- --------------------------------- -->

<section>
    
</section>

</main>

<?php
 get_footer();
?>
