
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

<main>


<article class='back_image_mecenat'>

    <!-- --------------------------------- -->
    <!-- PRESENTATION DU MECENAT -->
    <!-- --------------------------------- -->    
    <section class="grid_2col12_5row tx_color_noir_fonce margin_section_botton">
        <!-- --------------------------------- -->
        <!-- BROCHURE EN LIGNE -->
        <!-- --------------------------------- -->    

        <div class='marginr_10'>
            <div style="text-align:center;">
                <div style="margin:8px 0px 4px;">
                    <p class='ubuntu_leger'>Consulter la Brochure en ligne</p>
                </div>
                <iframe src="//v.calameo.com/?bkcode=0066403713ce07ad7a70b" width="180" height="194" frameborder="0" scrolling="no" allowtransparency="" allowfullscreen="" style="margin:0 auto;"></iframe>
 
            </div>
        </div>

        <!-- --------------------------------- -->
        <!-- PRESENTATION DU MECENAT -->
        <!-- --------------------------------- -->    
        <section class="grid_area_1-31 grid_area_21 margin_section_botton">
             
            <!-- TITRE -->
            <div>
                <h2 class='titre_chapitre_container'>
                    <span class='titre_gras'>PRÉSENTATION</span>
                    <br>
                    <span class='titre_leger'>DU MÉCÉNAT D’ENTREPRISE</span>
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
<!-- LA BROCHURE -->
<!-- --------------------------------- -->

<section class='plainbox grid align_center justify_center bg_color_orchestre margin_section_botton'>
    <div style="text-align:center;">
        <div style="margin:8px 0px 4px;">
            <div>
                <h2 class='titre_chapitre_container tx_color_blanc'>
                    <span class='titre_gras'>CONSULTER</span>
                    <br>
                    <span class='titre_leger'>LA BROCHURE</span>
                </h2>
            </div>
        </div>
        <iframe src="//v.calameo.com/?bkcode=0066403713ce07ad7a70b" width="180" height="194" frameborder="0" scrolling="no" allowtransparency="" allowfullscreen="" style="margin:0 auto;"></iframe>

    </div>
</section>




<!-- --------------------------------- -->
<!-- LES MECENES -->
<!-- --------------------------------- -->
<section class='margin_section_botton'>
    <!-- TITRE -->
    <div>
        <h2 class='titre_chapitre_container'>
            <span class='titre_gras'>L’ORCHESTRE DE PICARDIE REMERCIE CHALEUREUSEMENT</span>
            <br>
            <span class='titre_leger'>L’ENSEMBLE DE SES MÉCÈNES POUR LEUR ENGAGEMENT ET LEUR SOUTIEN</span>
        </h2>
    </div>
    
    <!--  LES LOGOS -->
    <div class="grid_autocolmax_autorow_220 align_center marginl_20 marginl_0_mob">
        <?php for ($i = 1; $i <= 20; $i++) : 
            if (!empty(get_post_meta($post->ID, 'metadata_673_'.$i, true))):?>
                    <div class="">
                        <a href="<?php echo get_post_meta($post->ID, 'metadata_674_'.$i, true); ?>" target="_blank"> 
                            <img class='img_width max_width_250' src="<?php echo get_post_meta($post->ID, 'metadata_673_'.$i, true); ?>" alt="Photo du partenaire">
                        </a>
                    </div>
            <?php endif; 
        endfor; ?>
    </div>



</section>

</main>

<?php
 get_footer();
?>
