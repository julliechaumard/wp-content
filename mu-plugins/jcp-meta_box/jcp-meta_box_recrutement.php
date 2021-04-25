<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_recrutement() {
 
	add_meta_box(
		'metabox_recrutement',
		'Informations recrutement',
		'metabox_recrutement',
		'recrutement',
		'normal',
		'default'
	);
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_recrutement($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_662 = get_post_meta( $post->ID, 'metadata_662', true );
    $metadata_663 = get_post_meta( $post->ID, 'metadata_663', true );
    $metadata_664 = get_post_meta( $post->ID, 'metadata_664', true );
    $metadata_665 = get_post_meta( $post->ID, 'metadata_665', true );
    $metadata_666 = get_post_meta( $post->ID, 'metadata_666', true );

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
                    <label for="metadata_666">Image vignette</label>
                    <input type="text" name="metadata_666" id="metadata_666" class="vignette-url" value="<?php echo $metadata_666; ?>"/>
                    <input type="button" class="vignette-uploader" value="Sélectionner une image">
                </div>
                <div class="vignette-preview">
                    <img src="<?php echo get_post_meta($post->ID, 'metadata_666', true); ?>" style="max-width: 150px;">
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
    <!-- GROUPE INFORMATIONS RECRUTEMENT -->
    <section class='metagroup'>

        <!-- TITRE DE L'ANNONCE -->
        <h2>TITRE DE L'ANNONCE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_664">TITRE du poste - ligne1</label>
                        <input type="text" name="metadata_664" id="metadata_664" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_664; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_665">TITRE du poste - ligne2+</label>
                        <textarea name="metadata_665" id="metadata_665" cols="50" rows="4" placeholder="en MAJUSCULE"><?php echo $metadata_665; ?></textarea>
                    </div>     
            </div>
        </div>

        <h2>Annonce en PDF</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                <!-- URL DU PDF -->
                <div class="pinput">
                    <label for="metadata_662">Fichier PDF</label>
                    <input type="text" name="metadata_662" id="metadata_662" class="pdf-url" value="<?php echo $metadata_662; ?>"/>
                    <input type="button" class="pdf-uploader" value="Sélectionner un fichier">
                </div>

                <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
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
        </div>

        <h2>A CONTACTER</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                <!-- A CONTACTER -->
                <div class="pinput">
                    <label for="metadata_663">Contacts pour postuler</label>
                    <textarea name="metadata_663" id="metadata_663" cols="50" rows="4" placeholder=""><?php echo $metadata_663; ?></textarea>
                </div> 
            </div>
        </div>

    </section>
    
    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_recrutement($post_id) {

    // metadata
    if (get_post_type($post_id) == 'recrutement' && array_key_exists('metadata_662', $_POST)) { update_post_meta( $post_id, 'metadata_662', $_POST['metadata_662']);};
    if (get_post_type($post_id) == 'recrutement' && array_key_exists('metadata_663', $_POST)) { update_post_meta( $post_id, 'metadata_663', $_POST['metadata_663']);};
    if (get_post_type($post_id) == 'recrutement' && array_key_exists('metadata_664', $_POST)) { update_post_meta( $post_id, 'metadata_664', $_POST['metadata_664']);};
    if (get_post_type($post_id) == 'recrutement' && array_key_exists('metadata_665', $_POST)) { update_post_meta( $post_id, 'metadata_665', $_POST['metadata_665']);};
    if (get_post_type($post_id) == 'recrutement' && array_key_exists('metadata_666', $_POST)) { update_post_meta( $post_id, 'metadata_666', $_POST['metadata_666']);};

}

?>