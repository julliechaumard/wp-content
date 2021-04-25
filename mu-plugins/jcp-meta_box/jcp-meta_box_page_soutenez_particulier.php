<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_soutenez_particulier() {
    global $post;
    if ( 'page-templates/page-soutenez_particulier.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_soutenez_particulier',
            'Informations page soutenez_particulier',
            'metabox_page_soutenez_particulier',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_soutenez_particulier($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_680 = get_post_meta( $post->ID, 'metadata_680', true );
    $metadata_681 = get_post_meta( $post->ID, 'metadata_681', true );
    $metadata_682 = get_post_meta( $post->ID, 'metadata_682', true );

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
                        <label for="metadata_680">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_680" id="metadata_680" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_680; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_681">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_681" id="metadata_681" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_681; ?></textarea>
                    </div>     
            </div>
        </div>
        <h2>CONTACTS</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items'>
                <div class="bloc50p">
                    <!-- ADRESSE DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_682">Nous contacter coordonnées</label>
                        <textarea name="metadata_682" id="metadata_682" cols="50" rows="4" placeholder=""><?php echo $metadata_682; ?></textarea>
                    </div>
                </div>
                    
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_soutenez_particulier($post_id) {
    global $post;
    if ('page-templates/page-soutenez_particulier.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_680', $_POST)) { update_post_meta( $post->ID, 'metadata_680', $_POST['metadata_680']);};
    if ('page-templates/page-soutenez_particulier.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_681', $_POST)) { update_post_meta( $post->ID, 'metadata_681', $_POST['metadata_681']);};
    if ('page-templates/page-soutenez_particulier.php' == get_post_meta( $post->ID, '_wp_page_template', true ) && array_key_exists('metadata_682', $_POST)) { update_post_meta( $post->ID, 'metadata_682', $_POST['metadata_682']);};

}

?>