<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_academie() {
    global $post;
    if ( 'page-templates/page-academie.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_academie',
            'Informations page Accompagnement Jeunes Talents',
            'metabox_page_academie',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_academie($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_401 = get_post_meta( $post->ID, 'metadata_401', true );
    $metadata_402 = get_post_meta( $post->ID, 'metadata_402', true );
   
    for ($i = 1; $i <= 3; $i++) {
        $metadata_403_[$i] = get_post_meta( $post->ID, 'metadata_403_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_404_[$i] = get_post_meta( $post->ID, 'metadata_404_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_405_[$i] = get_post_meta( $post->ID, 'metadata_405_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_406_[$i] = get_post_meta( $post->ID, 'metadata_406_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_407_[$i] = get_post_meta( $post->ID, 'metadata_407_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_408_[$i] = get_post_meta( $post->ID, 'metadata_408_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_409_[$i] = get_post_meta( $post->ID, 'metadata_409_'.$i.'', true );
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
                            <label for="metadata_401">Accroche - Mots ligne1</label>
                            <input type="text" name="metadata_401" id="metadata_401" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_401; ?>"/>
                        </div>     
                </div>
                <div class='metagroup_sub_items grid_3fr_simple'>
                        <div class="pinput">
                            <label for="metadata_402">Accroche - Mots ligne2+</label>
                            <textarea name="metadata_402" id="metadata_402" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_402; ?></textarea>
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
                        <label for="metadata_403_<?php echo $i; ?>">Code vidéo YouTube <?php echo $i; ?></label>
                        <input type="text" name="metadata_403_<?php echo $i; ?>" id="metadata_403_<?php echo $i; ?>" value="<?php echo $metadata_403_[$i]; ?>"/>
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
                            <label for="metadata_404_<?php echo $i; ?>">Photo <?php echo $i; ?></label>
                            <input type="text" name="metadata_404_<?php echo $i; ?>" id="metadata_404_<?php echo $i; ?>" class="photo-url_<?php echo $i; ?>" value="<?php echo $metadata_404_[$i]; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_404_'.$i.'', true); ?>" style="max-width: 150px;">
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
                        <label for="metadata_405_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_405_<?php echo $i; ?>" id="metadata_405_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_405_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_407_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_407_<?php echo $i; ?>" id="metadata_407_<?php echo $i; ?>" value="<?php echo $metadata_407_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_406_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_406_<?php echo $i; ?>" id="metadata_406_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_406_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
            
            </div>
        
    </section>

    <!-- --------------------- -->
    <!-- GROUPE TEMOIGNAGE -->
    <section class='metagroup'>
        <h2>TÉMOIGNAGE</h2>
            
                <div class='metagroup_sub_items grid_2fr'>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <!-- NOM du TEMOIN -->
                    <div class="pinput">
                        <label for="metadata_408_<?php echo $i; ?>">Nom du témoin <?php echo $i; ?></label>
                        <input type="text" name="metadata_408_<?php echo $i; ?>" id="metadata_408_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_408_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE Du TEMOIGNAGE-->
                    <div class="pinput">
                        <label for="metadata_409_<?php echo $i; ?>">Texte du témoignage <?php echo $i; ?></label>
                        <textarea name="metadata_409_<?php echo $i; ?>" id="metadata_409_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_409_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
        
    </section>

    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_academie($post_id) {

    if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_401', $_POST)) { update_post_meta( $post_id, 'metadata_401', $_POST['metadata_401']);};
    if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_402', $_POST)) { update_post_meta( $post_id, 'metadata_402', $_POST['metadata_402']);};
    
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_403_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_403_'.$i.'', $_POST['metadata_403_'.$i.'']);};
    }
    for ($i = 1; $i <= 10; $i++) {
        if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_404_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_404_'.$i.'', $_POST['metadata_404_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_405_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_405_'.$i.'', $_POST['metadata_405_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_406_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_406_'.$i.'', $_POST['metadata_406_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_407_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_407_'.$i.'', $_POST['metadata_407_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_408_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_408_'.$i.'', $_POST['metadata_408_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-academie.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_409_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_409_'.$i.'', $_POST['metadata_409_'.$i.'']);};
    }

}

?>