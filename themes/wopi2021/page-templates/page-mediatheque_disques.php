<?php
/*
Template Name: page_medias_disques
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
 get_template_part('template-parts/nav_secondaire');
?>

<main>

<article>

    <!-- --------------------------------- -->
    <!-- DISQUES (15 max.) -->
    <!-- --------------------------------- -->
    
    <?php for ($i = 1; $i <= 15; $i++) : 
        if(!empty(get_post_meta($post->ID, 'metadata_782_'.$i, true))) :?>


            <section class="margint_125">
                <div class="grid_disques justifyc_center">

                    <!-- POCHETTE DISQUE -->
                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                        <div class="">
                            <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_787_'.$i.'', true); ?>" alt="Pochette">
                        </div>
                    </div>
                        


                    <!-- INFORMATION DISQUE -->


                    <div class="grid paddingt_30 paddingr_50 marginb_20_mobile">
                        <div class="content_wp">
                            <div class="paddingb_20">
                                <!-- TITRE -->
                                <h2 class='titre_gras'>
                                    <span class=''><?php echo get_post_meta($post->ID, 'metadata_782_'.$i.'', true); ?></span>
                                </h2>
                                <!-- ARTISTES -->
                                <span class=''><?php echo get_post_meta($post->ID, 'metadata_783_'.$i.'', true); ?></span>

                            </div>
                            
                            <!-- PROGRAMME -->
                            <div class="paddingb_20">
                                <p class=''>
                                    <span class=''><?php echo get_post_meta($post->ID, 'metadata_784_'.$i.'', true); ?></span>
                                    <br>
                                    <!-- INFORMATIONS DIVERSES -->
                                    <span class='ubuntu_fin'><?php echo get_post_meta($post->ID, 'metadata_785_'.$i.'', true); ?></span>
                                </p>
                            </div>

                            <!-- ACHETER -->
                            <?php if(!empty(get_post_meta($post->ID, 'metadata_788_'.$i, true))) : ?>
                                <div>
                                    <span class="icone paddingr_5"><img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/icone_gift.png" alt="icone acheter"></span><span><a class="ubuntu_fin tx_color_medias" target="_blank" href="<?php echo get_post_meta($post->ID, 'metadata_788_'.$i.'', true); ?>">Acheter</a></span>
                                </div>
                            <?php endif;?>
                            

                        </div>

                        <!-- EXTRAIT AUDIO -->
                        <?php if(!empty(get_post_meta($post->ID, 'metadata_786_'.$i, true))) : ?>
                            <div class="justify_end">
                                <audio controls controlsList="nodownload">
                                    <source src="<?php echo get_post_meta($post->ID, 'metadata_786_'.$i.'', true); ?>" type="audio/mpeg">
                                </audio>
                            </div>
                        <?php endif;?>

                    </div>

                </div>

            </section>



        <?php endif;
    endfor; ?>

</article>

</main>

<?php
 get_footer();
?>