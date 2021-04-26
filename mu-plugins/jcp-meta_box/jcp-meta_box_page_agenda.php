<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_agenda() {
    global $post;
    if ( 'page-templates/page-agenda.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_agenda',
            'Informations page agenda',
            'metabox_page_agenda',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_agenda($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_110 = get_post_meta( $post->ID, 'metadata_110', true );
    $metadata_111 = get_post_meta( $post->ID, 'metadata_111', true );

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
                        <label for="metadata_110">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_110" id="metadata_110" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_110; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_111">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_111" id="metadata_111" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_111; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_agenda($post_id) {
    
    if ('page-templates/page-agenda.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_110', $_POST)) { update_post_meta( $post_id, 'metadata_110', $_POST['metadata_110']);};
    if ('page-templates/page-agenda.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_111', $_POST)) { update_post_meta( $post_id, 'metadata_111', $_POST['metadata_111']);};

}

?>