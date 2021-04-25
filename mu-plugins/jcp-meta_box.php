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


/** Custom post type 
* Les catégories de Post
* CONCERT
* 
*/

/************************************************************************
* HOOK
*************************************************************************/

add_action( 'add_meta_boxes', 'jcp_declare_metabox_concert' );
add_action( 'save_post', 'jcp_metabox_save_concert');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_salle' );
add_action( 'save_post', 'jcp_metabox_save_salle');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_partenaire' );
add_action( 'save_post', 'jcp_metabox_save_partenaire');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_artiste_invite' );
add_action( 'save_post', 'jcp_metabox_save_artiste_invite');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_orchestre' );
add_action( 'save_post', 'jcp_metabox_save_orchestre');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_recrutement' );
add_action( 'save_post', 'jcp_metabox_save_recrutement');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_actualite' );
add_action( 'save_post', 'jcp_metabox_save_actualite');

add_action( 'add_meta_boxes', 'jcp_declare_metabox_page_agenda' );
add_action( 'save_post', 'jcp_metabox_save_page_agenda');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_page_artistes_invites' );
add_action( 'save_post', 'jcp_metabox_save_page_artistes_invites');
add_action( 'add_meta_boxes', 'jcp_declare_metabox_page_collaborations' );
add_action( 'save_post', 'jcp_metabox_save_page_collaborations');

include 'jcp-meta_box/jcp-meta_box_concert.php';
include 'jcp-meta_box/jcp-meta_box_salle.php';
include 'jcp-meta_box/jcp-meta_box_partenaire.php';
include 'jcp-meta_box/jcp-meta_box_artiste_invite.php';
include 'jcp-meta_box/jcp-meta_box_ochestre.php';
include 'jcp-meta_box/jcp-meta_box_recrutement.php';
include 'jcp-meta_box/jcp-meta_box_actualite.php';

include 'jcp-meta_box/jcp-meta_box_page_agenda.php';
include 'jcp-meta_box/jcp-meta_box_page_artistes_invites.php';
include 'jcp-meta_box/jcp-meta_box_page_collaborations.php';
include 'jcp-meta_box/jcp-meta_box_page_collaborations.php';


?>

