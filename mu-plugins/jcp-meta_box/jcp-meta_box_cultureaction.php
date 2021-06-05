<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_cultureaction() {
 
	add_meta_box(
		'metabox_cultureaction',
		'Informations action culturelle',
		'metabox_cultureaction',
		'cultureaction',
		'normal',
		'default'
	); 
}


/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/

function metabox_cultureaction($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_420 = get_post_meta( $post->ID, 'metadata_420', true );
    $metadata_421 = get_post_meta( $post->ID, 'metadata_421', true );
    $metadata_424 = get_post_meta( $post->ID, 'metadata_424', true );
    $metadata_425 = get_post_meta( $post->ID, 'metadata_425', true );
    for ($i = 1; $i <= 3; $i++) {
        $metadata_422_[$i] = get_post_meta( $post->ID, 'metadata_422_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_423_[$i] = get_post_meta( $post->ID, 'metadata_423_'.$i.'', true );
    }

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>

    <!-- --------------------- -->
    <!-- GROUPE TITRES -->
    <section class='metagroup'>
        <h2>LES TITRES</h2>
        <div class=''>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <!-- TITRE DU DOSSIER LIGNE1 -->
                <div class="pinput">
                    <label for="metadata_424">Titre du dossier ligne1</label>
                    <input type="text" name="metadata_424" id="metadata_424" placeholder='en MAJUSCULE' value="<?php echo $metadata_424; ?>"/>
                </div>
                <!-- TITRE DU DOSSIER EN LEGER -->
                <div class="pinput">
                    <label for="metadata_425">Titre du dossier ligne2+</label>
                    <input type="text" name="metadata_425" id="metadata_425" placeholder='en MAJUSCULE' value="<?php echo $metadata_425; ?>"/>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE ICONE ILLUSTRATION DOSSIER PEDAGOGIQUE -->
    <section class='metagroup'>
        <h2>DOSSIER PEDAGOGIQUE</h2>
        <div class=''>
            <h3>ICONE ILLUSTRATION DOSSIER</h3>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <!-- ICONE ILLUSTRATION DOSSIER PEDAGOGIQUE -->
                <div class="pinput">
                    <label for="metadata_420">Icone</label>
                    <input type="text" name="metadata_420" id="metadata_420" class="icone-url" value="<?php echo $metadata_420; ?>"/>
                    <input type="button" class="icone-uploader" value="Sélectionner une image">
                </div>
                <div class="icone-preview">
                    <img src="<?php echo get_post_meta($post->ID, 'metadata_420', true); ?>" style="max-width: 150px;">
                </div>

                <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
                <script>
                    jQuery(document).ready(function ($) {
                        // Instantiates the variable that holds the media library frame.
                        var meta_image_frame;
                        // Runs when the image button is clicked.
                        $('.icone-uploader').click(function (e) {
                            // Get preview pane
                            var meta_image_preview = $(this).parent().parent().children('.icone-preview');
                            // Prevents the default action from occuring.
                            e.preventDefault();
                            var meta_image = $(this).parent().children('.icone-url');
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

            </div>

        <!-- PDF A TÉLÉCHARGER -->

            <h3>DOSSIER PDF</h3>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <div class="pinput">
                    <label for="metadata_421">PDF du dossier</label>
                    <input type="text" name="metadata_421" id="metadata_421" class="pdf-url" value="<?php echo $metadata_421; ?>"/>
                    <input type="button" class="pdf-uploader" value="Sélectionner un PDF">
                </div>
            </div>

            <!-- SCRIPT POUR TÉLÉCHARGER UN FICHIER PDF -->
            <script>
                jQuery(document).ready(function ($) {
                    // Instantiates the variable that holds the media library frame.
                    var meta_image_frame;
                    // Runs when the image button is clicked.
                    $('.pdf-uploader').click(function (e) {
                        // Prevents the default action from occuring.
                        e.preventDefault();
                        var meta_image = $(this).parent().children('.pdf-url');
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
                        });
                        // Opens the media library frame.
                        meta_image_frame.open();
                    });
                });
            </script>

        </div>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE PHOTOS ET VIDEOS -->
    <section class='metagroup'>

        <h2>PHOTOS & VIDÉOS</h2>

            <div class=''>
                <h3>VIDÉOS</h3>
                <div class='metagroup_sub_items grid_3fr_simple'>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <!-- CODE YOUTUBE -->
                    <div class="pinput">
                        <label for="metadata_422_<?php echo $i; ?>">Code vidéo YouTube <?php echo $i; ?></label>
                        <input type="text" name="metadata_422_<?php echo $i; ?>" id="metadata_422_<?php echo $i; ?>" value="<?php echo $metadata_422_[$i]; ?>"/>
                    </div>
                <?php } ?>
                </div>
            </div>

            <div class=''>

                <h3>PHOTOS</h3>
                <p>Grouper les photos portraits ensemble et les paysables ensemble</p>

                <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <!-- PHOTO -->
                        <div class="pinput">
                            <label for="metadata_423_<?php echo $i; ?>">Photo <?php echo $i; ?></label>
                            <input type="text" name="metadata_423_<?php echo $i; ?>" id="metadata_423_<?php echo $i; ?>" class="photo-url_<?php echo $i; ?>" value="<?php echo $metadata_423_[$i]; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_423_'.$i.'', true); ?>" style="max-width: 150px;">
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

                    <?php } ?>
                </div>
            </div>
        
    </section>


    <?php
}


/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_cultureaction($post_id) {

    // metadata
    if (get_post_type($post_id) == 'cultureaction' && array_key_exists('metadata_420', $_POST)) { update_post_meta( $post_id, 'metadata_420', $_POST['metadata_420']);};
    if (get_post_type($post_id) == 'cultureaction' && array_key_exists('metadata_421', $_POST)) { update_post_meta( $post_id, 'metadata_421', $_POST['metadata_421']);};
    if (get_post_type($post_id) == 'cultureaction' && array_key_exists('metadata_424', $_POST)) { update_post_meta( $post_id, 'metadata_424', $_POST['metadata_424']);};
    if (get_post_type($post_id) == 'cultureaction' && array_key_exists('metadata_425', $_POST)) { update_post_meta( $post_id, 'metadata_425', $_POST['metadata_425']);};

    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'cultureaction' && array_key_exists('metadata_422_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_422_'.$i.'', $_POST['metadata_422_'.$i.'']);};
    }
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'cultureaction' && array_key_exists('metadata_423_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_423_'.$i.'', $_POST['metadata_423_'.$i.'']);};
    }
}

?>