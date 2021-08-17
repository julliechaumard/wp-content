<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_medias_disques() {
    global $post;
    if ( 'page-templates/page-mediatheque_disques.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_medias_disques',
            'LES DISQUES',
            'metabox_page_medias_disques',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_medias_disques($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_780 = get_post_meta( $post->ID, 'metadata_780', true );
    $metadata_781 = get_post_meta( $post->ID, 'metadata_781', true );
    for ($i = 1; $i <= 15; $i++) {
        $metadata_782_[$i] = get_post_meta( $post->ID, 'metadata_782_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_783_[$i] = get_post_meta( $post->ID, 'metadata_783_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_784_[$i] = get_post_meta( $post->ID, 'metadata_784_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_785_[$i] = get_post_meta( $post->ID, 'metadata_785_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_786_[$i] = get_post_meta( $post->ID, 'metadata_786_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_787_[$i] = get_post_meta( $post->ID, 'metadata_787_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_788_[$i] = get_post_meta( $post->ID, 'metadata_788_'.$i.'', true );
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
                        <label for="metadata_780">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_780" id="metadata_780" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_780; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_781">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_781" id="metadata_781" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_781; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>


    <!-- --------------------- -->
    <!-- DISQUE 1 à 15-->
    <!-- --------------------- -->

    <!-- i = disque -->

        <section class='metagroup'>
            
            <h2>LES DISQUES</h2>
            
            <div class='metagroup_sub'>
                
                <?php for ($i = 1; $i <= 15; $i++) : ?>
                    <section class='metagroup'>
            
                        <h2>DISQUES <?php echo $i; ?></h2>

                        <div class='metagroup_sub_items grid_3fr_simple'>

                                <!-- TITRE DU DISQUE -->
                                <div class="pinput">
                                    <label for="metadata_782_<?php echo $i; ?>">TITRE (disque <?php echo $i; ?>)</label>
                                    <input type="text" name="metadata_782_<?php echo $i; ?>" id="metadata_782_<?php echo $i; ?>" placeholder='en MAJUSCULE' value="<?php echo $metadata_782_[$i]; ?>"/>
                                </div>

                                <!-- ARTISTES DU DISQUE -->
                                <div>
                                    <div class="pinput">
                                        <label for="metadata_783_<?php echo $i; ?>">ARTISTES (disque <?php echo $i; ?>)</label>
                                        <textarea name="metadata_783_<?php echo $i; ?>" id="metadata_783_<?php echo $i; ?>" cols="50" rows="4" placeholder="<br> pour saut de ligne"><?php echo $metadata_783_[$i]; ?></textarea>
                                    </div>     
                                </div>

                                <!-- PROGRAMMES DU DISQUE -->
                                <div>
                                    <div class="pinput">
                                        <label for="metadata_784_<?php echo $i; ?>">PROGRAMMES (disque <?php echo $i; ?>)</label>
                                        <textarea name="metadata_784_<?php echo $i; ?>" id="metadata_784_<?php echo $i; ?>" cols="50" rows="4" placeholder="<br> pour saut de ligne"><?php echo $metadata_784_[$i]; ?></textarea>
                                    </div>     
                                </div>

                        </div>
                
                        <div class='metagroup_sub_items grid_3fr_simple'>

                                <!-- EXTRAIT AUDIO -->


                                <div class="pinput">
                                    <label for="metadata_786_<?php echo $i; ?>">EXTRAIT AUDIO (disque <?php echo $i; ?>)</label>
                                    <input type="text" name="metadata_786_<?php echo $i; ?>" id="metadata_786_<?php echo $i; ?>" class="audio-url_<?php echo $i; ?>" value="<?php echo $metadata_786_[$i]; ?>"/>
                                    <input type="button" class="audio-uploader_<?php echo $i; ?>" value="Sélectionner un audio">
                                </div>

                                <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
                                <script>
                                    jQuery(document).ready(function ($) {
                                        // Instantiates the variable that holds the media library frame.
                                        var meta_image_frame;
                                        // Runs when the image button is clicked.
                                        $('.audio-uploader_<?php echo $i; ?>').click(function (e) {
                                            // Prevents the default action from occuring.
                                            e.preventDefault();
                                            var meta_image = $(this).parent().children('.audio-url_<?php echo $i; ?>');
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


                                <!-- INFORMATIONS DIVERSES -->
                                <div>
                                    <div class="pinput">
                                        <label for="metadata_785_<?php echo $i; ?>">INFORMATIONS DIVERSES (disque <?php echo $i; ?>)</label>
                                        <textarea name="metadata_785_<?php echo $i; ?>" id="metadata_785_<?php echo $i; ?>" cols="50" rows="4" placeholder="<br> pour saut de ligne"><?php echo $metadata_785_[$i]; ?></textarea>
                                    </div>     
                                </div>

                                <!-- POCHETTE -->
                                <div>
                                    <div class="pinput">
                                        <label for="metadata_787_<?php echo $i; ?>">IMAGE POCHETTE (disque <?php echo $i; ?>)</label>
                                        <input type="text" name="metadata_787_<?php echo $i; ?>" id="metadata_787_<?php echo $i; ?>" class="pochette-url_<?php echo $i; ?>" value="<?php echo $metadata_787_[$i]; ?>"/>
                                        <input type="button" class="pochette-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                                    </div>
                                    <div class="pochette-preview_<?php echo $i; ?>">
                                        <img src="<?php echo get_post_meta($post->ID, 'metadata_787_'.$i.'', true); ?>" style="max-width: 150px;">
                                    </div>

                                    <!-- SCRIPT POUR SÉLECTIONNER MÉDIA DANS LA BIBLIOTHÈQUE -->
                                    <script>
                                        jQuery(document).ready(function ($) {
                                            // Instantiates the variable that holds the media library frame.
                                            var meta_image_frame;
                                            // Runs when the image button is clicked.
                                            $('.pochette-uploader_<?php echo $i; ?>').click(function (e) {
                                                // Get preview pane
                                                var meta_image_preview = $(this).parent().parent().children('.pochette-preview_<?php echo $i; ?>');
                                                // Prevents the default action from occuring.
                                                e.preventDefault();
                                                var meta_image = $(this).parent().children('.pochette-url_<?php echo $i; ?>');
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

                                <!-- LIEN VERS ACHAT DISQUE -->
                                <div class="pinput">
                                    <label for="metadata_788_<?php echo $i; ?>">LIEN POUR ACHAT (disque <?php echo $i; ?>)</label>
                                    <input type="text" name="metadata_788_<?php echo $i; ?>" id="metadata_788_<?php echo $i; ?>" placeholder='URL' value="<?php echo $metadata_788_[$i]; ?>"/>
                                </div>




                        </div>

                    </section>

                <?php endfor; ?>
                
            </div>


        </section>


    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_medias_disques($post_id) {
    
    if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_780', $_POST)) { update_post_meta( $post_id, 'metadata_780', $_POST['metadata_780']);};
    if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_781', $_POST)) { update_post_meta( $post_id, 'metadata_781', $_POST['metadata_781']);};

    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_782_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_782_'.$i.'', $_POST['metadata_782_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_783_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_783_'.$i.'', $_POST['metadata_783_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_784_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_784_'.$i.'', $_POST['metadata_784_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_785_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_785_'.$i.'', $_POST['metadata_785_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_786_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_786_'.$i.'', $_POST['metadata_786_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_787_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_787_'.$i.'', $_POST['metadata_787_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_788_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_788_'.$i.'', $_POST['metadata_788_'.$i.'']);};
    }


}

?>