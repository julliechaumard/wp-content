<?php
/*
Template Name: page_avousdejouer
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
 get_template_part('template-parts/nav_secondaire');
?>

<main>

<article>

    <!-- ----------------------- -->
    <!-- TITRE + DESCRIPTION  -->
    <!-- ----------------------- -->
    <section class="margint_90 margin_section_botton">
        <div class="grid_2col12">
                    <div class="concert_card grid grid_area_21_desk grid_area_12_mob">
                        <div class="content_wp">
                            <?php while(have_posts())  : the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                
            <!-- TITRE -->
            <div class="grid paddingr_30 marginb_20_mobile">
                <div class="grid">
                    <!-- TITRE-->
                    <div class="">
                        <h2 class='titre_card_container_grand'>
                            <span class='titre_leger'>LES OEUVRES</span>
                            <br>
                            <span class='titre_gras'>QUE VOUS POUVEZ JOUER</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </section>



        <!-- --------------------------------- -->
        <!-- LES CAPSULES NOMADPLAY -->
        <!-- --------------------------------- -->

            <section class="margint_70 margin_section_botton">
                <!-- LES CAPSULES  -->
                <div class="grid_3col_liste grid_column_gap24 grid_row_gap50 height_min_200 margint_40">

                    <?php for ($i = 1; $i <= 20; $i++) : 
                        if (!empty(get_post_meta($post->ID, 'metadata_774_'.$i.'', true))) :?>
                            <!-- LA CAPSULE  -->
                            <div class="encoche_list_card">
                                <!-- ILLUSTRATION -->
                                <div class="grid nopagemarge_mobxs">
                                    <img class='img_ajust_liste grid_area_11' src="<?php echo get_post_meta($post->ID, 'metadata_773_'.$i.'', true); ?>" alt="Photo de la capsule nomadplay">
                                    <div class="grid_area_11 encoche_blanc"></div>
                                </div>                            
                                <!-- INFORMATION -->
                                <div class="margint_-4 paddingt_15 paddingb_15 paddingr_15 paddingl_15">
                                    <div>
                                        <div>
                                            <!-- Titre -->
                                            <p class="ubuntu_bold paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_774_'.$i.'', true); ?></p>
                                            <!-- DESCRIPTION COURTE -->
                                            <?php if (!empty(get_post_meta($post->ID, 'metadata_775_'.$i.'', true))): ?>
                                                <p class="fontsize_13 ubuntu_fin paddingt_7 paddingb_5"><?php echo get_post_meta($post->ID, 'metadata_775_'.$i.'', true); ?></p>
                                            <?php endif;?>
                                        </div>
                                        <div class="fleche fleche_medias alignself_end paddingt_20 marginb_6 ubuntu_bold tx_color_medias"><a target="_blank" href="<?php echo get_post_meta($post->ID, 'metadata_776_'.$i.'', true); ?>">EN SAVOIR PLUS <img src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/lien_fleche_mauve.png" alt=""></a></div>
                                    </div>
                                    
                                </div>
                            </div>
                        <?php endif;?>
                    <?php endfor; ?>
                </div>
            </section>




</article>


</main>

<?php
 get_footer();
?>
