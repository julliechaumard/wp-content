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
* L'ORCHESTRE
* RECRUTEMENT
* ACTUALITÉ
* ACTION CULTURELLE
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
            'featured_image' => __( 'Image bannière concert' ),
            'set_featured_image' => __( 'Ajouter image bannière concert' ),
            'remove_featured_image' => __( 'Supprimer image bannière concert' ),
            'use_featured_image' => __( 'Utiliser image bannière concert' ),
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
        'menu_position'=> 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_concert.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'can_export' => true,
        'delete_with_user' => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        // supprimer les droits sur previeuw et permalien
        'publicly_queryable' => true
    ));

    /************************************************************************
    * ACTUALITÉ
    *************************************************************************/

    register_post_type( 'actualite', array(
        'labels' => array(
            'name' => __( 'Actualité' ),
            'singular_name' => __( 'Actualité' ),
            'add_new' => __( 'Ajouter  une actualité' ),
            'add_new_item' => __( 'Ajouter une actualité' ),
            'edit_item' => __( 'Modifier une actualité' ),
            'new_item' => __( 'Nouvelle actualité' ),
            'view_item' => __( 'Voir une actualité' ),
            'view_items' => __( 'Voir les actualités' ),
            'search_items' => __( 'Chercher une actualité' ),
            'not_found_in_trash' => __( 'Actualité non trouvée dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Toutes les actualités' ),
            'archives' => __( 'Archive actualités' ),
            'attributes'  => __( 'Propriétés actualité' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image bannière actualité' ),
            'set_featured_image' => __( 'Ajouter image bannière actualité' ),
            'remove_featured_image' => __( 'Supprimer image bannière actualité' ),
            'use_featured_image' => __( 'Utiliser image bannière actualité' ),
            'menu_name' => __( 'Actualité' ),
            'filter_items_list' => __( 'Actualité' ),
            'items_list_navigation' => __( 'Actualité' ),
            'items_list' => __( 'Actualité' ),
            'name_admin_bar' => __( 'Ajouter une actualité' )
        ),
        'description' => 'Dossier des actualités',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'actualite'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position'=> 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_coulisse.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
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
            'featured_image' => __( 'Image bannière salle' ),
            'set_featured_image' => __( 'Ajouter image bannière salle' ),
            'remove_featured_image' => __( 'Supprimer image bannière salle' ),
            'use_featured_image' => __( 'Utiliser image bannière salle' ),
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
        'menu_position'=> 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_lieu.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
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
            'featured_image' => __( 'Image bannière partenaire' ),
            'set_featured_image' => __( 'Ajouter image bannière partenaire' ),
            'remove_featured_image' => __( 'Supprimer image bannière partenaire' ),
            'use_featured_image' => __( 'Utiliser image bannière partenaire' ),
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
        'menu_position'=> 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_collaboration.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
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
            'featured_image' => __( 'Image bannière artiste invité' ),
            'set_featured_image' => __( 'Ajouter image bannière artiste invité' ),
            'remove_featured_image' => __( 'Supprimer image bannière artiste invité' ),
            'use_featured_image' => __( 'Utiliser image bannière artiste invité' ),
            'menu_name' => __( 'Artiste invité' ),
            'filter_items_list' => __( 'Artiste invité' ),
            'items_list_navigation' => __( 'Artiste invité' ),
            'items_list' => __( 'Artiste invité' ),
            'name_admin_bar' => __( 'Ajouter un artiste invité' )
        ),
        'description' => 'Dossier des artistes invité',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'artiste_invite'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position' => 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_artiste_vert.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'can_export' => true,
        'delete_with_user' => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        // supprimer les droits sur previeuw et permalien
        'publicly_queryable' => true
    ));

    /************************************************************************
    * ACTION CULTURELLE
    *************************************************************************/

    register_post_type( 'cultureaction', array(
        'labels' => array(
            'name' => __( 'Actions culturelles' ),
            'singular_name' => __( 'Action culturelle' ),
            'add_new' => __( 'Ajouter  une action culturelle' ),
            'add_new_item' => __( 'Ajouter une action culturelle' ),
            'edit_item' => __( 'Modifier une action culturelle' ),
            'new_item' => __( 'Nouvelle action culturelle' ),
            'view_item' => __( 'Voir une action culturelle' ),
            'view_items' => __( 'Voir les actions culturelles' ),
            'search_items' => __( 'Chercher une action culturelle' ),
            'not_found_in_trash' => __( 'Action culturelle non trouvée dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Toutes les actions culturelles' ),
            'archives' => __( 'Archive actions culturelles' ),
            'attributes'  => __( 'Propriétés action culturelle' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image bannière action culturelle' ),
            'set_featured_image' => __( 'Ajouter image bannière action culturelle' ),
            'remove_featured_image' => __( 'Supprimer image bannière action culturelle' ),
            'use_featured_image' => __( 'Utiliser image bannière action culturelle' ),
            'menu_name' => __( 'Culture Action' ), //NOM dans le menu Backoffice
            'filter_items_list' => __( 'action culturelle' ),
            'items_list_navigation' => __( 'action culturelle' ),
            'items_list' => __( 'action culturelle' ),
            'name_admin_bar' => __( 'Ajouter une action culturelle' )
        ),
        'description' => 'Action culturelle',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'action_culturelle'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position'=> 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_education.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'can_export' => true,
        'delete_with_user' => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        // supprimer les droits sur previeuw et permalien
        'publicly_queryable' => true
    ));

    /************************************************************************
    * L'ORCHESTRE
    *************************************************************************/

    register_post_type( 'orchestre', array(
        'labels' => array(
            'name' => __( 'Orchestre' ),
            'singular_name' => __( 'Orchestre' ),
            'add_new' => __( 'Ajouter  un membre de l\'orchestre' ),
            'add_new_item' => __( 'Ajouter un membre de l\'orchestre' ),
            'edit_item' => __( 'Modifier un membre de l\'orchestre' ),
            'new_item' => __( 'Nouveau membre de l\'orchestre' ),
            'view_item' => __( 'Voir un membre de l\'orchestre' ),
            'view_items' => __( 'Voir les membres de l\'orchestre' ),
            'search_items' => __( 'Chercher un membre de l\'orchestre' ),
            'not_found_in_trash' => __( 'Membre de l\'orchestre non trouvé dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Tous les membres de l\'orchestre' ),
            'archives' => __( 'Archive orchestre' ),
            'attributes'  => __( 'Propriétés orchestre' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image bannière membre de l\'orchestre' ),
            'set_featured_image' => __( 'Ajouter image bannière membre de l\'orchestre' ),
            'remove_featured_image' => __( 'Supprimer image bannière membre de l\'orchestre' ),
            'use_featured_image' => __( 'Utiliser image bannière membre de l\'orchestre' ),
            'menu_name' => __( 'Orchestre' ),
            'filter_items_list' => __( 'Orchestre' ),
            'items_list_navigation' => __( 'Orchestre' ),
            'items_list' => __( 'Orchestre' ),
            'name_admin_bar' => __( 'Ajouter un Orchestre' )
        ),
        'description' => 'Dossier des membres de l\'orchestre',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'orchestre'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position' => 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_artiste_bleu.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'can_export' => true,
        'delete_with_user' => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        // supprimer les droits sur previeuw et permalien
        'publicly_queryable' => true
    ));


    /************************************************************************
    * RECRUTEMENT
    *************************************************************************/

    register_post_type( 'recrutement', array(
        'labels' => array(
            'name' => __( 'Recrutement' ),
            'singular_name' => __( 'Recrutement' ),
            'add_new' => __( 'Ajouter  une annonce de recrutement' ),
            'add_new_item' => __( 'Ajouter une annonce de recrutement' ),
            'edit_item' => __( 'Modifier une annonce de recrutement' ),
            'new_item' => __( 'Nouvelle annonce de recrutement' ),
            'view_item' => __( 'Voir une annonce de recrutement' ),
            'view_items' => __( 'Voir les annonces de recrutement' ),
            'search_items' => __( 'Chercher une annonce de recrutement' ),
            'not_found_in_trash' => __( 'Annonce de recrutement non trouvée dans la corbeille' ),
            'parent_item_colon' => __( 'Retour' ),
            'all_items' => __( 'Toutes les annonces de recrutement' ),
            'archives' => __( 'Archive recrutement' ),
            'attributes'  => __( 'Propriétés recrutement' ),
            'insert_into_item' => __( 'Ajouter' ),
            'uploaded_to_this_item' => __( 'Télécharger' ),
            'featured_image' => __( 'Image bannière annonce de recrutement' ),
            'set_featured_image' => __( 'Ajouter image bannière annonce de recrutement' ),
            'remove_featured_image' => __( 'Supprimer image bannière annonce de recrutement' ),
            'use_featured_image' => __( 'Utiliser image bannière annonce de recrutement' ),
            'menu_name' => __( 'Recrutement' ),
            'filter_items_list' => __( 'Recrutement' ),
            'items_list_navigation' => __( 'Recrutement' ),
            'items_list' => __( 'Recrutement' ),
            'name_admin_bar' => __( 'Ajouter une annonce de recrutement' )
        ),
        'description' => 'Dossier des annonces de recrutement',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'recrutement'),
        //The value of five puts it below Posts and 100 puts it below Settings. 
        'show_in_menu' => true,
        'menu_position' => 3,
        'menu_icon' => get_stylesheet_directory_uri() . '/dist/assets/images/icones/cpt_icone_project.png',
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'can_export' => true,
        'delete_with_user' => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        // supprimer les droits sur previeuw et permalien
        'publicly_queryable' => true
    ));




}   

?>