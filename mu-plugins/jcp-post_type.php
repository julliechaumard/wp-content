<?php

/**
 * Articles Functions plugin for WordPress
 *
 * @package   post_type
 * @author    Julie Chaumard <juliechaumard@icloud.com>
 * @copyright 2020 Julie Chaumard
 * @license   GPL v2 or later
 *
 * Plugin Name:  Type de post/fiche
 * Description:  Plugin pour créer des types d'article. (post_type)
 * Version:      1
 * Plugin URI:   https://www.juliechaumard.paris
 * Author:       Julie Chaumard
 * Author URI:   https://www.juliechaumard.paris
 * Text Domain:  post_type
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
* Custom post type 
*
* CONCERT
* 
*
*************************************************************************/


//hook
add_action( 'after_setup_theme', 'jcp_create_cpt' );

function jcp_create_cpt() {

    /************************************************************************
    * CONCERT
    *************************************************************************/

    register_post_type( 'concert', array(
        'labels' => array(
            'name' => __( 'Concerts' ),
            'singular_name' => __( 'Concert' ),
            'add_new' => __( 'Ajouter  un concert' ),
            'add_new_item' => __( 'Ajouter un concert' ),
            'edit_item' => __( 'Modifier un proconcertjet' ),
            'new_item' => __( 'Nouveau concert' ),
            'view_item' => __( 'Voir un concert' ),
            'view_items' => __( 'Voir les concerts' ),
            'search_items' => __( 'Chercher un concert' ),
            'not_found_in_trash' => __( 'Concert non trouvé dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Tous les concerts' ),
            'archives' => __( 'Archive concerts' ),
            'attributes'  => __( 'Propriétés concert' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image mise en avant concert' ),
            'set_featured_image' => __( 'Ajouter image mise en avant concert' ),
            'remove_featured_image' => __( 'Supprimer image mise en avant concert' ),
            'use_featured_image' => __( 'Utiliser image mise en avant concert' ),
            'menu_name' => __( 'Concert' ),
            'filter_items_list' => __( 'Concert' ),
            'items_list_navigation' => __( 'Concert' ),
            'items_list' => __( 'Concert' ),
            'name_admin_bar' => __( 'Ajouter un concert' )
        ),
        'description' => 'Dossier des concerts',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'concert'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position'=> 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_concert.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'excerpt' ),
        'can_export' => true,
        'delete_with_user' => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        // supprimer les droits sur previeuw et permalien
        'publicly_queryable' => true
    ));





    /************************************************************************
    * ARTISTE
    *************************************************************************/

    register_post_type( 'artiste', array(
        'labels' => array(
            'name' => __( 'Artistes' ),
            'singular_name' => __( 'Artiste' ),
            'add_new' => __( 'Ajouter  un artiste' ),
            'add_new_item' => __( 'Ajouter un artiste' ),
            'edit_item' => __( 'Modifier un artiste' ),
            'new_item' => __( 'Nouveau artiste' ),
            'view_item' => __( 'Voir un artiste' ),
            'view_items' => __( 'Voir les artistes' ),
            'search_items' => __( 'Chercher un artiste' ),
            'not_found_in_trash' => __( 'Artiste non trouvé dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Tous les artistes' ),
            'archives' => __( 'Archive artistes' ),
            'attributes'  => __( 'Propriétés artiste' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image mise en avant artiste' ),
            'set_featured_image' => __( 'Ajouter image mise en avant artiste' ),
            'remove_featured_image' => __( 'Supprimer image mise en avant artiste' ),
            'use_featured_image' => __( 'Utiliser image mise en avant artiste' ),
            'menu_name' => __( 'Artiste' ),
            'filter_items_list' => __( 'Artiste' ),
            'items_list_navigation' => __( 'Artiste' ),
            'items_list' => __( 'Artiste' ),
            'name_admin_bar' => __( 'Ajouter un artiste' )
        ),
        'description' => 'Dossier des artistes',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'artiste'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_artiste.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'excerpt' ),
        'can_export' => true,
        'delete_with_user' => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        // supprimer les droits sur previeuw et permalien
        'publicly_queryable' => true
    ));




}   

?>