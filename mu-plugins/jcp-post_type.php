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
* SALLE
* PARTENAIRES
* ARTISTE INVITÉ
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
            'edit_item' => __( 'Modifier un concert' ),
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
    * SALLE
    *************************************************************************/

    register_post_type( 'salle', array(
        'labels' => array(
            'name' => __( 'Salles' ),
            'singular_name' => __( 'Salle' ),
            'add_new' => __( 'Ajouter  une salle' ),
            'add_new_item' => __( 'Ajouter une salle' ),
            'edit_item' => __( 'Modifier une salle' ),
            'new_item' => __( 'Nouvelle salle' ),
            'view_item' => __( 'Voir une salle' ),
            'view_items' => __( 'Voir les salles' ),
            'search_items' => __( 'Chercher une salle' ),
            'not_found_in_trash' => __( 'Salle non trouvée dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Toutes les salles' ),
            'archives' => __( 'Archive salles' ),
            'attributes'  => __( 'Propriétés salle' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image mise en avant salle' ),
            'set_featured_image' => __( 'Ajouter image mise en avant salle' ),
            'remove_featured_image' => __( 'Supprimer image mise en avant salle' ),
            'use_featured_image' => __( 'Utiliser image mise en avant salle' ),
            'menu_name' => __( 'Salle' ),
            'filter_items_list' => __( 'Salle' ),
            'items_list_navigation' => __( 'Salle' ),
            'items_list' => __( 'Salle' ),
            'name_admin_bar' => __( 'Ajouter une salle' )
        ),
        'description' => 'Dossier des salles',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'salle'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position'=> 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_lieu.png',
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
    * PARTENAIRE
    *************************************************************************/

    register_post_type( 'partenaire', array(
        'labels' => array(
            'name' => __( 'Partenaires' ),
            'singular_name' => __( 'Partenaire' ),
            'add_new' => __( 'Ajouter  un partenaire' ),
            'add_new_item' => __( 'Ajouter un partenaire' ),
            'edit_item' => __( 'Modifier un partenaire' ),
            'new_item' => __( 'Nouveau partenaire' ),
            'view_item' => __( 'Voir un partenaire' ),
            'view_items' => __( 'Voir les partenaires' ),
            'search_items' => __( 'Chercher un partenaire' ),
            'not_found_in_trash' => __( 'Partenaire non trouvé dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Tous les partenaires' ),
            'archives' => __( 'Archive partenaires' ),
            'attributes'  => __( 'Propriétés partenaire' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image mise en avant partenaire' ),
            'set_featured_image' => __( 'Ajouter image mise en avant partenaire' ),
            'remove_featured_image' => __( 'Supprimer image mise en avant partenaire' ),
            'use_featured_image' => __( 'Utiliser image mise en avant partenaire' ),
            'menu_name' => __( 'Partenaire' ),
            'filter_items_list' => __( 'Partenaire' ),
            'items_list_navigation' => __( 'Partenaire' ),
            'items_list' => __( 'Partenaire' ),
            'name_admin_bar' => __( 'Ajouter un partenaire' )
        ),
        'description' => 'Dossier des partenaires',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'partenaire'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position'=> 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_collaboration.png',
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
    * ARTISTE INVITÉ
    *************************************************************************/

    register_post_type( 'artiste_invite', array(
        'labels' => array(
            'name' => __( 'Artiste invité' ),
            'singular_name' => __( 'Artiste invité' ),
            'add_new' => __( 'Ajouter  un artiste invité' ),
            'add_new_item' => __( 'Ajouter un artiste invité' ),
            'edit_item' => __( 'Modifier un artiste invité' ),
            'new_item' => __( 'Nouvel artiste invité' ),
            'view_item' => __( 'Voir un artiste invité' ),
            'view_items' => __( 'Voir les artistes invités' ),
            'search_items' => __( 'Chercher un artiste invité' ),
            'not_found_in_trash' => __( 'Artiste invité non trouvé dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Tous les artistes invités' ),
            'archives' => __( 'Archive artistes invités' ),
            'attributes'  => __( 'Propriétés artiste invité' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image mise en avant artiste invité' ),
            'set_featured_image' => __( 'Ajouter image mise en avant artiste invité' ),
            'remove_featured_image' => __( 'Supprimer image mise en avant artiste invité' ),
            'use_featured_image' => __( 'Utiliser image mise en avant artiste invité' ),
            'menu_name' => __( 'Artiste invité' ),
            'filter_items_list' => __( 'Artiste invité' ),
            'items_list_navigation' => __( 'Artiste invité' ),
            'items_list' => __( 'Artiste invité' ),
            'name_admin_bar' => __( 'Ajouter un artiste invité' )
        ),
        'description' => 'Dossier des artistes invité',
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