<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_avousdejouer() {
    global $post;
    if ( 'page-templates/page-avousdejouer.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_avousdejouer',
            'Informations page à vous de jouer',
            'metabox_page_avousdejouer',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_avousdejouer($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_771 = get_post_meta( $post->ID, 'metadata_771', true );
    $metadata_772 = get_post_meta( $post->ID, 'metadata_772', true );
    for ($i = 1; $i <= 20; $i++) {
        $metadata_773_[$i] = get_post_meta( $post->ID, 'metadata_773_'.$i.'', true );
    }
    for ($i = 1; $i <= 20; $i++) {
        $metadata_774_[$i] = get_post_meta( $post->ID, 'metadata_774_'.$i.'', true );
    }
    for ($i = 1; $i <= 20; $i++) {
        $metadata_775_[$i] = get_post_meta( $post->ID, 'metadata_775_'.$i.'', true );
    }
    for ($i = 1; $i <= 20; $i++) {
        $metadata_776_[$i] = get_post_meta( $post->ID, 'metadata_776_'.$i.'', true );
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
            <!-- ACCROCHE DE LA PAGE A VOUS DE JOUER -->
            <h2>ACCROCHE BANNIÈRE</h2>
            <div class='metagroup_sub'>
                <div class='metagroup_sub_items grid_3fr_simple'>
                        <div class="pinput">
                            <label for="metadata_771">Accroche - Mots ligne1</label>
                            <input type="text" name="metadata_771" id="metadata_771" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_771; ?>"/>
                        </div>     
                </div>
                <div class='metagroup_sub_items grid_3fr_simple'>
                        <div class="pinput">
                            <label for="metadata_772">Accroche - Mots ligne2+</label>
                            <textarea name="metadata_772" id="metadata_772" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_772; ?></textarea>
                        </div>     
                </div>
            </div>
        </section>


    <!-- --------------------- -->
    <!-- DONNEES POUR LES 20 CAPSULES -->
    <?php for ($i = 1; $i <= 20; $i++) : ?>
        <section class='metagroup'>
            
            <h2>CAPSULE <?php echo $i ?></h2>

            <!-- --------------------- -->
            <!-- GROUPE IMAGE VIGNETTE -->

                <h3>IMAGE VIGNETTE <?php echo $i ?></h3>
                <div class=''>
                    <div class='metagroup_sub_items grid_4fr_simple'>
                        <!-- IMAGE VIGNETTE -->

                        <div class="pinput">
                            <label for="metadata_773_<?php echo $i; ?>">Illustration capsule</label>
                            <input type="text" name="metadata_773_<?php echo $i; ?>" id="metadata_773_<?php echo $i; ?>" class="photo-url_<?php echo $i; ?>" value="<?php echo $metadata_773_[$i]; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_773_'.$i.'', true); ?>" style="max-width: 150px;">
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



                    </div>
                </div>

            <!-- --------------------- -->
            <!-- GROUPE TITRE -->
                <h3>TITRE <?php echo $i ?></h3>
                <div class=''>
                    <div class='metagroup_sub_items grid_4fr_simple'>
                        <!-- TITRE DE L'ACTU LIGNE1 -->
                        <div class="pinput">
                            <label for="metadata_774_<?php echo $i ?>">Titre de la capsule</label>
                            <input type="text" name="metadata_774_<?php echo $i ?>" id="metadata_774_<?php echo $i ?>" placeholder='en MAJUSCULE' value="<?php echo $metadata_774_[$i]; ?>"/>
                        </div>
                    </div>
                </div>

            <!-- --------------------- -->
            <!-- GROUPE DESCRIPTION COURTE -->
            <h3>DESCRIPTION <?php echo $i ?> POUR LISTE DES CAPSULES</h3>
            <div class='metagroup_sub'>
                <div class='metagroup_sub_items grid_3fr_simple'>
                        <div class="pinput">
                            <label for="metadata_775_<?php echo $i ?>">Description courte</label>
                            <textarea name="metadata_775_<?php echo $i ?>" id="metadata_775_<?php echo $i ?>" cols="50" rows="4" placeholder="276 caractères MAX avec espaces"><?php echo $metadata_775_[$i]; ?></textarea>
                        </div>     
                </div>
            </div>

            <!-- --------------------- -->
            <!-- GROUPE LIEN NOMAD PLAY -->
            <h3>LIEN URL <?php echo $i ?> VERS LA PAGE NOMADPLAY</h3>
            <div class='metagroup_sub'>
                <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_776_<?php echo $i ?>">URL vers capsule Nomadplay</label>
                        <input type="url" name="metadata_776_<?php echo $i ?>" id="metadata_776" value="<?php echo $metadata_776_[$i] ?>"/>
                    </div>  
                </div>
            </div>

        </section>
    <?php endfor; ?>





    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_avousdejouer($post_id) {

    if ('page-templates/page-avousdejouer.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_771', $_POST)) { update_post_meta( $post_id, 'metadata_771', $_POST['metadata_771']);};
    if ('page-templates/page-avousdejouer.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_772', $_POST)) { update_post_meta( $post_id, 'metadata_772', $_POST['metadata_772']);};
    for ($i = 1; $i <= 20; $i++) {
        if ('page-templates/page-avousdejouer.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_773_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_773_'.$i.'', $_POST['metadata_773_'.$i.'']);};
    }
    for ($i = 1; $i <= 20; $i++) {
        if ('page-templates/page-avousdejouer.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_774_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_774_'.$i.'', $_POST['metadata_774_'.$i.'']);};
    }
    for ($i = 1; $i <= 20; $i++) {
        if ('page-templates/page-avousdejouer.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_775_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_775_'.$i.'', $_POST['metadata_775_'.$i.'']);};
    }
    for ($i = 1; $i <= 20; $i++) {
        if ('page-templates/page-avousdejouer.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_776_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_776_'.$i.'', $_POST['metadata_776_'.$i.'']);};
    }

}

?>