<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_concerts_jeunes() {
    global $post;
    if ( 'page-templates/page-concerts_jeunes.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_concerts_jeunes',
            'Informations page concerts_jeunes',
            'metabox_page_concerts_jeunes',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_concerts_jeunes($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_230 = get_post_meta( $post->ID, 'metadata_230', true );
    $metadata_231 = get_post_meta( $post->ID, 'metadata_231', true );

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
                        <label for="metadata_230">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_230" id="metadata_230" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_230; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_231">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_231" id="metadata_231" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_231; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_concerts_jeunes($post_id) {
    global $post;
    if ('page-templates/page-concerts_jeunes.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_230', $_POST)) { update_post_meta( $post->ID, 'metadata_230', $_POST['metadata_230']);};
    if ('page-templates/page-concerts_jeunes.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_231', $_POST)) { update_post_meta( $post->ID, 'metadata_231', $_POST['metadata_231']);};

}

?>