<?php
/*
Template Name: page_histoire
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
?>

<main>


    <article class="grid_2col12_5row tx_color_noir_fonce margin_section_botton">
        
        <!-- --------------------------------- -->
        <!-- L'HISTOIRE -->
        <!-- --------------------------------- -->    
        <section class="grid_area_1-31 grid_area_21 margin_section_botton">
             
            <!-- TITRE -->
            <div>
                <h2 class='titre_chapitre_container'>
                    <span class='titre_gras'>ORCHESTRE NATIONAL</span>
                    <br>
                    <span class='titre_leger'>EN RÉGION HAUTS-DE-FRANCE</span>
                </h2>
            </div>

            <!-- DESCRIPTION -->
            <div class='content_wp'>
                <?php while(have_posts())  : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </section>
        

        <!-- --------------------------------- -->
        <!-- LES CHIFFRES -->
        <!-- --------------------------------- -->

        <div class="grid_area_12 justify_end_min500px marginr_20 marginb_12_mobilexs">
            <img class='' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/icone_chiffres.png" alt="Logo Orchestre de Picardie">
        </div>
        


        <div class="grid_area_22 grid_area_13 marginl_12_mobilexs">
            <!-- TITRE -->
            <div>
                <h2 class='titre_chapitre_container'>
                    <span class='titre_gras'>DEPUIS SA CRÉATION</span>
                    <br>
                    <span class='titre_leger'>C'EST</span>
                </h2>
            </div>
        
            <!-- INFORMATION -->
            <div class="content_wp">
                <!-- RECUPERER LE CONTENU DE LA PAGE "CHIFFRES" -->
                <?php $mypost = get_page_by_title('Chiffres', OBJECT, 'page');
                echo $mypost->post_content;?>
            </div>

        </div>

    </article>


</main>

<?php
 get_footer();
?>
