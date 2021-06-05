<?php
/*
Template Name: page_mur_social
*/
?>
<?php

get_header();
get_template_part('template-parts/header','page');

?>
<main>

<article>

    <section class="margin_section_botton margint_70 marginb_50">

        <!-- TITRE -->
        <div>
            <p class='titre_chapitre_container marginb_20'>
                <span class='titre_gras'>L'ORCHESTRE DE PICARDIE</span>
                <br>
                <span class='titre_leger'>EST PRÉSENT SUR LES RÉSEAUX SOCIAUX</span>
            </p>
        </div>

        <!-- La description -->
        <div class='content_wp'>
            <?php while(have_posts())  : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>

    </section>

</article>

<section>

    <script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>
    <link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
    <ul class="juicer-feed paddingrl_25_400" data-feed-id="orchespicardie"
        data-per="20" 
        data-pages="3" 
        data-truncate="300"
        data-columns="3"
        data-gutter="35"
        data-starting-at="2020-01-01"
        data-after="translateJuicer()">
    </ul>

    <script type="text/javascript">
        function translateJuicer() {
        $('.juicer-feed ul.j-display-filters li.all').text('Tous');
        jQuery('.j-paginate').text("Voir plus")
        }
    </script>

</section>

</main>


<?php
 get_footer();
?>
