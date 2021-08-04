<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_mur_social() {
    global $post;
    if ( 'page-templates/page-mur_social.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_mur_social',
            'Informations page Mur social',
            'metabox_page_mur_social',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_mur_social($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_913 = get_post_meta( $post->ID, 'metadata_913', true );
    $metadata_914 = get_post_meta( $post->ID, 'metadata_914', true );
   

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
                            <label for="metadata_913">Accroche - Mots ligne1</label>
                            <input type="text" name="metadata_913" id="metadata_913" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_913; ?>"/>
                        </div>     
                </div>
                <div class='metagroup_sub_items grid_3fr_simple'>
                        <div class="pinput">
                            <label for="metadata_914">Accroche - Mots ligne2+</label>
                            <textarea name="metadata_914" id="metadata_914" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_914; ?></textarea>
                        </div>     
                </div>
            </div>
        </section>


    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_mur_social($post_id) {

    if ('page-templates/page-mur_social.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_913', $_POST)) { update_post_meta( $post_id, 'metadata_913', $_POST['metadata_913']);};
    if ('page-templates/page-mur_social.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_914', $_POST)) { update_post_meta( $post_id, 'metadata_914', $_POST['metadata_914']);};
    
}

?>