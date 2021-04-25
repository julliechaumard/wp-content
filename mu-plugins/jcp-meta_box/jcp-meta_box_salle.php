<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_salle() {
 
	add_meta_box(
		'metabox_salle',
		'Informations salle',
		'metabox_salle',
		'salle',
		'normal',
		'default'
	);
 
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_salle($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_270 = get_post_meta( $post->ID, 'metadata_270', true );
    $metadata_271 = get_post_meta( $post->ID, 'metadata_271', true );
    $metadata_272 = get_post_meta( $post->ID, 'metadata_272', true );
    $metadata_273 = get_post_meta( $post->ID, 'metadata_273', true );
    $metadata_274 = get_post_meta( $post->ID, 'metadata_274', true );
    $metadata_275 = get_post_meta( $post->ID, 'metadata_275', true );

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    

    <!-- --------------------- -->
    <!-- GROUPE INFORMATIONS DE LA SALLE-->
    <section class='metagroup'>
        <h2>NOM</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items'>
                <div class="bloc50p">
                    <!-- NOM DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_270">Nom de la salle</label>
                        <input type="text" name="metadata_270" id="metadata_270" value="<?php echo $metadata_270; ?>"/>
                    </div>  
                </div>   
            </div>
        </div>

        <h2>COORDONÉES</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items'>
                <div class="bloc50p">
                    <!-- ADRESSE DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_271">Adresse complète de la salle</label>
                        <textarea name="metadata_271" id="metadata_271" cols="50" rows="4" placeholder=""><?php echo $metadata_271; ?></textarea>
                    </div>
                    <!-- VILLE DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_272">Ville</label>
                        <input type="text" name="metadata_272" id="metadata_272" value="<?php echo $metadata_272; ?>"/>
                    </div>
                    <!-- TÉLÉPHONE DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_273">Téléphone</label>
                        <input type="tel" name="metadata_273" id="metadata_273" value="<?php echo $metadata_273; ?>"/>
                    </div>  
                    <!-- MAIL DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_274">Email</label>
                        <input type="email" name="metadata_274" id="metadata_274" value="<?php echo $metadata_274; ?>"/>
                    </div>
                    <!-- URL DE LA SALLE -->
                    <div class="pinput">
                        <label for="metadata_275">Site Internet</label>
                        <input type="url" name="metadata_275" id="metadata_275" value="<?php echo $metadata_275; ?>"/>
                    </div>  
                </div>
                    
            </div>
        </div>
    </section>
    
    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_salle($post_id) {

    // metadata
    if (get_post_type($post_id) == 'salle' && array_key_exists('metadata_270', $_POST)) { update_post_meta( $post_id, 'metadata_270', $_POST['metadata_270']);};
    // metadata
    if (get_post_type($post_id) == 'salle' && array_key_exists('metadata_271', $_POST)) { update_post_meta( $post_id, 'metadata_271', $_POST['metadata_271']);};

    if (get_post_type($post_id) == 'salle' && array_key_exists('metadata_272', $_POST)) { update_post_meta( $post_id, 'metadata_272', $_POST['metadata_272']);};
    
    if (get_post_type($post_id) == 'salle' && array_key_exists('metadata_273', $_POST)) { update_post_meta( $post_id, 'metadata_273', $_POST['metadata_273']);};
    
    if (get_post_type($post_id) == 'salle' && array_key_exists('metadata_274', $_POST)) { update_post_meta( $post_id, 'metadata_274', $_POST['metadata_274']);};
    
    if (get_post_type($post_id) == 'salle' && array_key_exists('metadata_275', $_POST)) { update_post_meta( $post_id, 'metadata_275', $_POST['metadata_275']);};
       
}

?>