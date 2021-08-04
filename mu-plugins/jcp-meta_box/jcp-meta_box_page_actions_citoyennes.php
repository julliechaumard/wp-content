<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_actions_citoyennes() {
    global $post;
    if ( 'page-templates/page-actions_citoyennes.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_actions_citoyennes',
            'Informations page Actions citoyennes et sociales',
            'metabox_page_actions_citoyennes',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_actions_citoyennes($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_440 = get_post_meta( $post->ID, 'metadata_440', true );
    $metadata_441 = get_post_meta( $post->ID, 'metadata_441', true );
   
    for ($i = 1; $i <= 3; $i++) {
        $metadata_442_[$i] = get_post_meta( $post->ID, 'metadata_442_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_443_[$i] = get_post_meta( $post->ID, 'metadata_443_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_444_[$i] = get_post_meta( $post->ID, 'metadata_444_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_445_[$i] = get_post_meta( $post->ID, 'metadata_445_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_446_[$i] = get_post_meta( $post->ID, 'metadata_446_'.$i.'', true );
    }

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    
    <!-- --------------------- -->
    <!-- GROUPE ACCROCHE -->
    <section class='metagroup'>
        <!-- ACCROCHE DE LA PAGE A VOUS DE JOUER -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_440">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_440" id="metadata_440" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_440; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_441">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_441" id="metadata_441" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_441; ?></textarea>
                    </div>     
            </div>
        </div>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE REVUE DE PRESSE -->
    <section class='metagroup'>
        <h2>LA REVUE DE PRESSE</h2>

            <div class=''>
            
                <div class='metagroup_sub_items grid_revue_presse'>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <!-- NOM du JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_444_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_444_<?php echo $i; ?>" id="metadata_444_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_444_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_446_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_446_<?php echo $i; ?>" id="metadata_446_<?php echo $i; ?>" value="<?php echo $metadata_446_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_445_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_445_<?php echo $i; ?>" id="metadata_445_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_445_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
            
            </div>
        
    </section>

    <!-- --------------------- -->
    <!-- GROUPE TEMOIGNAGE -->
    <section class='metagroup'>
        <h2>TÉMOIGNAGE</h2>
            
                <div class='metagroup_sub_items grid_2fr'>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <!-- NOM du TEMOIN -->
                    <div class="pinput">
                        <label for="metadata_442_<?php echo $i; ?>">Nom du témoin <?php echo $i; ?></label>
                        <input type="text" name="metadata_442_<?php echo $i; ?>" id="metadata_442_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_442_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE Du TEMOIGNAGE-->
                    <div class="pinput">
                        <label for="metadata_443_<?php echo $i; ?>">Texte du témoignage <?php echo $i; ?></label>
                        <textarea name="metadata_443_<?php echo $i; ?>" id="metadata_443_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_443_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
        
    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_actions_citoyennes($post_id) {

    if ('page-templates/page-actions_citoyennes.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_440', $_POST)) { update_post_meta( $post_id, 'metadata_440', $_POST['metadata_440']);};
    if ('page-templates/page-actions_citoyennes.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_441', $_POST)) { update_post_meta( $post_id, 'metadata_441', $_POST['metadata_441']);};
    
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-actions_citoyennes.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_442_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_442_'.$i.'', $_POST['metadata_442_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-actions_citoyennes.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_443_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_443_'.$i.'', $_POST['metadata_443_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-actions_citoyennes.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_444_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_444_'.$i.'', $_POST['metadata_444_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-actions_citoyennes.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_445_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_445_'.$i.'', $_POST['metadata_445_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-actions_citoyennes.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_446_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_446_'.$i.'', $_POST['metadata_446_'.$i.'']);};
    }


}

?>