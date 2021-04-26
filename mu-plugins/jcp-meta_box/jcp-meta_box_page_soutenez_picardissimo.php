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

    $metadata_690 = get_post_meta( $post->ID, 'metadata_690', true );
    $metadata_691 = get_post_meta( $post->ID, 'metadata_691', true );
    $metadata_694 = get_post_meta( $post->ID, 'metadata_694', true );
    for ($i = 1; $i <= 10; $i++) {
        $metadata_692_[$i] = get_post_meta( $post->ID, 'metadata_692_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_693_[$i] = get_post_meta( $post->ID, 'metadata_693_'.$i.'', true );
    }
    

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    echo '<p class="identifiant"> Identifiant article : ', $post->post_title, '</p>';
    ?>
    
    <!-- --------------------- -->
    <!-- GROUPE ACCROCHE -->
    <section class='metagroup'>
        <!-- ACCROCHE DE L'ARTISTE INVITE -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_690">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_690" id="metadata_690" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_690; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_691">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_691" id="metadata_691" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_691; ?></textarea>
                    </div>     
            </div>
        </div>

        <h2>CONTACTS</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items'>
                <div class="bloc50p">
                    <!-- ADRESSE DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_694">Nous contacter coordonnées</label>
                        <textarea name="metadata_694" id="metadata_694" cols="50" rows="4" placeholder=""><?php echo $metadata_694; ?></textarea>
                    </div>
                </div>
                    
            </div>
        </div>

    </section>


    <!-- --------------------- -->
    <!-- GROUPE ARTISTES -->
    <section class='metagroup'>
        <h2>LES MEMBRES DE PICARDISSIMO</h2>

            <div class=''>
            
                <div class='metagroup_sub_items grid_4fr_simple'>
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <!-- NOM de L'ARTISTE -->
                    <div class="pinput">
                        <label for="metadata_692_<?php echo $i; ?>">Nom <?php echo $i; ?></label>
                        <input type="text" name="metadata_692_<?php echo $i; ?>" id="metadata_692_<?php echo $i; ?>" value="<?php echo $metadata_692_[$i]; ?>"/>
                    </div>

                    <!-- POSTE de L'ARTISTE -->
                    <div class="pinput">
                        <label for="metadata_693_<?php echo $i; ?>">Poste <?php echo $i; ?></label>
                        <input type="text" name="metadata_693_<?php echo $i; ?>" id="metadata_693_<?php echo $i; ?>" value="<?php echo $metadata_693_[$i]; ?>"/>
                    </div>
                <?php } ?>
                </div>
            
            </div>
        
    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_soutenez_picardissimo($post_id) {


    if (get_post_meta($post_id, '_wp_page_template', true) == 'page-templates/page-soutenez_picardissimo.php' && array_key_exists('metadata_690', $_POST)) { update_post_meta( $post_id, 'metadata_690', $_POST['metadata_690']);};
    if (get_post_meta($post_id, '_wp_page_template', true) == 'page-templates/page-soutenez_picardissimo.php' && array_key_exists('metadata_691', $_POST)) { update_post_meta( $post_id, 'metadata_691', $_POST['metadata_691']);};
    if (get_post_meta($post_id, '_wp_page_template', true) == 'page-templates/page-soutenez_picardissimo.php' && array_key_exists('metadata_694', $_POST)) { update_post_meta( $post_id, 'metadata_694', $_POST['metadata_694']);};
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_meta($post_id, '_wp_page_template', true) == 'page-templates/page-soutenez_picardissimo.php' && array_key_exists('metadata_692_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_692_'.$i.'', $_POST['metadata_692_'.$i.'']);};
    }
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_meta($post_id, '_wp_page_template', true) == 'page-templates/page-soutenez_picardissimo.php' && array_key_exists('metadata_693_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_693_'.$i.'', $_POST['metadata_693_'.$i.'']);};
    }

}




?>