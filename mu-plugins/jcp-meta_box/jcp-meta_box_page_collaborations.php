<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_collaborations() {
    global $post;
    if ( 'page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_collaborations',
            'Informations page collaborations',
            'metabox_page_collaborations',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_collaborations($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_160 = get_post_meta( $post->ID, 'metadata_160', true );
    $metadata_161 = get_post_meta( $post->ID, 'metadata_161', true );
    for ($i = 1; $i <= 3; $i++) {
        $metadata_162_[$i] = get_post_meta( $post->ID, 'metadata_162_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_163_[$i] = get_post_meta( $post->ID, 'metadata_163_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_164_[$i] = get_post_meta( $post->ID, 'metadata_164_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_165_[$i] = get_post_meta( $post->ID, 'metadata_165_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_166_[$i] = get_post_meta( $post->ID, 'metadata_166_'.$i.'', true );
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
        <!-- ACCROCHE DE L'ARTISTE INVITE -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_160">Accroche - Mot ligne1</label>
                        <input type="text" name="metadata_160" id="metadata_160" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_160; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_161">Accroche - Mot ligne2+</label>
                        <textarea name="metadata_161" id="metadata_161" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_161; ?></textarea>
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
                        <label for="metadata_162_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_162_<?php echo $i; ?>" id="metadata_162_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_162_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_164_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_164_<?php echo $i; ?>" id="metadata_164_<?php echo $i; ?>" value="<?php echo $metadata_164_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_163_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_163_<?php echo $i; ?>" id="metadata_163_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_163_[$i]; ?></textarea>
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
                        <label for="metadata_165_<?php echo $i; ?>">Nom du témoin <?php echo $i; ?></label>
                        <input type="text" name="metadata_165_<?php echo $i; ?>" id="metadata_165_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_165_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE Du TEMOIGNAGE-->
                    <div class="pinput">
                        <label for="metadata_166_<?php echo $i; ?>">Texte du témoignage <?php echo $i; ?></label>
                        <textarea name="metadata_166_<?php echo $i; ?>" id="metadata_166_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_166_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
        
    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_collaborations($post_id) {
    global $post;
    if ('page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_160', $_POST)) { update_post_meta( $post->ID, 'metadata_160', $_POST['metadata_160']);};
    if ('page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_161', $_POST)) { update_post_meta( $post->ID, 'metadata_161', $_POST['metadata_161']);};
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_162_'.$i.'', $_POST)) { update_post_meta( $post->ID, 'metadata_162_'.$i.'', $_POST['metadata_162_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_163_'.$i.'', $_POST)) { update_post_meta( $post->ID, 'metadata_163_'.$i.'', $_POST['metadata_163_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_164_'.$i.'', $_POST)) { update_post_meta( $post->ID, 'metadata_164_'.$i.'', $_POST['metadata_164_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_165_'.$i.'', $_POST)) { update_post_meta( $post->ID, 'metadata_165_'.$i.'', $_POST['metadata_165_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-collaborations.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_166_'.$i.'', $_POST)) { update_post_meta( $post->ID, 'metadata_166_'.$i.'', $_POST['metadata_166_'.$i.'']);};
    }
}

?>