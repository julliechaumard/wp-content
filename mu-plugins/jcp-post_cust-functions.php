<?php  

/**
 * Articles Functions plugin for WordPress
 *
 * @package   post_customizing
 * @author    Julie Chaumard <juliechaumard@icloud.com>
 * @copyright 2020 Julie Chaumard
 * @license   GPL v2 or later
 *
 * Plugin Name:  Fonctionnalités des posts
 * Description:  Plugin pour les fonctions personnalisées des articles et pages.(post_customizing)
 * Version:      1
 * Plugin URI:   https://www.juliechaumard.paris
 * Author:       Julie Chaumard
 * Author URI:   https://www.juliechaumard.paris
 * Text Domain:  Articles_Functions
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


/* Your code goes below here. */

add_action( 'init', 'jcp_remove_champs' );
add_action( 'intermediate_image_sizes_advanced', 'jcp_supprime_image_size');
add_action( 'admin_menu', 'remove_default_post_type' );
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );
add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );
add_action( 'after_setup_theme', 'jcp_thumbnails' );
add_action( 'after_setup_theme', 'jcp_title' );
add_filter('upload_mimes', 'add_file_types_to_uploads');

// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');

// Supprimer type d'article par défaut dans dashboard Brouillon rapide
function remove_draft_widget(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}

// Supprimer type d'article par défaut dans créer new admin bar vertical
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}
// Supprimer type d'article par défaut dans Side menu
// Supprimer le menu commentaire dans Side menu
function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}

// Suppression des champs personnalisés par défaut de WP (on a créé nos propres meta-données)
function jcp_remove_champs() {
  remove_post_type_support( 'post', 'custom-fields' );
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'post', 'author' );
}

// Personnalisation du nombre de mots dans l'extrait de l'articles
// 20 est le nombre de mots
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// supprimer "modification rapide" des articles car les meta données ne fonctionnent pas en mode rapide
// et c'est une source d'erreurs de saisie
function remove_quick_edit( $actions ) {
    unset($actions['inline hide-if-no-js']);
    return $actions;
}
add_filter('post_row_actions','remove_quick_edit',10,1);

// ajouter la fonction d'avoir la meta "title" dans head
function jcp_title() {
    add_theme_support('title-tag');
}

// ajouter la fonction "ajouter image mise en avant"
function jcp_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}

//ARRÊTER lE GENERATION AUTOMATIQUE D'IMAGES
function jcp_supprime_image_size($sizes) {
    unset($sizes['thumbnail']);    // disable thumbnail size
	unset($sizes['medium']);       // disable medium size
	unset($sizes['large']);        // disable large size
	unset($sizes['medium_large']); // disable medium-large size
	unset($sizes['1536x1536']);    // disable 2x medium-large size
	unset($sizes['2048x2048']);    // disable 2x large size
	
	return $sizes;
}

// permettre l'ajout d'image au formay SVG dans les médias
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
 
 ?>