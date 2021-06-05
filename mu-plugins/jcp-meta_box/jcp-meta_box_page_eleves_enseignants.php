<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_eleves_enseignants() {
    global $post;
    if ( 'page-templates/page-eleves_enseignants.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_eleves_enseignants',
            'Informations page élèves et enseignants',
            'metabox_page_eleves_enseignants',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_eleves_enseignants($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_480 = get_post_meta( $post->ID, 'metadata_480', true );
    $metadata_481 = get_post_meta( $post->ID, 'metadata_481', true );
    $metadata_482 = get_post_meta( $post->ID, 'metadata_482', true );
    for ($i = 1; $i <= 3; $i++) {
        $metadata_483_[$i] = get_post_meta( $post->ID, 'metadata_483_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_484_[$i] = get_post_meta( $post->ID, 'metadata_484_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_485_[$i] = get_post_meta( $post->ID, 'metadata_485_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_486_[$i] = get_post_meta( $post->ID, 'metadata_486_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_487_[$i] = get_post_meta( $post->ID, 'metadata_487_'.$i.'', true );
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
        <!-- ACCROCHE DE LA PAGE ELEVES ET ENSEIGNANTS -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_480">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_480" id="metadata_480" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_480; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_481">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_481" id="metadata_481" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_481; ?></textarea>
                    </div>     
            </div>
        </div>
        <!-- LES CONTACTS -->
        <h2>CONTACTS</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items'>
                <div class="bloc50p">
                    <!-- ADRESSE DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_482">Nous contacter coordonnées</label>
                        <textarea name="metadata_482" id="metadata_482" cols="50" rows="4" placeholder=""><?php echo $metadata_482; ?></textarea>
                    </div>
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
                        <label for="metadata_483_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_483_<?php echo $i; ?>" id="metadata_483_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_483_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_485_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_485_<?php echo $i; ?>" id="metadata_485_<?php echo $i; ?>" value="<?php echo $metadata_485_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_484_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_484_<?php echo $i; ?>" id="metadata_484_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_484_[$i]; ?></textarea>
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
                        <label for="metadata_486_<?php echo $i; ?>">Nom du témoin <?php echo $i; ?></label>
                        <input type="text" name="metadata_486_<?php echo $i; ?>" id="metadata_486_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_486_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE Du TEMOIGNAGE-->
                    <div class="pinput">
                        <label for="metadata_487_<?php echo $i; ?>">Texte du témoignage <?php echo $i; ?></label>
                        <textarea name="metadata_487_<?php echo $i; ?>" id="metadata_487_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_487_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
        
    </section>


    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_eleves_enseignants($post_id) {
    
    if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_480', $_POST)) { update_post_meta( $post_id, 'metadata_480', $_POST['metadata_480']);};
    if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_481', $_POST)) { update_post_meta( $post_id, 'metadata_481', $_POST['metadata_481']);};
    if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_482', $_POST)) { update_post_meta( $post_id, 'metadata_482', $_POST['metadata_482']);};
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_483_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_483_'.$i.'', $_POST['metadata_483_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_484_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_484_'.$i.'', $_POST['metadata_484_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_485_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_485_'.$i.'', $_POST['metadata_485_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_486_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_486_'.$i.'', $_POST['metadata_486_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-eleves_enseignants.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_487_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_487_'.$i.'', $_POST['metadata_487_'.$i.'']);};
    }
}

?>