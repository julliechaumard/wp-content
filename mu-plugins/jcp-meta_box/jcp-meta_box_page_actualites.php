<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_actualites() {
    global $post;
    if ( 'page-templates/page-actualites.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_actualites',
            'Informations page actualites',
            'metabox_page_actualites',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_actualites($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_907 = get_post_meta( $post->ID, 'metadata_907', true );
    $metadata_908 = get_post_meta( $post->ID, 'metadata_908', true );

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
                        <label for="metadata_907">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_907" id="metadata_907" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_907; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_908">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_908" id="metadata_908" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_908; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_actualites($post_id) {
    
    if ('page-templates/page-actualites.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_907', $_POST)) { update_post_meta( $post_id, 'metadata_907', $_POST['metadata_907']);};
    if ('page-templates/page-actualites.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_908', $_POST)) { update_post_meta( $post_id, 'metadata_908', $_POST['metadata_908']);};

}

?>