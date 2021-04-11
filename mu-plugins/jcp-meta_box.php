<?php

/**
 * Articles Functions plugin for WordPress
 *
 * @package   meta_box
 * @author    Julie Chaumard <juliechaumard@icloud.com>
 * @copyright 2020 Julie Chaumard
 * @license   GPL v2 or later
 *
 * Plugin Name:  Saisie du contenu
 * Description:  Plugin pour créer des champs de saisies de contenu dans les posts/fiches. (meta_box)
 * Version:      1
 * Plugin URI:   https://www.juliechaumard.paris
 * Author:       Julie Chaumard
 * Author URI:   https://www.juliechaumard.paris
 * Text Domain:  meta_box
 * Domain Path:  /languages/
 * Requires PHP: 5.3.6
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */


/************************************************************************
* CSS des champs personnalisés
*************************************************************************/

/** Custom post type 
* Les catégories de Post
* ARTISTE
* PROJETS
*/

/************************************************************************
* HOOK
*************************************************************************/

add_action( 'add_meta_boxes', 'jcp_declare_metabox' );
add_action( 'save_post', 'jcp_metabox_save');


/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox() {
 
	add_meta_box(
		'metabox_artistes',
		'Informations artiste',
		'metabox_artistes',
		'artiste',
		'normal',
		'default'
	);
 
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/

function metabox_artistes($post) {

    //Variables pour récupérer les valeurs existantes (s'il y en a)
    $metadata_001 = get_post_meta( $post->ID, 'metadata_001', true );
    $metadata_002 = get_post_meta( $post->ID, 'metadata_002', true );
    $metadata_003 = get_post_meta( $post->ID, 'metadata_003', true );
    $metadata_004 = get_post_meta( $post->ID, 'metadata_004', true );
    $metadata_005 = get_post_meta( $post->ID, 'metadata_005', true );

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>'

    // metadata_001
    ?>
    <p class="pinput">
      <label for="metadata_001" class="label">Information_1</label>
      <input type="text" name="metadata_001" id="metadata_001" value="<?php echo $metadata_001; ?>" class="input"/>
    </p>
    <?php

    // metadata_002
    ?>
    <p class="pinput">
      <label for="metadata_002" class="label">Information_2</label>
      <input type="text" name="metadata_002" id="metadata_002" value="<?php echo $metadata_002; ?>" class="input"/>
    </p>
    
    <?php


}


/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save($post_id) {

    // metadata_001
    if (get_post_type($post_id) == 'artiste' && array_key_exists('metadata_001', $_POST)) { update_post_meta( $post_id, 'metadata_001', $_POST['metadata_001']);};
    if (isset($_POST['metadata_001'])) {if (empty($_POST['metadata_001'])) {delete_post_meta($post_id, 'metadata_001');}}

    // metadata_002
    if (get_post_type($post_id) == 'artiste' && array_key_exists('metadata_002', $_POST)) { update_post_meta( $post_id, 'metadata_002', $_POST['metadata_002']);};
    if (isset($_POST['metadata_002'])) {if (empty($_POST['metadata_002'])) {delete_post_meta($post_id, 'metadata_002');}}

}

?>

