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
        <section class="programme_concert_cell margin_section_botton">
             
            <!-- TITRE -->
            <div>
                <h4 class='titre_chapitre_container'>
                    <span class='titre_gras'>ORCHESTRE NATIONAL</span>
                    <br>
                    <span class='titre_leger'>EN RÉGION HAUTS-DE-FRANCE</span>
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
    <!-- LES CHIFFRES -->
    <!-- --------------------------------- -->
    <section>
        <div class="grid_2colmax_20_110 grid_row_gap20_mob marginr_40 marginl_20">

            <div>
                <img class='' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/association_icone.png" alt="Logo Orchestre de Picardie">
            </div>
            


            <div class="">
                <!-- TITRE -->
                <div>
                    <h4 class='titre_chapitre_container'>
                        <span class='titre_gras'>DEPUIS SA CRÉATION</span>
                        <br>
                        <span class='titre_leger'>C'EST</span>
                    </h4>
                </div>
            
                <!-- INFORMATION -->
                <div class="content_wp">
                    <p>— 3 101 concerts dont 2 641 dans 254 communes et villes en Hauts-de-France.</p>
                    <p>— En France, c’est 272 concerts dans 84 villes et à l’étranger 188 concerts dans 17 pays. </p>
                    <ul>
                        <li>
                        — 6 directeurs musicaux ont accompagné l’Orchestre dans son développement :
                        <ul>
                            <li>‣ Alexandre Myrat (1984-1989), </li>
                            <li>‣ Patrick Fournillier (1989-1992),</li>
                        </ul>
                        </li>
                        

                </div>
            </div>


            
        </div>

    </section>


</main>

<?php
 get_footer();
?>
