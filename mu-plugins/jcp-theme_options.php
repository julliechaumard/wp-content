<?php  

/**
 * Custom Functions plugin for WordPress
 *
 * @package   theme_options
 * @author    Julie Chaumard <juliechaumard@icloud.com>
 * @copyright 2020 Julie Chaumard
 * @license   GPL v2 or later
 *
 * Plugin Name:  Options du thème
 * Description:  Plugin pour ajouter des options au thème.(theme_options)
 * Version:      1
 * Plugin URI:   https://www.juliechaumard.paris
 * Author:       Julie Chaumard
 * Author URI:   https://www.juliechaumard.paris
 * Text Domain:  theme_options
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


/************************************************************************
* Les options
* Saisir des contenus généraux
*
* Pour récupérer le contenu d'un champ :
* get_option('nom_du_champ')
*
*************************************************************************/



/************************************************************************
* Créer le menu dans la side bar de l'admin WP
*************************************************************************/
add_action('admin_menu', 'create_menu_options');
function create_menu_options() {
	//create new top-level menu
	add_menu_page('Option du thème', 'Options thème', 'publish_pages', "options-du-theme", 'optionstheme' );
}

/************************************************************************
* Hook pour la sauvegarde des données dans la table xx_options
*************************************************************************/
//hook register settings function
add_action( 'admin_init', 'register_options' );

// register_setting( ['nom du groupe'], ['nom du champ'] );
function register_options() {

	register_setting( 'options-settings-group', 'saison_en_cours' );

}

// donner permission to save a editor (ne fonctionne pas)
add_filter( 'option_page_capability_options-settings-group', 'change_capability' );
function change_capability( $capability ) {
    return 'publish_pages';
}
// donner permission to save a editor - solution 2 (ne fonctionne pas)
apply_filters( "option_page_capability_options-settings-group", 'publish_pages' );

/************************************************************************
* Créer le formulaire avec les informations
*************************************************************************/

function optionstheme() {
?>
	<div class="wrap">
		<h1>Les options du thème</h1>
		<br>
		<h2>Rappels des informations sur le site Wordpress : </h2>

		<p><strong style="margin-right: 10px;">Nom du site :</strong> <?php echo get_option( 'blogname' ); ?></p>
		<p><strong style="margin-right: 10px;">Description du site :</strong> <?php echo get_option( 'blogdescription' ); ?></p>
		<p><strong style="margin-right: 10px;">Email Administrateur :</strong> <?php echo get_option( 'admin_email' ); ?></p>
		<p><strong style="margin-right: 10px;">Charset :</strong> <?php echo get_option( 'blog_charset' ); ?></p>
		<p><strong style="margin-right: 10px;">Format date :</strong> <?php echo get_option( 'date_format' ); ?></p>
		<p><strong style="margin-right: 10px;">Adresse de la page d'accueil :</strong> <?php echo get_option( 'home' ); ?></p>
		<p><strong style="margin-right: 10px;">Adresse du site :</strong> <?php echo get_option( 'siteurl' ); ?></p>
		<p><strong style="margin-right: 10px;">Nom du modèle du thème :</strong> <?php echo get_option( 'template' ); ?></p>

		<br>
		<hr>
		<br>
		<h2>Les informations que vous pouvez personnaliser ici : </h2>
		<!-- formulaire en HTML -->
		<form method="post" action="options.php">
			<?php settings_fields( 'options-settings-group' ); ?>
			<?php do_settings_sections( 'options-settings-group' ); ?>

			<table class="form-table">
				<tr valign="top">
					<th scope="row">Saison en cours</th>
					<td><input type="text" name="saison_en_cours" value="<?php echo esc_attr( get_option('saison_en_cours') ); ?>" /></td>
				</tr>
			</table>
			
			<?php submit_button(); ?>

		</form>
	</div>
<?php } 

 /* Your code goes above here. */  
 
 ?>