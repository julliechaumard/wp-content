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

<article class="marginb_80">

    <!-- --------------------------------- -->
    <!-- DISQUES (15 max.) -->
    <!-- --------------------------------- -->
    
    <?php for ($i = 1; $i <= 15; $i++) : 
        if(!empty(get_post_meta($post->ID, 'metadata_782_'.$i, true))) :?>


            <section class="margint_125">
                <div class="grid_disques grid_column_gap40 justifyc_center marginr_40_mobile marginl_40_mobile marginr_10_350px marginl_10_350px">

                    <!-- POCHETTE DISQUE -->
                    <div class="grid_area_21_desk">
                        <div class="">
                            <img class='img_width_80_mq401 img_width_100_mq400 grid_area_11 width_200_mobile' src="<?php echo get_post_meta($post->ID, 'metadata_787_'.$i.'', true); ?>" alt="Pochette">
                        </div>
                    </div>
                        


                    <!-- INFORMATION DISQUE -->


                    <div class="grid margint_10_mobile marginb_20_mobile">
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
                                <div class="marginb_20">
                                    <span class="icone paddingr_5"><img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/icone_gift.png" alt="icone acheter"></span><span><a class="ubuntu_fin tx_color_medias" target="_blank" href="<?php echo get_post_meta($post->ID, 'metadata_788_'.$i.'', true); ?>">Acheter</a></span>
                                </div>
                            <?php endif;?>
                            

                        </div>

                        <!-- EXTRAIT AUDIO -->
                        <?php if(!empty(get_post_meta($post->ID, 'metadata_786_'.$i, true))) : ?>
                            <div class="">
                                <audio class="width_145_mobile width_220_nomobile" controls controlsList="nodownload">
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