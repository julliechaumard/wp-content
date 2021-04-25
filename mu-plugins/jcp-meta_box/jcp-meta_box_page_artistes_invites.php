<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_artistes_invites() {
    global $post;
    if ( 'page-templates/page-artistes_invites.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_artistes_invites',
            'Informations page artistes invités',
            'metabox_page_artistes_invites',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_artistes_invites($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_140 = get_post_meta( $post->ID, 'metadata_140', true );
    $metadata_141 = get_post_meta( $post->ID, 'metadata_141', true );

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
                        <label for="metadata_140">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_140" id="metadata_140" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_140; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_141">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_141" id="metadata_141" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_141; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_artistes_invites($post_id) {
    global $post;
    if ('page-templates/page-artistes_invites.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_140', $_POST)) { update_post_meta( $post->ID, 'metadata_140', $_POST['metadata_140']);};
    if ('page-templates/page-artistes_invites.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_141', $_POST)) { update_post_meta( $post->ID, 'metadata_141', $_POST['metadata_141']);};

}

?>