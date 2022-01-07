<?php
/*
Template Name: page_medias_vialma
*/
?>
<?php
 get_header();
 get_template_part('template-parts/header','page');
 get_template_part('template-parts/nav_secondaire');
?>

<main>

    <article class='grid grid_row_gap50 justifyc_center marginb_60'>

        <div class='margint_30'><img class="img_ajust_liste max_width_120" src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_vialma.jpg" alt="illustration Vialma"></div>

        <div class="justifys_center ubuntu_bold tx_color_vialma"><a target='_blank' href="https://email.vialma.com/fr-orchestre-de-picardie/?utm_source=Picardie&utm_medium=website&utm_campaign=lancement"><span class="paddingr_10 fontsize_18">Pour profitez de 30 jours gratuits c'est par ici</span><img class='width_20' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/ouvrir_vialma.png" alt=""></a></div>

        <div>
            <img class="img_ajust justifys_center" src="<?php bloginfo('template_directory');?>/dist/assets/images/illustration_vialma.jpg" alt="illustration Vialma">
        </div>

        <div class='justifys_center max_width_300'>
            <p class='marginb_20 ubuntu_moyen'>L’Orchestre de Picardie est partenaire de Vialma, le service de streaming français dédié à la musique classique et au jazz !</p>
            <p class='ubuntu_leger fontsize_14'>Vialma vous donne accès à un catalogue inépuisable d’1.5 million de titres de musique classique et de jazz en haute qualité audio, mais pas seulement ! Vidéos de concert en HD et événements en livestream, playlists personnalisées, articles de fond, jeux, podcasts et beaucoup d’autres surprises vous attendent. Vous pourrez aussi suivre notre orchestre sur Vialma et découvrir nos playlists, vidéos et articles</p>
        </div>

        <div class='justifys_center titre_chapitre_container'>
            <p class="titre_gras">LES AVANTAGES VIALMA</p>
        </div>
        <div class='justifys_center'>
            <p class="titre_leger">Le seul service qui vous offre tout au même endroit !</p>
        </div>

        <div class='max_width_600 justifys_center grid_media_vialma_avantages grid_column_gap30 grid_row_gap14 ubuntu_fin'>
            <div><p><i class="fas fa-check"></i> Plonger dans un catalogue inépuisable <span class='ubuntu_leger'>d'1,5 million de titres audio & vidéo</span></p></div>
            <div><p><i class="fas fa-check"></i> Écoutez en <span class='ubuntu_leger'>très haute qualité audio</span> (FLAC)</p></div>
            <div><p><i class="fas fa-check"></i> Retrouvez tous <span class='ubuntu_leger'>les plus grands orchestres</span> d'Europe</p></div>
            <div><p><i class="fas fa-check"></i> Soyez aux premières loges avec des <span class='ubuntu_leger'>vidéos de concerts en HD</span> : ballets, opéras, récitals...</p></div>
            <div><p><i class="fas fa-check"></i> Choisissez, parmi nos milliers de <span class='ubuntu_leger'>playlists thématiques</span>, celle qui corespond le mieux à votre humeur</p></div>
            <div><p><i class="fas fa-check"></i> Allez plus loin et plongez dans l'histoire de la musique avec des <span class='ubuntu_leger'>podcasts, des articles, des jeux</span>...</p></div>
            <div><p><i class="fas fa-check"></i> Profitez <span class='ubuntu_leger'>d'avantages et privilèges</span> obtenus juste pour vous : places de concert, cours de musique, livres, CD, voyages, et plus encore...</p></div>
        </div>

        <div class="justifys_center ubuntu_bold tx_color_vialma"><a target='_blank' href="https://email.vialma.com/fr-orchestre-de-picardie/?utm_source=Picardie&utm_medium=website&utm_campaign=lancement"><span class="paddingr_10 fontsize_18">Pour profitez de 30 jours gratuits c'est par ici</span><img class='width_20' src="<?php bloginfo('template_directory');?>/dist/assets/images/icones/ouvrir_vialma.png" alt=""></a></div>

        <div class="justifys_center max_width_600">
            <video class="img_ajust_liste" controls>
                <source src="<?php bloginfo('template_directory');?>/dist/assets/videos/vialma_video_ad_fr.mp4" type="video/mp4">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
                    Voici <a href="myVideo.mp4">un lien pour télécharger la vidéo</a>.</p>
            </video>
        </div>

    </article>

</main>

<?php
 get_footer();
?>