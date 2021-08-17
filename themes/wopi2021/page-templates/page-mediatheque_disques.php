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


            <section class="margint_90 margin_section_botton">
                <div class="grid_disques">

                    <!-- POCHETTE DISQUE -->
                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                        <div class="">
                            <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_787_'.$i.'', true); ?>" alt="Illustration du concert">
                        </div>
                    </div>
                        


                    <!-- INFORMATION DISQUE -->


                    <div class="grid paddingt_30 paddingr_30 marginb_20_mobile">
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

                        </div>

                        <!-- EXTRAIT AUDIO -->
                        <div class="justify_end">
                            <p>Écouter un extrait</p>
                            <audio controls>
                                <source src="<?php echo get_post_meta($post->ID, 'metadata_786_'.$i.'', true); ?>" type="audio/mpeg">
                            </audio>
                        </div>

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