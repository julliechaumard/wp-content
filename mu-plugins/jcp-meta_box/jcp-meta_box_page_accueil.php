<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_accueil() {
    global $post;
    if ( 'page-templates/page-accueil.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_accueil',
            'Informations page accueil',
            'metabox_page_accueil',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_accueil($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_001 = get_post_meta( $post->ID, 'metadata_001', true );
    $metadata_002 = get_post_meta( $post->ID, 'metadata_002', true );
    $metadata_003 = get_post_meta( $post->ID, 'metadata_003', true );
    $metadata_004 = get_post_meta( $post->ID, 'metadata_004', true );
    $metadata_008 = get_post_meta( $post->ID, 'metadata_008', true );
    $metadata_012 = get_post_meta( $post->ID, 'metadata_012', true );
    $metadata_015 = get_post_meta( $post->ID, 'metadata_015', true );
    $metadata_016 = get_post_meta( $post->ID, 'metadata_016', true );
    for ($i = 1; $i <= 6; $i++) {
        $metadata_005_[$i] = get_post_meta( $post->ID, 'metadata_005_'.$i.'', true );
    }
    for ($i = 1; $i <= 6; $i++) {
        $metadata_006_[$i] = get_post_meta( $post->ID, 'metadata_006_'.$i.'', true );
    }
    for ($i = 1; $i <= 6; $i++) {
        $metadata_007_[$i] = get_post_meta( $post->ID, 'metadata_007_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_009_[$i] = get_post_meta( $post->ID, 'metadata_009_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_010_[$i] = get_post_meta( $post->ID, 'metadata_010_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_011_[$i] = get_post_meta( $post->ID, 'metadata_011_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_013_[$i] = get_post_meta( $post->ID, 'metadata_013_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_014_[$i] = get_post_meta( $post->ID, 'metadata_014_'.$i.'', true );
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
                        <label for="metadata_001">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_001" id="metadata_001" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_001; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_002">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_002" id="metadata_002" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout en MAJUSCULE"><?php echo $metadata_002; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <!-- --------------------- -->
    <!-- GROUPE METTRE A L'HONNEUR -->
    <section class='metagroup'>
        <h2>METTRE A L'HONNEUR BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_003">Mettre à l’honneur  - Mots ligne1</label>
                        <input type="text" name="metadata_003" id="metadata_003" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_003; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_004">Mettre à l’honneur  - Mots ligne2+</label>
                        <textarea name="metadata_004" id="metadata_004" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout en MAJUSCULE"><?php echo $metadata_004; ?></textarea>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_015">Mettre à l’honneur  - URL</label>
                        <input type="url" name="metadata_015" id="metadata_015" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_015; ?>"/>
                    </div>     
            </div>
        </div>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE PHOTOS-->
    <section class='metagroup'>

        <h2>PHOTOS CAROUSSEL BANNIÈRE</h2>

            <div class=''>

                <h3>PHOTOS</h3>

                <div class='metagroup_sub_items grid_4fr'>
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                        <!-- PHOTO -->
                        <div class="pinput">
                            <label for="metadata_005_<?php echo $i; ?>">Photo <?php echo $i; ?></label>
                            <input type="text" name="metadata_005_<?php echo $i; ?>" id="metadata_005_<?php echo $i; ?>" class="photo-url_<?php echo $i; ?>" value="<?php echo $metadata_005_[$i]; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_005_'.$i.'', true); ?>" style="max-width: 150px;">
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
                        <!-- TEXTE SUR PHOTO -->
                        <div class="pinput">
                            <label for="metadata_006_<?php echo $i; ?>">Texte sur la photo <?php echo $i; ?></label>
                            <textarea name="metadata_006_<?php echo $i; ?>" id="metadata_006_<?php echo $i; ?>" cols="50" rows="4" placeholder=""><?php echo $metadata_006_[$i]; ?></textarea>
                        </div>
                        <!-- URL sur photoL -->
                        <div class="pinput">
                            <label for="metadata_007_<?php echo $i; ?>">URL vers article <?php echo $i; ?></label>
                            <input type="url" name="metadata_007_<?php echo $i; ?>" id="metadata_007_<?php echo $i; ?>" value="<?php echo $metadata_007_[$i]; ?>"/>
                        </div>
                    <?php } ?>
                </div>
            </div>
        
    </section>

    <!-- --------------------- -->
    <!-- GROUPE MEDIATHEQUE -->
    <section class='metagroup'>
        <!-- ACCROCHE POUR LA MEDIATHEQUE -->
        <h2>ACCROCHE MEDIATHÈQUE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_008">Accroche</label>
                        <textarea name="metadata_008" id="metadata_008" cols="50" rows="4" placeholder="320 caractères MAX avec espaces"><?php echo $metadata_008; ?></textarea>
                    </div>
                    <div class="pinput">
                        <label for="metadata_016">Code vidéos YouTube</label>
                        <input type="text" name="metadata_016" id="metadata_016" value="<?php echo $metadata_016; ?>"/>
                    </div>   
            </div>
        </div>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE SOUTENEZ-NOUS -->
    <section class='metagroup'>
        <!-- ACCROCHE POUR SOUTENEZ-NOUS -->
        <h2>ACCROCHE SOUTENEZ-NOUS</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_012">Accroche</label>
                        <textarea name="metadata_012" id="metadata_012" cols="50" rows="4" placeholder="220 caractères MAX avec espaces"><?php echo $metadata_012; ?></textarea>
                    </div>     
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
                        <label for="metadata_009_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_009_<?php echo $i; ?>" id="metadata_009_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_009_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_011_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_011_<?php echo $i; ?>" id="metadata_011_<?php echo $i; ?>" value="<?php echo $metadata_011_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_010_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_010_<?php echo $i; ?>" id="metadata_010_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_010_[$i]; ?></textarea>
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
                        <label for="metadata_013_<?php echo $i; ?>">Nom du témoin <?php echo $i; ?></label>
                        <input type="text" name="metadata_013_<?php echo $i; ?>" id="metadata_013_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_013_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE Du TEMOIGNAGE-->
                    <div class="pinput">
                        <label for="metadata_014_<?php echo $i; ?>">Texte du témoignage <?php echo $i; ?></label>
                        <textarea name="metadata_014_<?php echo $i; ?>" id="metadata_014_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_014_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
        
    </section>
    
    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_accueil($post_id) {
    
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_001', $_POST)) { update_post_meta( $post_id, 'metadata_001', $_POST['metadata_001']);};
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_002', $_POST)) { update_post_meta( $post_id, 'metadata_002', $_POST['metadata_002']);};
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_003', $_POST)) { update_post_meta( $post_id, 'metadata_003', $_POST['metadata_003']);};
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_004', $_POST)) { update_post_meta( $post_id, 'metadata_004', $_POST['metadata_004']);};
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_008', $_POST)) { update_post_meta( $post_id, 'metadata_008', $_POST['metadata_008']);};
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_012', $_POST)) { update_post_meta( $post_id, 'metadata_012', $_POST['metadata_012']);};
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_015', $_POST)) { update_post_meta( $post_id, 'metadata_015', $_POST['metadata_015']);};
    if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_016', $_POST)) { update_post_meta( $post_id, 'metadata_016', $_POST['metadata_016']);};
    for ($i = 1; $i <= 6; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_005_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_005_'.$i.'', $_POST['metadata_005_'.$i.'']);};
    }
    for ($i = 1; $i <= 6; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_006_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_006_'.$i.'', $_POST['metadata_006_'.$i.'']);};
    }
    for ($i = 1; $i <= 6; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_007_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_007_'.$i.'', $_POST['metadata_007_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_009_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_009_'.$i.'', $_POST['metadata_009_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_010_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_010_'.$i.'', $_POST['metadata_010_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_011_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_011_'.$i.'', $_POST['metadata_011_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_013_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_013_'.$i.'', $_POST['metadata_013_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if ('page-templates/page-accueil.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_014_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_014_'.$i.'', $_POST['metadata_014_'.$i.'']);};
    }
}

?>