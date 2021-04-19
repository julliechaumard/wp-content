<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_concert() {
 
	add_meta_box(
		'metabox_concert',
		'Informations concert',
		'metabox_concert',
		'concert',
		'normal',
		'default'
	);
 
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_concert($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    for ($i = 1; $i <= 10; $i++) {
        $metadata_180_[$i] = get_post_meta( $post->ID, 'metadata_180_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_181_[$i] = get_post_meta( $post->ID, 'metadata_181_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_182_[$i] = get_post_meta( $post->ID, 'metadata_182_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_183_[$i] = get_post_meta( $post->ID, 'metadata_183_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_184_[$i] = get_post_meta( $post->ID, 'metadata_184_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 5; $j++) {  
            ${"metadata_185_[$i]_$j"} = get_post_meta( $post->ID, 'metadata_185_'.$i.'_'.$j.'', true );  
        }
    }
    for ($i = 1; $i <= 30; $i++) {
        $metadata_186_[$i] = get_post_meta( $post->ID, 'metadata_186_'.$i.'', true );
    }
    for ($i = 1; $i <= 30; $i++) {
        $metadata_187_[$i] = get_post_meta( $post->ID, 'metadata_187_'.$i.'', true );
    }
    $metadata_188 = get_post_meta( $post->ID, 'metadata_188', true );
    $metadata_189 = get_post_meta( $post->ID, 'metadata_189', true );
    for ($i = 1; $i <= 15; $i++) {
        $metadata_190_[$i] = get_post_meta( $post->ID, 'metadata_190_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_191_[$i] = get_post_meta( $post->ID, 'metadata_191_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_192_[$i] = get_post_meta( $post->ID, 'metadata_192_'.$i.'', true );
    }
    $metadata_193 = get_post_meta( $post->ID, 'metadata_193', true );
    for ($i = 1; $i <= 20; $i++) {
        $metadata_194_[$i] = get_post_meta( $post->ID, 'metadata_194_'.$i.'', true );
    }
    for ($i = 1; $i <= 20; $i++) {
        $metadata_195_[$i] = get_post_meta( $post->ID, 'metadata_195_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_196_[$i] = get_post_meta( $post->ID, 'metadata_196_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_197_[$i] = get_post_meta( $post->ID, 'metadata_197_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_198_[$i] = get_post_meta( $post->ID, 'metadata_198_'.$i.'', true );
    }
    $metadata_199 = get_post_meta( $post->ID, 'metadata_199', true );
    $metadata_200 = get_post_meta( $post->ID, 'metadata_200', true );
    $metadata_201 = get_post_meta( $post->ID, 'metadata_201', true );

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    

    <!-- --------------------- -->
    <!-- GROUPE TITRES -->
    <section class='metagroup'>
        <h2>LES TITRES</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <!-- TITRE DU CONCERT EN GRAS -->
                <div class="pinput">
                    <label for="metadata_199">Titre du concert en gras</label>
                    <input type="text" name="metadata_199" id="metadata_199" value="<?php echo $metadata_199; ?>"/>
                </div>
                <!-- TITRE DU CONCERT EN LEGER -->
                <div class="pinput">
                    <label for="metadata_200">Titre du concert en léger</label>
                    <input type="text" name="metadata_200" id="metadata_200" value="<?php echo $metadata_200; ?>"/>
                </div>
                <!-- SOUS-TITRE DU CONCERT -->
                <div class="pinput">
                    <label for="metadata_201">Sous-titre du concert</label>
                    <input type="text" name="metadata_201" id="metadata_201" value="<?php echo $metadata_201; ?>"/>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- --------------------- -->
    <!-- GROUPE DATES ET LIEUX -->
    <section class='metagroup'>
        <h2>DATES ET LIEUX</h2>

        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <div class='metagroup_sub'>
                <h3>REPRÉSENTATION <?php echo $i; ?></h3>
                <div class='metagroup_sub_items grid_concert_representations'>
                    <!-- DATE -->
                    <div class="date pinput">
                        <label for="metadata_180_<?php echo $i; ?>">Date</label>
                        <input type="date" name="metadata_180_<?php echo $i; ?>" id="metadata_180_<?php echo $i; ?>" value="<?php echo $metadata_180_[$i]; ?>"/>
                    </div>
                
                    <!-- HEURE -->
                    <div class="heure pinput">
                        <label for="metadata_181_<?php echo $i; ?>">Heure</label>
                        <input type="text" name="metadata_181_<?php echo $i; ?>" id="metadata_181_<?php echo $i; ?>" value="<?php echo $metadata_181_[$i]; ?>"/>
                    </div>

                    <!-- VILLE -->
                    <div class="ville pinput">
                        <label for="metadata_182_<?php echo $i; ?>">Choisir la salle de concert</label>
                      
                        <!-- LISTE DÉROULANTE DES SALLES DU POST TYPE "SALLE" -->
                        <select name="metadata_182_<?php echo $i; ?>" id="metadata_182_<?php echo $i; ?>">

                        <!-- BOUCLE POUR ALLER CHERCHER LES POSTS DE TYPE "SALLE" ET LES LISTER EN <OPTION> DU <SELECT> -->
                        <?php
                        $args_boucle_salle = array(  'post_type' => 'salle',  'orderby' => 'title', 'order'=> 'ASC',);
                        $listeoptions_salle = array();
                        $listeoptions_salle[0] = '';
                        $loop_salle = new WP_Query( $args_boucle_salle );
                        if ( $loop_salle->have_posts() ) {
                            while ( $loop_salle->have_posts() ) {
                                $loop_salle->the_post();
                                $listeoptions_salle[] = get_post_field( 'post_name', get_post() );
                        }}
                        foreach ($listeoptions_salle as $value) {
                            echo '<option value="'.$value.'"' . selected($metadata_182_[$i], $value, false) .'>'.$value.'</option> ';
                            unset($value);
                        }?>
                        </select>
                    </div>

                    <!-- CONCERT ANNULÉ -->
                    <div class="pinput annule">
                        <label for="metadata_183_<?php echo $i; ?>">Annulé</label>
                        <input type="text" name="metadata_183_<?php echo $i; ?>" id="metadata_183_<?php echo $i; ?>" value="<?php echo $metadata_183_[$i]; ?>"/>
                    </div>

                    <!-- CONCERT REPORTÉ -->
                    <div class="pinput report">
                        <label for="metadata_184_<?php echo $i; ?>">Reporté</label>
                        <input type="text" name="metadata_184_<?php echo $i; ?>" id="metadata_184_<?php echo $i; ?>" value="<?php echo $metadata_184_[$i]; ?>"/>
                    </div>
                </div>

                <!-- TARIF-->
                    <div class='metagroup_sub_items grid_tarif'>
                        <?php for ($j = 1; $j <= 5; $j++) { ?>
                            <p class=" tarif_item_<?php echo $j; ?> pinput">
                                <label for="metadata_185_<?php echo $i; ?>_<?php echo $j; ?>">Tarif <?php echo $j; ?></label>
                                <input type="text" name="metadata_185_<?php echo $i; ?>_<?php echo $j; ?>" id="metadata_185_<?php echo $i; ?>_<?php echo $j; ?>" value="<?php echo ${"metadata_185_[$i]_$j"}; ?>"/>
                            </p>
                        <?php } ?>
                    </div>
                
            </div>
        <?php } ?>
    </section>

    <!-- --------------------- -->
    <!-- GROUPE ARTISTES -->
    <section class='metagroup'>
        <h2>LES ARTISTES ou ENTITÉS</h2>

            <div class='metagroup_sub'>
            
                <div class='metagroup_sub_items grid_4fr_simple'>
                <?php for ($i = 1; $i <= 30; $i++) { ?>
                    <!-- NOM de L'ARTISTE -->
                    <div class="pinput">
                        <label for="metadata_186_<?php echo $i; ?>">Nom <?php echo $i; ?></label>
                        <input type="text" name="metadata_186_<?php echo $i; ?>" id="metadata_186_<?php echo $i; ?>" value="<?php echo $metadata_186_[$i]; ?>"/>
                    </div>

                    <!-- POSTE de L'ARTISTE -->
                    <div class="pinput">
                        <label for="metadata_187_<?php echo $i; ?>">Poste <?php echo $i; ?></label>
                        <input type="text" name="metadata_187_<?php echo $i; ?>" id="metadata_187_<?php echo $i; ?>" value="<?php echo $metadata_187_[$i]; ?>"/>
                    </div>
                <?php } ?>
                </div>
            
            </div>
        
    </section>

    <!-- --------------------- -->
    <!-- GROUPE PROGRAMME -->
    <section class='metagroup'>
        <h2>LE PROGRAMME</h2>
        
        <!-- PDF A TÉLÉCHARGER -->
        <div class='metagroup_sub'>
            <h3>Programme PDF</h3>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <div class="pinput">
                <label for="metadata_193">PDF du programme</label>
                <input type="text" name="metadata_193" id="metadata_193" class="pdf-url" value="<?php echo $metadata_193; ?>"/>
                <input type="button" class="pdf-uploader" value="Sélectionner un PDF">
            </div>

            <!-- SCRIPT POUR TÉLÉCHARGER UN FICHIER PDF -->
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

        <!-- LES OEUVRES -->
        <div class='metagroup_sub'>
            <h3>LES OEUVRES</h3>
            <div class='metagroup_sub_items grid_4fr_simple'>
                <?php for ($i = 1; $i <= 20; $i++) { ?>

                    <!-- NOM DU COMPOSITEUR -->
                    <div class="pinput">
                        <label for="metadata_194_<?php echo $i; ?>">Compositeur <?php echo $i; ?></label>
                        <input type="text" name="metadata_194_<?php echo $i; ?>" id="metadata_194_<?php echo $i; ?>" value="<?php echo $metadata_194_[$i]; ?>"/>
                    </div>

                    <!-- NOM DE L'OEUVRE -->
                    <div class="pinput">
                        <label for="metadata_195_<?php echo $i; ?>">Oeuvre <?php echo $i; ?></label>
                        <input type="text" name="metadata_195_<?php echo $i; ?>" id="metadata_195_<?php echo $i; ?>" value="<?php echo $metadata_195_[$i]; ?>"/>
                    </div>
                <?php } ?>
            </div>
        
        </div>
        
    </section>


    <!-- --------------------- -->
    <!-- GROUPE REVUE DE PRESSE -->
    <section class='metagroup'>
        <h2>LA REVUE DE PRESSE</h2>

            <div class='metagroup_sub'>
            
                <div class='metagroup_sub_items grid_revue_presse'>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <!-- NOM du JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_196_<?php echo $i; ?>">Nom du journal <?php echo $i; ?></label>
                        <input type="text" name="metadata_196_<?php echo $i; ?>" id="metadata_196_<?php echo $i; ?>" value="<?php echo $metadata_196_[$i]; ?>"/>
                    </div>

                    <!-- URL DU JOURNAL -->
                    <div class="pinput">
                        <label for="metadata_198_<?php echo $i; ?>">URL de l'article <?php echo $i; ?></label>
                        <input type="url" name="metadata_198_<?php echo $i; ?>" id="metadata_198_<?php echo $i; ?>" value="<?php echo $metadata_198_[$i]; ?>"/>
                    </div>

                    <!-- TEXTE DE LA REVUE -->
                    <div class="pinput">
                        <label for="metadata_197_<?php echo $i; ?>">Extrait de l'article <?php echo $i; ?></label>
                        <textarea name="metadata_197_<?php echo $i; ?>" id="metadata_197_<?php echo $i; ?>" cols="50" rows="4" placeholder="<?php echo $metadata_197_[$i]; ?>"></textarea>
                    </div>
                <?php } ?>
                </div>
            
            </div>
        
    </section>

        <!-- --------------------- -->
    <!-- GROUPE PHOTOS ET VIDEOS -->
    <section class='metagroup'>

        <h2>PHOTOS & VIDÉOS</h2>

            <div class='metagroup_sub'>
                <h3>VIDÉOS</h3>
                <div class='metagroup_sub_items grid_3fr_simple'>
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <!-- CODE YOUTUBE -->
                    <div class="pinput">
                        <label for="metadata_191_<?php echo $i; ?>">Code vidéo YouTube <?php echo $i; ?></label>
                        <input type="text" name="metadata_191_<?php echo $i; ?>" id="metadata_191_<?php echo $i; ?>" value="<?php echo $metadata_191_[$i]; ?>"/>
                    </div>

                <?php } ?>
                </div>
            </div>

            <div class='metagroup_sub'>

                <h3>PHOTOS</h3>

                <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <!-- PHOTO -->
                        <div class="pinput">
                            <label for="metadata_192_<?php echo $i; ?>">Photo <?php echo $i; ?></label>
                            <input type="text" name="metadata_192_<?php echo $i; ?>" id="metadata_192_<?php echo $i; ?>" class="photo-url_<?php echo $i; ?>" value="<?php echo $metadata_192_[$i]; ?>"/>
                            <input type="button" class="photo-uploader_<?php echo $i; ?>" value="Sélectionner une image">
                        </div>
                        <div class="photo-preview_<?php echo $i; ?>">
                            <img src="<?php echo get_post_meta($post->ID, 'metadata_192_'.$i.'', true); ?>" style="max-width: 150px;">
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













    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_concert($post_id) {

    // metadata
    if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_199', $_POST)) { update_post_meta( $post_id, 'metadata_199', $_POST['metadata_199']);};
    if (isset($_POST['metadata_199'])) {if (empty($_POST['metadata_199'])) {delete_post_meta($post_id, 'metadata_199');}}
    // metadata
    if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_200', $_POST)) { update_post_meta( $post_id, 'metadata_200', $_POST['metadata_200']);};
    if (isset($_POST['metadata_200'])) {if (empty($_POST['metadata_200'])) {delete_post_meta($post_id, 'metadata_200');}}

    if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_201', $_POST)) { update_post_meta( $post_id, 'metadata_201', $_POST['metadata_201']);};
    if (isset($_POST['metadata_201'])) {if (empty($_POST['metadata_201'])) {delete_post_meta($post_id, 'metadata_201');}}

    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_180_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_180_'.$i.'', $_POST['metadata_180_'.$i.'']);};
        if (isset($_POST['metadata_180_'.$i.''])) {if (empty($_POST['metadata_180_'.$i.''])) {delete_post_meta($post_id, 'metadata_180_'.$i.'');}}
    }
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_181_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_181_'.$i.'', $_POST['metadata_181_'.$i.'']);};
        if (isset($_POST['metadata_181_'.$i.''])) {if (empty($_POST['metadata_181_'.$i.''])) {delete_post_meta($post_id, 'metadata_181_'.$i.'');}}
    }
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_182_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_182_'.$i.'', $_POST['metadata_182_'.$i.'']);};
        if (isset($_POST['metadata_182_'.$i.''])) {if (empty($_POST['metadata_182_'.$i.''])) {delete_post_meta($post_id, 'metadata_182_'.$i.'');}}
    }
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <=5; $j++) {  
            if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_185_'.$i.'_'.$j.'', $_POST)) { update_post_meta( $post_id, 'metadata_185_'.$i.'_'.$j.'', $_POST['metadata_185_'.$i.'_'.$j.'']);};
            if (isset($_POST['metadata_185_'.$i.'_'.$j.''])) {if (empty($_POST['metadata_185_'.$i.'_'.$j.''])) {delete_post_meta($post_id, 'metadata_185_'.$i.'_'.$j.'');}}
        }
    }
    for ($i = 1; $i <= 30; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_186_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_186_'.$i.'', $_POST['metadata_186_'.$i.'']);};
        if (isset($_POST['metadata_186_'.$i.''])) {if (empty($_POST['metadata_186_'.$i.''])) {delete_post_meta($post_id, 'metadata_186_'.$i.'');}}
    }
    for ($i = 1; $i <= 30; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_187_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_187_'.$i.'', $_POST['metadata_187_'.$i.'']);};
        if (isset($_POST['metadata_187_'.$i.''])) {if (empty($_POST['metadata_187_'.$i.''])) {delete_post_meta($post_id, 'metadata_187_'.$i.'');}}
    }
    for ($i = 1; $i <= 20; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_194_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_194_'.$i.'', $_POST['metadata_194_'.$i.'']);};
        if (isset($_POST['metadata_194_'.$i.''])) {if (empty($_POST['metadata_194_'.$i.''])) {delete_post_meta($post_id, 'metadata_194_'.$i.'');}}
    }
    for ($i = 1; $i <= 20; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_195_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_195_'.$i.'', $_POST['metadata_195_'.$i.'']);};
        if (isset($_POST['metadata_195_'.$i.''])) {if (empty($_POST['metadata_195_'.$i.''])) {delete_post_meta($post_id, 'metadata_195_'.$i.'');}}
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_196_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_196_'.$i.'', $_POST['metadata_196_'.$i.'']);};
        if (isset($_POST['metadata_196_'.$i.''])) {if (empty($_POST['metadata_196_'.$i.''])) {delete_post_meta($post_id, 'metadata_196_'.$i.'');}}
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_197_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_197_'.$i.'', $_POST['metadata_197_'.$i.'']);};
        if (isset($_POST['metadata_197_'.$i.''])) {if (empty($_POST['metadata_197_'.$i.''])) {delete_post_meta($post_id, 'metadata_197_'.$i.'');}}
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_198_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_198_'.$i.'', $_POST['metadata_198_'.$i.'']);};
        if (isset($_POST['metadata_198_'.$i.''])) {if (empty($_POST['metadata_198_'.$i.''])) {delete_post_meta($post_id, 'metadata_198_'.$i.'');}}
    }
    for ($i = 1; $i <= 3; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_191_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_191_'.$i.'', $_POST['metadata_191_'.$i.'']);};
        if (isset($_POST['metadata_191_'.$i.''])) {if (empty($_POST['metadata_191_'.$i.''])) {delete_post_meta($post_id, 'metadata_191_'.$i.'');}}
    }
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_192_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_192_'.$i.'', $_POST['metadata_192_'.$i.'']);};
        if (isset($_POST['metadata_192_'.$i.''])) {if (empty($_POST['metadata_192_'.$i.''])) {delete_post_meta($post_id, 'metadata_192_'.$i.'');}}
    }
    if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_193', $_POST)) { update_post_meta( $post_id, 'metadata_193', $_POST['metadata_193']);};
    if (isset($_POST['metadata_193'])) {if (empty($_POST['metadata_193'])) {delete_post_meta($post_id, 'metadata_193');}}
    

}

?>