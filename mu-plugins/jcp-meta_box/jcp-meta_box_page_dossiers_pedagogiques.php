<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_dossiers_pedagogiques() {
    global $post;
    if ( 'page-templates/page-dossiers_pedagogiques.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_dossiers_pedagogiques',
            'Informations page Dossiers pédagogiques',
            'metabox_page_dossiers_pedagogiques',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_dossiers_pedagogiques($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_488 = get_post_meta( $post->ID, 'metadata_488', true );
    $metadata_489 = get_post_meta( $post->ID, 'metadata_489', true );
   

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
                            <label for="metadata_488">Accroche - Mots ligne1</label>
                            <input type="text" name="metadata_488" id="metadata_488" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_488; ?>"/>
                        </div>     
                </div>
                <div class='metagroup_sub_items grid_3fr_simple'>
                        <div class="pinput">
                            <label for="metadata_489">Accroche - Mots ligne2+</label>
                            <textarea name="metadata_489" id="metadata_489" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_489; ?></textarea>
                        </div>     
                </div>
            </div>
        </section>


    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_dossiers_pedagogiques($post_id) {

    if ('page-templates/page-dossiers_pedagogiques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_488', $_POST)) { update_post_meta( $post_id, 'metadata_488', $_POST['metadata_488']);};
    if ('page-templates/page-dossiers_pedagogiques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_489', $_POST)) { update_post_meta( $post_id, 'metadata_489', $_POST['metadata_489']);};
    
}

?>