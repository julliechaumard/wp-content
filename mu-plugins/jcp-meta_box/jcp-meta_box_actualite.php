<?php

/************************************************************************
* Déclarer les box Metadata
* FICHE ACTU
*************************************************************************/

function jcp_declare_metabox_actualite() {
 
	add_meta_box(
		'metabox_actualite',
		'Informations actualite',
		'metabox_actualite',
		'actualite',
		'normal',
		'default'
	);
 
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_actualite($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_901 = get_post_meta( $post->ID, 'metadata_901', true );
    $metadata_902 = get_post_meta( $post->ID, 'metadata_902', true );
    $metadata_903 = get_post_meta( $post->ID, 'metadata_903', true );
    $metadata_904 = get_post_meta( $post->ID, 'metadata_904', true );
    $metadata_907 = get_post_meta( $post->ID, 'metadata_907', true );
    for ($i = 1; $i <= 3; $i++) {
        $metadata_905_[$i] = get_post_meta( $post->ID, 'metadata_905_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_906_[$i] = get_post_meta( $post->ID, 'metadata_906_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_910_[$i] = get_post_meta( $post->ID, 'metadata_910_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_911_[$i] = get_post_meta( $post->ID, 'metadata_911_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_912_[$i] = get_post_meta( $post->ID, 'metadata_912_'.$i.'', true );
    }


    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    
    <!-- --------------------- -->
    <!-- GROUPE IMAGE VIGNETTE -->
    <section class='metagroup'>
        <h2>IMAGE VIGNETTE</h2>
        <div class=''>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <!-- IMAGE VIGNETTE -->
                <div class="pinput">
                    <label for="metadata_907">Image vignette</label>
                    <input type="text" name="metadata_907" id="metadata_907" class="vignette-url" value="<?php echo $metadata_907; ?>"/>
                    <input type="button" class="vignette-uploader" value="Sélectionner une image">
                </div>
                <div class="vignette-preview">
                    <img src="<?php echo get_post_meta($post->ID, 'metadata_907', true); ?>" style="max-width: 150px;">
                </div>

                <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
                <script>
                    jQuery(document).ready(function ($) {
                        // Instantiates the variable that holds the media library frame.
                        var meta_image_frame;
                        // Runs when the image button is clicked.
                        $('.vignette-uploader').click(function (e) {
                            // Get preview pane
                            var meta_image_preview = $(this).parent().parent().children('.vignette-preview');
                            // Prevents the default action from occuring.
                            e.preventDefault();
                            var meta_image = $(this).parent().children('.vignette-url');
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
        </div>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE TITRES -->
    <section class='metagroup'>
        <h2>LES TITRES</h2>
        <div class=''>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <!-- TITRE DE L'ACTU LIGNE1 -->
                <div class="pinput">
                    <label for="metadata_901">Titre de l'actu en ligne1</label>
                    <input type="text" name="metadata_901" id="metadata_901" placeholder='en MAJUSCULE' value="<?php echo $metadata_901; ?>"/>
                </div>
                <!-- TITRE DE L'ACTU EN LEGER -->
                <div class="pinput">
                    <label for="metadata_902">Titre du concert ligne2+</label>
                    <input type="text" name="metadata_902" id="metadata_902" placeholder='en MAJUSCULE' value="<?php echo $metadata_902; ?>"/>
                </div>
            </div>
        </div>
    </section>
    

    <!-- --------------------- -->
    <!-- GROUPE DATE -->
    <section class='metagroup'>
        <h2>DATE</h2>
        <div class=''>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <!-- DATE DE L'ACTU -->
                <div class="pinput">
                    <label for="metadata_903">Date de l'actu</label>
                    <input type="date" name="metadata_903" id="metadata_903" placeholder='en MAJUSCULE' value="<?php echo $metadata_903; ?>"/>
                </div>
            </div>
        </div>
    </section>
    
    <!-- --------------------- -->
    <!-- GROUPE DESCRIPTION COURTE -->
    <section class='metagroup'>
        
        <h2>DESCRIPTION POUR LISTE DES ACTUS</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_904">Description courte</label>
                        <textarea name="metadata_904" id="metadata_904" cols="50" rows="4" placeholder="276 caractères MAX avec espaces"><?php echo $metadata_904; ?></textarea>
                    </div>     
            </div>
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
                        <label for="metadata_905_<?php echo $i; ?>">Code vidéo YouTube <?php echo $i; ?></label>
                        <input type="text" name="metadata_905_<?php echo $i; ?>" id="metadata_905_<?php echo $i; ?>" value="<?php echo $metadata_905_[$i]; ?>"/>
                    </div>

                <?php } ?>
                </div>
            </div>

            <div class=''>

                <h3>PHOTOS</h3>

                <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <!-- PHOTO -->
                        <div class="pinput">
                            <label for="metadata_906_<?php echo $i; ?>">Photo <?php echo $i; ?></label>
                            <input type="text" name="metadata_906_<?php echo $i; ?>" id="metadata_906_<?php echo $i; ?>" class="photo-url_<?php echo $i; ?>" value="<?php echo $metadata_906_[$i]; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_906_'.$i.'', true); ?>" style="max-width: 150px;">
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

    <!-- --------------------- -->
    <!-- GROUPE REVUE DE PRESSE -->
    <section class='metagroup'>
        <h2>LA REVUE DE PRESSE</h2>

            <div class=''>
            
                <div class='metagroup_sub_items grid_revue_presse'>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <!-- NOM du JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_910_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_910_<?php echo $i; ?>" id="metadata_910_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_910_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_912_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_912_<?php echo $i; ?>" id="metadata_912_<?php echo $i; ?>" value="<?php echo $metadata_912_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_911_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_911_<?php echo $i; ?>" id="metadata_911_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_911_[$i]; ?></textarea>
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

function jcp_metabox_save_actualite($post_id) {

    // metadata
    if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_901', $_POST)) { update_post_meta( $post_id, 'metadata_901', $_POST['metadata_901']);};
    if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_902', $_POST)) { update_post_meta( $post_id, 'metadata_902', $_POST['metadata_902']);};
    if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_903', $_POST)) { update_post_meta( $post_id, 'metadata_903', $_POST['metadata_903']);};
    if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_904', $_POST)) { update_post_meta( $post_id, 'metadata_904', $_POST['metadata_904']);};
    if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_907', $_POST)) { update_post_meta( $post_id, 'metadata_907', $_POST['metadata_907']);};
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_905_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_905_'.$i.'', $_POST['metadata_905_'.$i.'']);};
    }
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_906_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_906_'.$i.'', $_POST['metadata_906_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_910_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_910_'.$i.'', $_POST['metadata_910_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_911_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_911_'.$i.'', $_POST['metadata_911_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'actualite' && array_key_exists('metadata_912_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_912_'.$i.'', $_POST['metadata_912_'.$i.'']);};
    }


}

?>