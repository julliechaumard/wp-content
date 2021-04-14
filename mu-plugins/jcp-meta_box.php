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
* CONCERT
* 
*/

/************************************************************************
* HOOK
*************************************************************************/

add_action( 'add_meta_boxes', 'jcp_declare_metabox' );
add_action( 'save_post', 'jcp_metabox_save_concert');


/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox() {
 
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

include 'jcp-meta_box_concert.php';




?>

