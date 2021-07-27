<?php
/*
Template Name: page_soutenez_picardissimo
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
                <h2 class='titre_chapitre_container marginb_20'>
                    <span class='titre_gras'>PRÉSENTATION</span>
                    <br>
                    <span class='titre_leger'>DE PICARDISSIMO</span>
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
            <h2 class='titre_chapitre_container marginb_20 tx_color_orchestre'>
                <span class='titre_gras'>INFORMATIONS</span>
                <br>
                <span class='titre_leger'>PRATIQUES</span>
            </h2>
        </div>
        <!-- ICONE -->
        <div class="marginb_12_mobilexs">
            <img class='width_50_desk max_width_44_mobile' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icones_informations_pratiques_bleu.png" alt="Logo Orchestre de Picardie">
        </div>
        
        <div class="grid_area_1_32_mob marginl_12_mobilexs">
        
            <!-- INFORMATION -->
            <div class="content_wp">
                <?php echo get_post_meta($post->ID, 'metadata_694', true); ?>
                <p class="marginb_6"><button class="button_petit button_orchestre"><a target="_blank" href="mailto:communication@orchestredepicardie.fr?subject=Contact MÉCÉNAT PICARDISSIMO depuis le site internet de l'Orchestre">CONTACTEZ-NOUS</a></button></p>
            </div>

        </div>

    </section>

</article>


<!-- --------------------------------- -->
<!-- LISTE MEMBRES PICARDISSIMO -->
<!-- --------------------------------- -->
<section class="margin_section_botton">

    <!-- Titre -->
    <div class="borderb marginb_20 paddingt_30">
        <h2 class='titre_chapitre_container marginb_20'>
            <span class='titre_leger'>MEMBRES</span>
            <br>
            <span class='titre_gras'>DU CONSEIL D’ADMINISTRATION DE PICARDISSIMO</span>
        </h2>
    </div>

    <!-- LES ASSOCIATIONS -->
    <div class="grid_2colmax_20_110 grid_row_gap20_mob marginr_40 marginl_20">

        <div>
            <img class='' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/association_icone.png" alt="Logo Orchestre de Picardie">
        </div>
        
        <div>
            <!-- NOMS  -->
            <?php for ($i = 1; $i <= 10; $i++) :
                if (!empty(get_post_meta($post->ID, 'metadata_692_'.$i, true))) :?>
                    <div class="">
                        <div class="grid_2col24_46 grid_column_gap24 align_start marginb_6">
                            <!-- NOM DU MEMBRE -->
                            <p class="titre_gras texte_right texte_left_mob"><?php echo get_post_meta($post->ID, 'metadata_692_'.$i, true); ?></p>
                            <!-- POSTE -->
                            <?php if (!empty(get_post_meta($post->ID, 'metadata_693_'.$i, true))): ?>
                                <p class="fontsize_13 ubuntu_fin"><?php echo get_post_meta($post->ID, 'metadata_693_'.$i, true); ?></p>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;
            endfor; ?>
        </div>
        
    </div>
</section>

</main>

<?php
 get_footer();
?>
