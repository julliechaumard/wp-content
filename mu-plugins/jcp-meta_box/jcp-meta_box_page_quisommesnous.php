<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_quisommesnous() {
    global $post;
    if ( 'page-templates/page-quisommesnous.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_quisommesnous',
            'Informations page quisommesnous',
            'metabox_page_quisommesnous',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_quisommesnous($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_650 = get_post_meta( $post->ID, 'metadata_650', true );
    $metadata_651 = get_post_meta( $post->ID, 'metadata_651', true );

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
                        <label for="metadata_650">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_650" id="metadata_650" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_650; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_651">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_651" id="metadata_651" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_651; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_quisommesnous($post_id) {
    
    if ('page-templates/page-quisommesnous.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_650', $_POST)) { update_post_meta( $post_id, 'metadata_650', $_POST['metadata_650']);};
    if ('page-templates/page-quisommesnous.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_651', $_POST)) { update_post_meta( $post_id, 'metadata_651', $_POST['metadata_651']);};

}

?>