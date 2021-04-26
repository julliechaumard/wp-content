<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_soutenez_entreprise() {
    global $post;
    if ( 'page-templates/page-soutenez_entreprise.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_soutenez_entreprise',
            'Informations page soutenez_entreprise',
            'metabox_page_soutenez_entreprise',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_soutenez_entreprise($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_670 = get_post_meta( $post->ID, 'metadata_670', true );
    $metadata_671 = get_post_meta( $post->ID, 'metadata_671', true );
    $metadata_672 = get_post_meta( $post->ID, 'metadata_672', true );
    for ($i = 1; $i <= 20; $i++) {
        $metadata_673_[$i] = get_post_meta( $post->ID, 'metadata_673_'.$i.'', true );
    }
    for ($i = 1; $i <= 20; $i++) {
        $metadata_674_[$i] = get_post_meta( $post->ID, 'metadata_674_'.$i.'', true );
    }
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
                        <label for="metadata_670">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_670" id="metadata_670" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_670; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_671">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_671" id="metadata_671" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_671; ?></textarea>
                    </div>     
            </div>
        </div>
        <h2>CONTACTS</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items'>
                <div class="bloc50p">
                    <!-- ADRESSE DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_672">Nous contacter coordonnées</label>
                        <textarea name="metadata_672" id="metadata_672" cols="50" rows="4" placeholder=""><?php echo $metadata_672; ?></textarea>
                    </div>
                </div>
                    
            </div>
        </div>

    </section>

    <!-- --------------------- -->
    <!-- GROUPE LOGOS-->
    <section class='metagroup'>

        <h2>LOGOS</h2>

            <div class=''>

                <h3>LOGOS ET URL</h3>

                <div class='metagroup_sub_items grid_fr'>
                    <?php for ($i = 1; $i <= 20; $i++) { ?>
                        <!-- LOGO -->
                        <div class="pinput">
                            <label for="metadata_673_<?php echo $i; ?>">Logo <?php echo $i; ?></label>
                            <input type="text" name="metadata_673_<?php echo $i; ?>" id="metadata_673_<?php echo $i; ?>" class="photo-url_<?php echo $i; ?>" value="<?php echo $metadata_673_[$i]; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_673_'.$i.'', true); ?>" style="max-width: 150px;">
                        </div>
                        <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
                        <script>
                            jQuery(document).ready(function ($) {
                                // Instantiates the variable that holds the media library frame.
                                var meta_image_frame;
                                // Runs when the image button is clicked.
                                $('.photo-uploader_<?php echo $i; ?>').click(function (e) {
                                    // Get preview pane
                                    var meta_image_preview = $(this).parent().parent().children('.photo-preview_<?php echo $i; ?>');
                                    // Prevents the default action from occuring.
                                    e.preventDefault();
                                    var meta_image = $(this).parent().children('.photo-url_<?php echo $i; ?>');
                                    // If the frame already exists, re-open it.
                                    if (meta_image_frame) {meta_image_frame.open(); return;}
                                    // Sets up the media library frame
                                    meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
                                        title: meta_image.title,
                                        button: {text: meta_image.button}
                                    });
                                    // Runs when an image is selected.
                                    meta_image_frame.on('select', function () {
                                        // Grabs the attachment selection and creates a JSON representation of the model.
                                        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
                                        // Sends the attachment URL to our custom image input field.
                                        meta_image.val(media_attachment.url);
                                        meta_image_preview.children('img').attr('src', media_attachment.url);
                                    });
                                    // Opens the media library frame.
                                    meta_image_frame.open();
                                });
                            });
                        </script>
                        <!-- URL du mécène -->
                        <div class="pinput">
                            <label for="metadata_674_<?php echo $i; ?>">URL du mécène <?php echo $i; ?></label>
                            <input type="url" name="metadata_674_<?php echo $i; ?>" id="metadata_674_<?php echo $i; ?>" value="<?php echo $metadata_674_[$i]; ?>"/>
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

function jcp_metabox_save_page_soutenez_entreprise($post_id) {
    
    if ('page-templates/page-soutenez_entreprise.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_670', $_POST)) { update_post_meta( $post_id, 'metadata_670', $_POST['metadata_670']);};
    if ('page-templates/page-soutenez_entreprise.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_671', $_POST)) { update_post_meta( $post_id, 'metadata_671', $_POST['metadata_671']);};
    if ('page-templates/page-soutenez_entreprise.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_672', $_POST)) { update_post_meta( $post_id, 'metadata_672', $_POST['metadata_672']);};
    for ($i = 1; $i <= 20; $i++) {
        if ('page-templates/page-soutenez_entreprise.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_673_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_673_'.$i.'', $_POST['metadata_673_'.$i.'']);};
    }
    for ($i = 1; $i <= 20; $i++) {
        if ('page-templates/page-soutenez_entreprise.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_674_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_674_'.$i.'', $_POST['metadata_674_'.$i.'']);};
    }
}

?>