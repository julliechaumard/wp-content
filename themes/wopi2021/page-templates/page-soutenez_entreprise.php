
<?php
/*
Template Name: page_soutenez_entreprise
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
 get_template_part('template-parts/nav_secondaire');
?>

<main class='back_image_mecenat'>


<article class="grid_2col12_5row tx_color_noir_fonce margin_section_botton">
        
        <!-- --------------------------------- -->
        <!-- BROCHURE EN LIGNE -->
        <!-- --------------------------------- -->    

        <div class='marginr_10'>
            <div style="text-align:center;">
                <div style="margin:8px 0px 4px;">
                    <a class='ubuntu_leger' href="https://www.calameo.com/books/0066403713ce07ad7a70b" target="_blank" rel="noopener noreferrer">Consulter la Brochure en ligne</a>
                </div>
                <iframe src="//v.calameo.com/?bkcode=0066403713ce07ad7a70b" width="200" height="194" frameborder="0" scrolling="no" allowtransparency="" allowfullscreen="" style="margin:0 auto;"></iframe>
 
            </div>
        </div>

        <!-- --------------------------------- -->
        <!-- PRESENTATION DU MECENAT -->
        <!-- --------------------------------- -->    
        <section class="grid_area_1-31 grid_area_21 margin_section_botton">
             
            <!-- TITRE -->
            <div>
                <h4 class='titre_chapitre_container'>
                    <span class='titre_gras'>PRÉSENTATION</span>
                    <br>
                    <span class='titre_leger'>DU MÉCÉNAT D’ENTREPRISE</span>
                </h4>
            </div>

            <!-- DESCRIPTION -->
            <div class='content_wp'>
                <?php while(have_posts())  : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </section>

    </article>

    <!-- --------------------------------- -->
    <!-- INFORMATIONS PRATIQUES -->
    <!-- --------------------------------- -->
    <section class='grid_infos_pratiques grid_column_gap40 margin_section_botton'>

        <!-- TITRE -->
        <div>
            <h4 class='titre_chapitre_container tx_color_orchestre'>
                <span class='titre_gras'>INFORMATIONS</span>
                <br>
                <span class='titre_leger'>PRATIQUES</span>
            </h4>
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
            </div>

        </div>

    </section>

</main>

<?php
 get_footer();
?>
