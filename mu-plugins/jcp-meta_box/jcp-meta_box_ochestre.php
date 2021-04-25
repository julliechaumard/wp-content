<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_orchestre() {
 
	add_meta_box(
		'metabox_orchestre',
		'Informations membres de l\'orchestre',
		'metabox_orchestre',
		'orchestre',
		'normal',
		'default'
	); 
}


/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/

function metabox_orchestre($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_601 = get_post_meta( $post->ID, 'metadata_601', true );
    $metadata_602 = get_post_meta( $post->ID, 'metadata_602', true );
    $metadata_603 = get_post_meta( $post->ID, 'metadata_603', true );
    for ($i = 1; $i <= 4; $i++) {
        $metadata_604_[$i] = get_post_meta( $post->ID, 'metadata_604_'.$i.'', true );
    }
    $metadata_605 = get_post_meta( $post->ID, 'metadata_605', true );
    $metadata_606 = get_post_meta( $post->ID, 'metadata_606', true );
    for ($i = 1; $i <= 3; $i++) {
        $metadata_607_[$i] = get_post_meta( $post->ID, 'metadata_607_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_608_[$i] = get_post_meta( $post->ID, 'metadata_608_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_609_[$i] = get_post_meta( $post->ID, 'metadata_609_'.$i.'', true );
    }
    $metadata_610 = get_post_meta( $post->ID, 'metadata_610', true );
    $metadata_611 = get_post_meta( $post->ID, 'metadata_611', true );

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
                    <label for="metadata_611">Image vignette</label>
                    <input type="text" name="metadata_611" id="metadata_611" class="vignette-url" value="<?php echo $metadata_611; ?>"/>
                    <input type="button" class="vignette-uploader" value="Sélectionner une image">
                </div>
                <div class="vignette-preview">
                    <img src="<?php echo get_post_meta($post->ID, 'metadata_611', true); ?>" style="max-width: 150px;">
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
                <!-- NOM du membre de l'Orchestre -->
                <div class="pinput">
                    <label for="metadata_603">Nom du membre de l'Orchestre</label>
                    <input type="text" name="metadata_603" id="metadata_603" placeholder='en MAJUSCULE' value="<?php echo $metadata_603; ?>"/>
                </div>
            </div>
        </div>
        
        <!-- LES POSTES -->

        <h3>LES POSTES PAR ORDRE D'AFFICHAGE</h3>
        <div class='metagroup_sub_items grid_4fr_simple'>

            <!-- NOM DES 4 POSTES -->
            <?php for ($i = 1; $i <= 4; $i++) { ?>

                <div class="pinput">
                    <label for="metadata_604_<?php echo $i; ?>">Poste <?php echo $i; ?></label>
                    <input type="text" name="metadata_604_<?php echo $i; ?>" id="metadata_604_<?php echo $i; ?>" value="<?php echo $metadata_604_[$i]; ?>"/>
                </div>

            <?php } ?>

            <!-- POSTE A AFFICHER -->
            <div class="pinput">
                <label for="metadata_605">Poste à afficher dans la liste des membres de l'Orchestre (si on ne veut pas afficher tous les postes)</label>
                <input type="text" name="metadata_605" id="metadata_605" placeholder='' value="<?php echo $metadata_605; ?>"/>
            </div>

        </div>

    </section>


    <!-- --------------------- -->
    <!-- GROUPE ACCROCHE -->
    <section class='metagroup'>
        <!-- ACCROCHE DU MEMBRE DE L'ORCHESTRE MUSICIEN ou DIRECTION -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_601">Accroche - ligne1</label>
                        <input type="text" name="metadata_601" id="metadata_601" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_601; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_602">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_602" id="metadata_602" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE (pour la direction et les musiciens)"><?php echo $metadata_602; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>

    <!-- --------------------- -->
    <!-- GROUPE DESCRIPTION COURTE -->
    <section class='metagroup'>
        
        <h2>DESCRIPTION POUR LISTE DES MEMBRE DE L'ORCHESTRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_606">Description courte</label>
                        <textarea name="metadata_606" id="metadata_606" cols="50" rows="4" placeholder="276 caractères MAX avec espaces"><?php echo $metadata_606; ?></textarea>
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
                        <label for="metadata_607_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_607_<?php echo $i; ?>" id="metadata_607_<?php echo $i; ?>" placeholder="EN MAJUSCULE" value="<?php echo $metadata_607_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_609_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_609_<?php echo $i; ?>" id="metadata_609_<?php echo $i; ?>" value="<?php echo $metadata_609_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_608_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_608_<?php echo $i; ?>" id="metadata_608_<?php echo $i; ?>" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_608_[$i]; ?></textarea>
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
                        <label for="metadata_610">Texte du témoignage</label>
                        <textarea name="metadata_610" id="metadata_610" cols="50" rows="4" placeholder="425 caractères MAX avec espaces"><?php echo $metadata_610; ?></textarea>
                    </div>     
            </div>

        </div>

    </section>

    <?php
}


/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_orchestre($post_id) {

    // metadata
    if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_601', $_POST)) { update_post_meta( $post_id, 'metadata_601', $_POST['metadata_601']);};
    if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_602', $_POST)) { update_post_meta( $post_id, 'metadata_602', $_POST['metadata_602']);};
    if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_603', $_POST)) { update_post_meta( $post_id, 'metadata_603', $_POST['metadata_603']);};
    for ($i = 1; $i <= 4; $i++) {
        if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_604_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_604_'.$i.'', $_POST['metadata_604_'.$i.'']);};
    }
    if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_605', $_POST)) { update_post_meta( $post_id, 'metadata_605', $_POST['metadata_605']);};
    if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_606', $_POST)) { update_post_meta( $post_id, 'metadata_606', $_POST['metadata_606']);};
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_607_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_607_'.$i.'', $_POST['metadata_607_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_608_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_608_'.$i.'', $_POST['metadata_608_'.$i.'']);};
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_609_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_609_'.$i.'', $_POST['metadata_609_'.$i.'']);};
    }
    if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_610', $_POST)) { update_post_meta( $post_id, 'metadata_610', $_POST['metadata_610']);};
    if (get_post_type($post_id) == 'orchestre' && array_key_exists('metadata_611', $_POST)) { update_post_meta( $post_id, 'metadata_611', $_POST['metadata_611']);};

}

?>