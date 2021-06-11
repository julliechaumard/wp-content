<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_medias_videos() {
    global $post;
    if ( 'page-templates/page-mediatheque_videos.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_medias_videos',
            'LES VIDÉOS',
            'metabox_page_medias_videos',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_medias_videos($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_761 = get_post_meta( $post->ID, 'metadata_761', true );
    $metadata_762 = get_post_meta( $post->ID, 'metadata_762', true );
    for ($i = 1; $i <= 5; $i++) {
        $metadata_763_[$i] = get_post_meta( $post->ID, 'metadata_763_'.$i.'', true );
    }
    for ($i = 1; $i <= 5; $i++) {
        $metadata_764_[$i] = get_post_meta( $post->ID, 'metadata_764_'.$i.'', true );
    }
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 15; $j++) {  
            ${"metadata_765_[$i]_$j"} = get_post_meta( $post->ID, 'metadata_765_'.$i.'_'.$j.'', true );  
        }
    }

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    
    <!-- --------------------- -->
    <!-- ACCROCHE -->
    <!-- --------------------- -->
    <section class='metagroup'>
        <!-- ACCROCHE DE LA PAGE -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_761">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_761" id="metadata_761" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_761; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_762">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_762" id="metadata_762" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_762; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>


    <!-- --------------------- -->
    <!-- THEME 1 à 5-->
    <!-- --------------------- -->

    <!-- i = thème -->
    <!-- j = photo -->
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <section class='metagroup'>
            
            <h2>THÈME <?php echo $i; ?></h2>
            <!-- TITRE -->
            <div class='metagroup_sub'>
                
                <div class='metagroup_sub_items grid_3fr_simple'>
                        <div class="pinput">
                            <label for="metadata_763_<?php echo $i; ?>">TITRE GRAS</label>
                            <input type="text" name="metadata_763_<?php echo $i; ?>" id="metadata_763_<?php echo $i; ?>" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_763_[$i]; ?>"/>
                        </div>
                        <div class=''>
                            <div class="pinput">
                                <label for="metadata_764_<?php echo $i; ?>">TITRE LEGER</label>
                                <input type="text" name="metadata_764_<?php echo $i; ?>" id="metadata_764_<?php echo $i; ?>" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_764_[$i]; ?>"/>
                            </div>     
                        </div>
                </div>
                
            </div>

            <!-- 10 Vidéos -->
            <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($j = 1; $j <= 15; $j++) { ?>
                        <div class="pinput">
                            <label for="metadata_765_<?php echo $i; ?>_<?php echo $j; ?>">Code vidéo YouTube <?php echo $j; ?></label>
                            <input type="text" name="metadata_765_<?php echo $i; ?>_<?php echo $j; ?>" id="metadata_765_<?php echo $i; ?>_<?php echo $j; ?>" value="<?php echo ${"metadata_765_[$i]_$j"}; ?>"/>
                        </div>
                    <?php } ?>
                </div>
        </section>
    <?php endfor; ?>






    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_medias_videos($post_id) {
    
    if ('page-templates/page-mediatheque_videos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_761', $_POST)) { update_post_meta( $post_id, 'metadata_761', $_POST['metadata_761']);};
    if ('page-templates/page-mediatheque_videos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_762', $_POST)) { update_post_meta( $post_id, 'metadata_762', $_POST['metadata_762']);};

    for ($i = 1; $i <= 5; $i++) {
        if ('page-templates/page-mediatheque_videos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_763_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_763_'.$i.'', $_POST['metadata_763_'.$i.'']);};
    }
    for ($i = 1; $i <= 5; $i++) {
        if ('page-templates/page-mediatheque_videos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_764_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_764_'.$i.'', $_POST['metadata_764_'.$i.'']);};
    }
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <=15; $j++) {
            if ('page-templates/page-mediatheque_videos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_765_'.$i.'_'.$j.'', $_POST)) { update_post_meta( $post_id, 'metadata_765_'.$i.'_'.$j.'', $_POST['metadata_765_'.$i.'_'.$j.'']);};
        }
    }

}

?>