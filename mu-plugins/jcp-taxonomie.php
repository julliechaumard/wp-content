<?php

/**
 * Taxonomy Function plugin for WordPress
 *
 * @package   taxonomy
 * @author    Julie Chaumard <juliechaumard@icloud.com>
 * @copyright 2020 Julie Chaumard
 * @license   GPL v2 or later
 *
 * Plugin Name:  Taxonomie
 * Description:  Plugin pour créer des taxonomies personnalisées pour les posts/fiches.
 * Version:      1
 * Plugin URI:   https://www.juliechaumard.paris
 * Author:       Julie Chaumard
 * Author URI:   https://www.juliechaumard.paris
 * Text Domain:  taxonomy
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



/** Taxonmoies
* 
*/

/************************************************************************
* HOOK
*************************************************************************/

add_action( 'init', 'jcp_create_taxonomies', 0 );

function jcp_create_taxonomies() {

    ///////////////////////////////////////////////////////////////////////////////
    /// POST CONCERT
    ///////////////////////////////////////////////////////////////////////////////

    // Saison (concert)
    $labels = array(
        'name'  => 'Saison',
        'singular_name' => 'Saison',
        'search_items'  => 'Rechercher saison',
        'popular_items' => 'Saisons populaires',
        'all_items' => 'Toutes les saisons',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer saison',
        'update_item' => 'Mettre à jour saison',
        'add_new_item'  => 'Ajouter nouvelle saison',
        'new_item_name' => 'Nom nouvelle saison',
        'separate_items_with_commas' => 'Separer les saisons par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer saison',
        'choose_from_most_used' => 'Rechercher les saisons les plus utilisées',
        'menu_name' => 'Etiquette saison'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'saison' ),
    );
    register_taxonomy( 'saison', array('concert'), $args );

    // Actu (concert)
    $labels = array(
        'name'  => 'Actualité',
        'singular_name' => 'Actualité',
        'search_items'  => 'Rechercher actualité',
        'popular_items' => 'Actualités populaires',
        'all_items' => 'Toutes les actualités',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer actualité',
        'update_item' => 'Mettre à jour actualité',
        'add_new_item'  => 'Ajouter nouvel emplacement d\'actualité',
        'new_item_name' => 'Nom nouvelle actualité',
        'separate_items_with_commas' => 'Separer les actualités par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer actualité',
        'choose_from_most_used' => 'Rechercher les actualités les plus utilisées',
        'menu_name' => 'Etiquette actualité'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'actualite' ),
    );
    register_taxonomy( 'actualite', array('concert'), $args );

    // Genre (concert)
    $labels = array(
        'name'  => 'Genre',
        'singular_name' => 'Genre',
        'search_items'  => 'Rechercher genre',
        'popular_items' => 'Genres populaires',
        'all_items' => 'Tous les genres',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer genre',
        'update_item' => 'Mettre à jour genre',
        'add_new_item'  => 'Ajouter nouveau genre (type de concert)',
        'new_item_name' => 'Nom nouveau genre',
        'separate_items_with_commas' => 'Separer les genres par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer genre',
        'choose_from_most_used' => 'Rechercher les genres les plus utilisés',
        'menu_name' => 'Etiquette genre'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'genre' ),
    );
    register_taxonomy( 'genre', array('concert'), $args );

    // Action_culturelle (concert)
    $labels = array(
        'name'  => 'Action culturelle',
        'singular_name' => 'Action culturelle',
        'search_items'  => 'Rechercher action culturelle',
        'popular_items' => 'Actions culturelles populaires',
        'all_items' => 'Toutes les actions culturelles',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer action culturelle',
        'update_item' => 'Mettre à jour action culturelle',
        'add_new_item'  => 'Ajouter nouvelle catégorie d\'action culturelle',
        'new_item_name' => 'Nom nouvelle action culturelle',
        'separate_items_with_commas' => 'Separer les actions culturelles par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer action culturelle',
        'choose_from_most_used' => 'Rechercher les action culturelle les plus utilisées',
        'menu_name' => 'Etiquette action culturelle'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'action_culturelle' ),
    );
    register_taxonomy( 'action_culturelle', array('concert'), $args );


    ///////////////////////////////////////////////////////////////////////////////
    /// POST PARTENAIRE
    ///////////////////////////////////////////////////////////////////////////////

    // Saison (partenaire)
    $labels = array(
        'name'  => 'Saison',
        'singular_name' => 'Saison',
        'search_items'  => 'Rechercher saison',
        'popular_items' => 'Saisons populaires',
        'all_items' => 'Toutes les saisons',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer saison',
        'update_item' => 'Mettre à jour saison',
        'add_new_item'  => 'Ajouter nouvelle saison',
        'new_item_name' => 'Nom nouvelle saison',
        'separate_items_with_commas' => 'Separer les saisons par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer saison',
        'choose_from_most_used' => 'Rechercher les saisons les plus utilisées',
        'menu_name' => 'Etiquette saison'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'saison' ),
    );
    register_taxonomy( 'saison', array('partenaire'), $args );


    ///////////////////////////////////////////////////////////////////////////////
    /// POST ARTISTE INVITE
    ///////////////////////////////////////////////////////////////////////////////

    // Saison (Artiste invité)
    $labels = array(
        'name'  => 'Saison',
        'singular_name' => 'Saison',
        'search_items'  => 'Rechercher saison',
        'popular_items' => 'Saisons populaires',
        'all_items' => 'Toutes les saisons',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer saison',
        'update_item' => 'Mettre à jour saison',
        'add_new_item'  => 'Ajouter nouvelle saison',
        'new_item_name' => 'Nom nouvelle saison',
        'separate_items_with_commas' => 'Separer les saisons par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer saison',
        'choose_from_most_used' => 'Rechercher les saisons les plus utilisées',
        'menu_name' => 'Etiquette saison'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'saison' ),
    );
    register_taxonomy( 'artiste_invite', array('partenaire'), $args );

















}

?>

