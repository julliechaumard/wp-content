<?php  

/**
 * Menus plugin for WordPress
 *
 * @package   Menus
 * @author    Julie Chaumard <juliechaumard@icloud.com>
 * @copyright 2020 Julie Chaumard
 * @license   GPL v2 or later
 *
 * Plugin Name:  Menus
 * Description:  Plugin pour les Menus.
 * Version:      1
 * Plugin URI:   https://www.juliechaumard.paris
 * Author:       Julie Chaumard
 * Author URI:   https://www.juliechaumard.paris
 * Text Domain:  Menus
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

/**  MENU
* Ajout du module "Menu" dans la panneau WP Apparence
* Ajout des menus
*/
add_action('init', 'jcp_register_my_menus' );

function jcp_register_my_menus() {
  register_nav_menus( array(
    'menu-principal' => 'Menu principal',
    'menu-secondaire' => 'Menu secondaire',
    'menu-footer' => 'Menu footer',
  ));
}

 /* Your code goes above here. */  
 
 ?>