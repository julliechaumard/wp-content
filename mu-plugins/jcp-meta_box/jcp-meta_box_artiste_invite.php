<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_artiste_invite() {
 
	add_meta_box(
		'metabox_artiste_invite',
		'Informations artiste invite',
		'metabox_artiste_invite',
		'artiste_invite',
		'normal',
		'default'
	); 
}


/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/

function metabox_artiste_invite($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_120 = get_post_meta( $post->ID, 'metadata_120', true );
    $metadata_121 = get_post_meta( $post->ID, 'metadata_121', true );
    $metadata_122 = get_post_meta( $post->ID, 'metadata_122', true );
    for ($i = 1; $i <= 4; $i++) {
        $metadata_123_[$i] = get_post_meta( $post->ID, 'metadata_123_'.$i.'', true );
    }
    $metadata_124 = get_post_meta( $post->ID, 'metadata_124', true );
    $metadata_125 = get_post_meta( $post->ID, 'metadata_125', true );
    for ($i = 1; $i <= 3; $i++) {
        $metadata_126_[$i] = get_post_meta( $post->ID, 'metadata_126_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_127_[$i] = get_post_meta( $post->ID, 'metadata_127_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_128_[$i] = get_post_meta( $post->ID, 'metadata_128_'.$i.'', true );
    }
    $metadata_129 = get_post_meta( $post->ID, 'metadata_129', true );
    $metadata_130 = get_post_meta( $post->ID, 'metadata_130', true );
    $metadata_131 = get_post_meta( $post->ID, 'metadata_131', true );

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
                    <label for="metadata_130">Image vignette</label>
                    <input type="text" name="metadata_130" id="metadata_130" class="vignette-url" value="<?php echo $metadata_130; ?>"/>
                    <input type="button" class="vignette-uploader" value="Sélectionner une image">
                </div>
                <div class="vignette-preview">
                    <img src="<?php echo get_post_meta($post->ID, 'metadata_130', true); ?>" style="max-width: 150px;">
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
    <!-- GROUPE NOM ET POSTES -->
    <section class='metagroup'>
        <h2>NOM ET POSTES</h2>
        <div class=''>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <!-- NOM DE L'ARTISTE INVITE -->
                <div class="pinput">
                    <label for="metadata_122">Nom de l’artiste ou de l'entité</label>
                    <input type="text" name="metadata_122" id="metadata_122" placeholder='en MAJUSCULE' value="<?php echo $metadata_122; ?>"/>
                </div>
            </div>
        </div>
        
        <!-- LES POSTES -->

        <h3>LES POSTES PAR ORDRE D'AFFICHAGE</h3>
        <div class='metagroup_sub_items grid_4fr_simple'>

            <!-- NOM DES 4 POSTES -->
            <?php for ($i = 1; $i <= 4; $i++) { ?>

                <div class="pinput">
                    <label for="metadata_123_<?php echo $i; ?>">Poste <?php echo $i; ?></label>
                    <input type="text" name="metadata_123_<?php echo $i; ?>" id="metadata_123_<?php echo $i; ?>" value="<?php echo $metadata_123_[$i]; ?>"/>
                </div>

            <?php } ?>

            <!-- POSTE A AFFICHER -->
            <div class="pinput">
                <label for="metadata_124">Poste à afficher dans la liste des artistes (si on ne veut pas afficher tous les postes)</label>
                <input type="text" name="metadata_124" id="metadata_124" placeholder='' value="<?php echo $metadata_124; ?>"/>
            </div>

        </div>

    </section>


    <!-- --------------------- -->
    <!-- GROUPE SITE INTERNET DE L'ARTISTE -->
    <section class='metagroup'>
        
        <h2>SITE INTERNET DE L'ARTISTE INVITÉ</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                <div class="pinput">
                    <label for="metadata_131">URL du site internet</label>
                    <input type="url" name="metadata_131" id="metadata_131" value="<?php echo $metadata_131 ?>"/>
                </div>
            </div>

        </div>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE ACCROCHE -->
    <section class='metagroup'>
        <!-- ACCROCHE DE L'ARTISTE INVITE -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_120">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_120" id="metadata_120" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_120; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_121">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_121" id="metadata_121" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_121; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <!-- --------------------- -->
    <!-- GROUPE DESCRIPTION COURTE -->
    <section class='metagroup'>
        
        <h2>DESCRIPTION POUR LISTE DES ARTISTES INVITÉS</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_125">Description courte</label>
                        <textarea name="metadata_125" id="metadata_125" cols="50" rows="4" placeholder="276 caractères MAX avec espaces"><?php echo $metadata_125; ?></textarea>
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
                        <label for="metadata_126_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_126_<?php echo $i; ?>" id="metadata_126_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_126_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_128_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_128_<?php echo $i; ?>" id="metadata_128_<?php echo $i; ?>" value="<?php echo $metadata_128_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_127_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_127_<?php echo $i; ?>" id="metadata_127_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_127_[$i]; ?></textarea>
                    </div>
                <?php } ?>
                </div>
            
            </div>
        
    </section>

    <!-- --------------------- -->
    <!-- GROUPE TEMOIGNAGE -->
    <section class='metagroup'>
        
        <h2>TÉMOIGNAGE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                <div class="pinput">
                    <label for="metadata_129">Texte du témoignage</label>
                    <textarea name="metadata_129" id="metadata_129" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_129; ?></textarea>
                </div>     
            </div>

        </div>

    </section>

    <?php
}


/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_artiste_invite($post_id) {

    // metadata
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_120', $_POST)) { update_post_meta( $post_id, 'metadata_120', $_POST['metadata_120']);};
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_121', $_POST)) { update_post_meta( $post_id, 'metadata_121', $_POST['metadata_121']);};
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_122', $_POST)) { update_post_meta( $post_id, 'metadata_122', $_POST['metadata_122']);};
    for ($i = 1; $i <= 4; $i++) {
        if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_123_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_123_'.$i.'', $_POST['metadata_123_'.$i.'']);};
    }
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_124', $_POST)) { update_post_meta( $post_id, 'metadata_124', $_POST['metadata_124']);};
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_125', $_POST)) { update_post_meta( $post_id, 'metadata_125', $_POST['metadata_125']);};
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_126_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_126_'.$i.'', $_POST['metadata_126_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_127_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_127_'.$i.'', $_POST['metadata_127_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_128_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_128_'.$i.'', $_POST['metadata_128_'.$i.'']);};
    }
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_129', $_POST)) { update_post_meta( $post_id, 'metadata_129', $_POST['metadata_129']);};
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_130', $_POST)) { update_post_meta( $post_id, 'metadata_130', $_POST['metadata_130']);};
    if (get_post_type($post_id) == 'artiste_invite' && array_key_exists('metadata_131', $_POST)) { update_post_meta( $post_id, 'metadata_131', $_POST['metadata_131']);};
}

?>