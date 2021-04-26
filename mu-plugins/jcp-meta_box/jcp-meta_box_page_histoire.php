<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_histoire() {
    global $post;
    if ( 'page-templates/page-histoire.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_histoire',
            'Informations page notre histoire',
            'metabox_page_histoire',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_histoire($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_630 = get_post_meta( $post->ID, 'metadata_630', true );
    $metadata_631 = get_post_meta( $post->ID, 'metadata_631', true );

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
                        <label for="metadata_630">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_630" id="metadata_630" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_630; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_631">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_631" id="metadata_631" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_631; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_histoire($post_id) {
    
    if ('page-templates/page-histoire.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_630', $_POST)) { update_post_meta( $post_id, 'metadata_630', $_POST['metadata_630']);};
    if ('page-templates/page-histoire.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_631', $_POST)) { update_post_meta( $post_id, 'metadata_631', $_POST['metadata_631']);};

}

?>