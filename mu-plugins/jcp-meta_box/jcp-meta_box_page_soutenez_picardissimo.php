<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_soutenez_picardissimo() {
    global $post;
    if ( 'page-templates/page-soutenez_picardissimo.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_soutenez_picardissimo',
            'Informations page soutenez_picardissimo',
            'metabox_page_soutenez_picardissimo',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_soutenez_picardissimo($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_100 = get_post_meta( $post->ID, 'metadata_100', true );
    $metadata_101 = get_post_meta( $post->ID, 'metadata_101', true );

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
                        <label for="metadata_100">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_100" id="metadata_100" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_100; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_101">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_101" id="metadata_101" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_101; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_soutenez_picardissimo($post_id) {
    global $post;
    if ('page-templates/page-saison.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_100', $_POST)) { update_post_meta( $post->ID, 'metadata_100', $_POST['metadata_100']);};
    if ('page-templates/page-saison.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_101', $_POST)) { update_post_meta( $post->ID, 'metadata_101', $_POST['metadata_101']);};

}

?>