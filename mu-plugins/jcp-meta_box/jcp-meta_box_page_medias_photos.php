<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_medias_photos() {
    global $post;
    if ( 'page-templates/page-mediatheque_photos.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_medias_photos',
            'LES PHOTOS',
            'metabox_page_medias_photos',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_medias_photos($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_701 = get_post_meta( $post->ID, 'metadata_701', true );
    $metadata_702 = get_post_meta( $post->ID, 'metadata_702', true );
    for ($i = 1; $i <= 5; $i++) {
        $metadata_703_[$i] = get_post_meta( $post->ID, 'metadata_703_'.$i.'', true );
    }
    for ($i = 1; $i <= 5; $i++) {
        $metadata_704_[$i] = get_post_meta( $post->ID, 'metadata_704_'.$i.'', true );
    }
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 15; $j++) {  
            ${"metadata_705_[$i]_$j"} = get_post_meta( $post->ID, 'metadata_705_'.$i.'_'.$j.'', true );  
        }
    }

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    
    <!-- --------------------- -->
    <!-- ACCROCHE -->
    <!-- --------------------- -->
    <section class='metagroup'>
        <!-- ACCROCHE DE LA PAGE -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_701">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_701" id="metadata_701" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_701; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_702">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_702" id="metadata_702" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_702; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>


    <!-- --------------------- -->
    <!-- THEME 1 à 5-->
    <!-- --------------------- -->

    <!-- i = thème -->
    <!-- j = photo -->
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <section class='metagroup'>
            
            <h2>THÈME <?php echo $i; ?></h2>
            <!-- TITRE -->
            <div class='metagroup_sub'>
                
                <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_703_<?php echo $i; ?>">TITRE GRAS</label>
                        <input type="text" name="metadata_703_<?php echo $i; ?>" id="metadata_703_<?php echo $i; ?>" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_703_[$i]; ?>"/>
                    </div>
                    <div class=''>
                        <div class="pinput">
                            <label for="metadata_704_<?php echo $i; ?>">TITRE LEGER</label>
                            <input type="text" name="metadata_704_<?php echo $i; ?>" id="metadata_704_<?php echo $i; ?>" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_704_[$i]; ?>"/>
                        </div>     
                    </div>
                </div>
                
            </div>

            <!-- 10 PHOTOS -->
            <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($j = 1; $j <= 15; $j++) { ?>
                        <div class="pinput">
                            <label for="metadata_705_<?php echo $i; ?>_<?php echo $j; ?>">Photo <?php echo $j; ?></label>
                            <input type="text" name="metadata_705_<?php echo $i; ?>_<?php echo $j; ?>" id="metadata_705_<?php echo $i; ?>_<?php echo $j; ?>" class="photo-url_<?php echo $i; ?>_<?php echo $j; ?>" value="<?php echo ${"metadata_705_[$i]_$j"}; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>_<?php echo $j; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>_<?php echo $j; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_705_'.$i.'_'.$j.'', true); ?>" style="max-width: 150px;">
                        </div>

                        <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
                        <script>
                            jQuery(document).ready(function ($) {
                                // Instantiates the variable that holds the media library frame.
                                var meta_image_frame;
                                // Runs when the image button is clicked.
                                $('.photo-uploader_<?php echo $i; ?>_<?php echo $j; ?>').click(function (e) {
                                    // Get preview pane
                                    var meta_image_preview = $(this).parent().parent().children('.photo-preview_<?php echo $i; ?>_<?php echo $j; ?>');
                                    // Prevents the default action from occuring.
                                    e.preventDefault();
                                    var meta_image = $(this).parent().children('.photo-url_<?php echo $i; ?>_<?php echo $j; ?>');
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


        </section>
    <?php endfor; ?>






    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_medias_photos($post_id) {
    
    if ('page-templates/page-mediatheque_photos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_701', $_POST)) { update_post_meta( $post_id, 'metadata_701', $_POST['metadata_701']);};
    if ('page-templates/page-mediatheque_photos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_702', $_POST)) { update_post_meta( $post_id, 'metadata_702', $_POST['metadata_702']);};

    for ($i = 1; $i <= 5; $i++) {
        if ('page-templates/page-mediatheque_photos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_703_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_703_'.$i.'', $_POST['metadata_703_'.$i.'']);};
    }
    for ($i = 1; $i <= 5; $i++) {
        if ('page-templates/page-mediatheque_photos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_704_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_704_'.$i.'', $_POST['metadata_704_'.$i.'']);};
    }
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <=15; $j++) {
            if ('page-templates/page-mediatheque_photos.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_705_'.$i.'_'.$j.'', $_POST)) { update_post_meta( $post_id, 'metadata_705_'.$i.'_'.$j.'', $_POST['metadata_705_'.$i.'_'.$j.'']);};
        }
    }

}

?>