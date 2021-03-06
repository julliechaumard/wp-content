<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_partenaires() {
    global $post;
    if ( 'page-templates/page-partenaires.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_partenaires',
            'Informations page partenaires',
            'metabox_page_partenaires',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_partenaires($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_640 = get_post_meta( $post->ID, 'metadata_640', true );
    $metadata_641 = get_post_meta( $post->ID, 'metadata_641', true );

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
                        <label for="metadata_640">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_640" id="metadata_640" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_640; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_641">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_641" id="metadata_641" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_641; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_partenaires($post_id) {
    
    if ('page-templates/page-partenaires.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_640', $_POST)) { update_post_meta( $post_id, 'metadata_640', $_POST['metadata_640']);};
    if ('page-templates/page-partenaires.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_641', $_POST)) { update_post_meta( $post_id, 'metadata_641', $_POST['metadata_641']);};

}

?>