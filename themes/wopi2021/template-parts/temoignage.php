<?php
//// BLOC TEMOIGNAGE

?>


<!-- ACCUEIL -->
<?php
if ( is_front_page() ) :
    $temoignage_texte1 = get_post_meta($post->ID, 'metadata_014_1', true); 
    $temoignage_nom1 = get_post_meta($post->ID, 'metadata_013_1', true); 
endif; ?>


<section class='plainbox_temoignage grid justify_center bg_color_accueil margin_section_botton'>
    <div class="grid texte_center marginr_100_nomobile marginl_100_nomobile marginr_50_mobile marginl_50_mobile marginr_15_mobilexs marginl_15_mobilexs">
        <div>
            <h2 class='titre_plainbox_container fontsize_27 marginb_20 tx_color_blanc'>
                <span class='titre_leger'>TÉMOIGNAGE</span>
            </h2>
        </div>
        <div class='texte_plainbox_container fontsize_20 margin_section_botton tx_color_blanc'>
            <p class='parisienne fontsize_25'><?php echo $temoignage_texte1; ?></p>
        </div>

        <div class='alignself_end flex flex_justify_center ubuntu_moyen fontsize_20 tx_color_blanc'>
            <p class="borderb_white"><?php echo $temoignage_nom1; ?></p>
        </div>

        

    </div>

</section>