<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_recrutement() {
    global $post;
    if ( 'page-templates/page-recrutements.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_recrutement',
            'Informations page recrutement',
            'metabox_page_recrutement',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_recrutement($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_660 = get_post_meta( $post->ID, 'metadata_660', true );
    $metadata_661 = get_post_meta( $post->ID, 'metadata_661', true );

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
                        <label for="metadata_660">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_660" id="metadata_660" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_660; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_661">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_661" id="metadata_661" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_661; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_recrutement($post_id) {

    if ('page-templates/page-recrutements.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_660', $_POST)) { update_post_meta( $post_id, 'metadata_660', $_POST['metadata_660']);};
    if ('page-templates/page-recrutements.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_661', $_POST)) { update_post_meta( $post_id, 'metadata_661', $_POST['metadata_661']);};

}

?>