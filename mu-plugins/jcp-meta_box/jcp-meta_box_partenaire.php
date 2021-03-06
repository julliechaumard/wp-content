<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_partenaire() {
 
	add_meta_box(
		'metabox_partenaire',
		'Informations partenaire',
		'metabox_partenaire',
		'partenaire',
		'normal',
		'default'
	);
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_partenaire($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_250 = get_post_meta( $post->ID, 'metadata_250', true );
    $metadata_251 = get_post_meta( $post->ID, 'metadata_251', true );
    $metadata_252 = get_post_meta( $post->ID, 'metadata_252', true );
    $metadata_253 = get_post_meta( $post->ID, 'metadata_253', true );
    $metadata_254 = get_post_meta( $post->ID, 'metadata_254', true );
    $metadata_255 = get_post_meta( $post->ID, 'metadata_255', true );
    $metadata_256 = get_post_meta( $post->ID, 'metadata_256', true );
    $metadata_257 = get_post_meta( $post->ID, 'metadata_257', true );

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
                    <label for="metadata_255">Image vignette</label>
                    <input type="text" name="metadata_255" id="metadata_255" class="vignette-url" value="<?php echo $metadata_255; ?>"/>
                    <input type="button" class="vignette-uploader" value="Sélectionner une image">
                </div>
                <div class="vignette-preview">
                    <img src="<?php echo get_post_meta($post->ID, 'metadata_255', true); ?>" style="max-width: 150px;">
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
    <!-- GROUPE INFORMATIONS DU PARTENAIRE -->
    <section class='metagroup'>

        <!-- NOM DU PARTENAIRE -->
        <h2>NOM</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_250">Nom de partenaire</label>
                        <input type="text" name="metadata_250" id="metadata_250" placeholder='en MAJUSCULE' value="<?php echo $metadata_250; ?>"/>
                    </div>     
            </div>
        </div>

        <!-- ACCROCHE DU PARTENAIRE -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_256">Accroche - ligne1</label>
                        <input type="text" name="metadata_256" id="metadata_256" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_256; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_257">Accroche - ligne2+</label>
                        <textarea name="metadata_257" id="metadata_257" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_257; ?></textarea>
                    </div>     
            </div>
        </div>

        <h2>DESCRIPTION</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <!-- DESCRIPTION COURTE DU PARTENAIRE -->
                    <div class="pinput">
                        <label for="metadata_254">Description courte</label>
                        <textarea name="metadata_254" id="metadata_254" cols="50" rows="4" placeholder="276 caractères MAX avec espaces"><?php echo $metadata_254; ?></textarea>
                    </div>     
            </div>
        </div>

        <h2>Site Internet</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <!-- URL DU PARTENAIRE -->
                    <div class="pinput">
                        <label for="metadata_251">URL Site Internet</label>
                        <input type="url" name="metadata_251" id="metadata_251" value="<?php echo $metadata_251; ?>"/>
                    </div>    
            </div>
        </div>

        <h2>LOGO</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>

                <!-- MENTION DU PARTENAIRE POUR LOGO DE LA PAGE CONCERT -->
                <div class="pinput">
                    <label for="metadata_253">Mention</label>
                    <textarea name="metadata_253" id="metadata_253" cols="40" rows="4" placeholder=""><?php echo $metadata_253; ?></textarea>
                </div>
            
                <!-- LOGO -->
                <div class="pinput">
                    <label for="metadata_252">Logo</label>
                    <input type="text" name="metadata_252" id="metadata_252" class="logo-url" value="<?php echo $metadata_252; ?>"/>
                    <input type="button" class="logo-uploader" value="Sélectionner une image">
                </div>
                <div class="logo-preview">
                    <img src="<?php echo get_post_meta($post->ID, 'metadata_252', true); ?>" style="max-width: 150px;">
                </div>

                <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
                <script>
                    jQuery(document).ready(function ($) {
                        // Instantiates the variable that holds the media library frame.
                        var meta_image_frame;
                        // Runs when the image button is clicked.
                        $('.logo-uploader').click(function (e) {
                            // Get preview pane
                            var meta_image_preview = $(this).parent().parent().children('.logo-preview');
                            // Prevents the default action from occuring.
                            e.preventDefault();
                            var meta_image = $(this).parent().children('.logo-url');
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
    
    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_partenaire($post_id) {

    // metadata
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_250', $_POST)) { update_post_meta( $post_id, 'metadata_250', $_POST['metadata_250']);};
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_251', $_POST)) { update_post_meta( $post_id, 'metadata_251', $_POST['metadata_251']);};
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_252', $_POST)) { update_post_meta( $post_id, 'metadata_252', $_POST['metadata_252']);};
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_253', $_POST)) { update_post_meta( $post_id, 'metadata_253', $_POST['metadata_253']);};
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_254', $_POST)) { update_post_meta( $post_id, 'metadata_254', $_POST['metadata_254']);};
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_255', $_POST)) { update_post_meta( $post_id, 'metadata_255', $_POST['metadata_255']);};
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_256', $_POST)) { update_post_meta( $post_id, 'metadata_256', $_POST['metadata_256']);};
    if (get_post_type($post_id) == 'partenaire' && array_key_exists('metadata_257', $_POST)) { update_post_meta( $post_id, 'metadata_257', $_POST['metadata_257']);};
}

?>