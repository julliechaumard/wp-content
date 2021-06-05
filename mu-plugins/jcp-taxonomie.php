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

    // Saison
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
        'rewrite' => array( 'slug' => 'saison' )
    );
    register_taxonomy( 'saison', array('concert','partenaire','artiste_invite','actualite','cultureaction'), $args );

    // PLACEMENT
    $labels = array(
        'name'  => 'Placement',
        'singular_name' => 'Placement',
        'search_items'  => 'Rechercher placement',
        'popular_items' => 'Placements populaires',
        'all_items' => 'Tous les placements',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer placement',
        'update_item' => 'Mettre à jour placement',
        'add_new_item'  => 'Ajouter nouveau type placement',
        'new_item_name' => 'Nom nouveau placement',
        'separate_items_with_commas' => 'Separer les placements par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer placement',
        'choose_from_most_used' => 'Rechercher les placements les plus utilisées',
        'menu_name' => 'Etiquette placement'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'placement' )
    );
    register_taxonomy( 'placement', array('concert'), $args );

    // Genre
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
        'rewrite' => array( 'slug' => 'genre' )
    );
    register_taxonomy( 'genre', array('concert'), $args );

    // Action_culturelle
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
        'rewrite' => array( 'slug' => 'action_culturelle' )
    );
    register_taxonomy( 'action_culturelle', array('concert','cultureaction'), $args );

    // CATEGORIE PARTENAIRE
    $labels = array(
        'name'  => 'Catégorie partenaire',
        'singular_name' => 'Catégorie partenaire',
        'search_items'  => 'Rechercher catégorie partenaire',
        'popular_items' => 'Catégories partenaire populaires',
        'all_items' => 'Toutes les catégories partenaire',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer catégorie partenaire',
        'update_item' => 'Mettre à jour catégorie partenaire',
        'add_new_item'  => 'Ajouter nouvelle catégorie partenaire',
        'new_item_name' => 'Nom nouvelle catégorie partenaire',
        'separate_items_with_commas' => 'Separer les catégories partenaire par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer catégorie partenaire',
        'choose_from_most_used' => 'Rechercher les catégories partenaire les plus utilisées',
        'menu_name' => 'Etiquette catégorie partenaire'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'categorie_partenaire' )
    );
    register_taxonomy( 'categorie_partenaire', array('partenaire'), $args );

    // CATEGORIE ARTISTE INVITE
        $labels = array(
            'name'  => 'Catégorie artiste invité',
            'singular_name' => 'Catégorie artiste invité',
            'search_items'  => 'Rechercher catégorie artiste invité',
            'popular_items' => 'Catégories artiste invité populaires',
            'all_items' => 'Toutes les catégories artiste invité',
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => 'Editer catégorie artiste invité',
            'update_item' => 'Mettre à jour catégorie artiste invité',
            'add_new_item'  => 'Ajouter nouvelle catégorie artiste invité',
            'new_item_name' => 'Nom nouvelle catégorie artiste invité',
            'separate_items_with_commas' => 'Separer les catégories artiste invité par une virgule',
            'add_or_remove_items' => 'Ajouter ou supprimer catégorie artiste invité',
            'choose_from_most_used' => 'Rechercher les catégories artiste invité les plus utilisées',
            'menu_name' => 'Etiquette catégorie artiste invité'
        );
        $args = array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'categorie_artiste_invite' )
        );
        register_taxonomy( 'categorie_artiste_invite', array('artiste_invite'), $args );


    // CATEGORIE MEMBRE DE l'ORCHESTRE
    $labels = array(
        'name'  => 'Catégorie membre de l\'orchestre',
        'singular_name' => 'Catégorie membre de l\'orchestre',
        'search_items'  => 'Rechercher catégorie membre de l\'orchestre',
        'popular_items' => 'Catégories membre de l\'orchestre populaires',
        'all_items' => 'Toutes les catégories membre de l\'orchestre',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer catégorie membre de l\'orchestre',
        'update_item' => 'Mettre à jour catégorie membre de l\'orchestre',
        'add_new_item'  => 'Ajouter nouvelle catégorie membre de l\'orchestre',
        'new_item_name' => 'Nom nouvelle catégorie membre de l\'orchestre',
        'separate_items_with_commas' => 'Separer les catégories membre de l\'orchestre par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer catégorie membre de l\'orchestre',
        'choose_from_most_used' => 'Rechercher les catégories membre de l\'orchestre les plus utilisées',
        'menu_name' => 'Etiquette catégorie membre de l\'orchestre'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'categorie_orchestre' )
    );
    register_taxonomy( 'categorie_orchestre', array('orchestre'), $args );


    // CATEGORIE ACTUALITE
    $labels = array(
        'name'  => 'Catégorie actualité',
        'singular_name' => 'Catégorie actualité',
        'search_items'  => 'Rechercher catégorie actualité',
        'popular_items' => 'Catégories actualité populaires',
        'all_items' => 'Toutes les catégories actualité',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Editer catégorie actualité',
        'update_item' => 'Mettre à jour catégorie actualité',
        'add_new_item'  => 'Ajouter nouvelle catégorie actualité',
        'new_item_name' => 'Nom nouvelle catégorie actualité',
        'separate_items_with_commas' => 'Separer les catégories actualité par une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer catégorie actualité',
        'choose_from_most_used' => 'Rechercher les catégories actualité les plus utilisées',
        'menu_name' => 'Etiquette catégorie actualité'
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'categorie_actu' )
    );
    register_taxonomy( 'categorie_actu', array('actualite'), $args );

}

?>

