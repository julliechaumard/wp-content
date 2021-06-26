<?php
/**
* head
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- 
Vous regardez dans mon code ;) N'hésitez pas à communiquer avec moi
et discuter du codage, webdesign... ;)
Et aussi vos commentaires ;)
A bientôt ! contact at juliechaumard dot paris
ou juliechaumard sur Linkedin
-->
<!-- Testé sur les navigrateurs
Firefox
Safari
Chrome
-->
<head>

  <!-- IE interdire mode de compatibilité -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
  <!-- Encodage -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <!-- Moteur de recherche indexation -->
  <meta name="robots" content="all" />
  
  <!-- Taille écran étalonnage -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <!-- Description -->
  <?php if(is_front_page()): ?>
    <meta name="description" content="Orchestre de Picardie - Accueil">
  <?php endif; ?>
  <?php if(is_archive('concert')): ?>
    <meta name="description" content="Agenda de l'Orchestre de Picardie">
  <?php endif; ?>
  <?php if(is_archive('l\'orchestre')): ?>
    <meta name="description" content="l'Orchestre de Picardie - les musiciens">
  <?php endif; ?>
  <?php if(is_singular('concert')): ?>
    <meta name="description" content="Concert, <?php the_title(); ?>, par l'Orchestre de Picardie">
  <?php endif; ?>

  <!-- mots-clés -->
  <meta name="keywords" content="orchestre, amiens, spectacle, picardie, concert" />

  <!-- Auteur / Créateur / Publication -->
  <link rel="author" href="mailto:juliechaumard@icloud.com" title="JulieChaumard.paris" />
  <meta name="creator" content="JulieChaumard.paris">
  <meta name="publisher" content="Orchestre de Picardie">

  <!-- Page accueil -->
  <link rel="start" href="http://localhost:8888/" />

  <!-- Logiciel utilisé pour créer la page -->
  <meta name="generator" content="Visual Studio code" />

  <!-- Géolocalisation -->
  <meta name="DC.title" content="Orchestre de Picardie" />
  <meta name="geo.region" content="FR-80" />
  <meta name="geo.placename" content="Amiens" />
  <meta name="geo.position" content="49.894067;2.295753" />
  <meta name="ICBM" content="49.894067, 2.295753" />

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="fr_FR">
  <meta property="og:title" content="Orchestre de Picardie">
  <meta property="og:description" content="Les concerts de l'Orchestre de Picardie">
  <meta property="og:url" content="https://www.orchestredepicardie.fr/">
  <meta property="og:image" content="https://www.orchestredepicardie.fr/wp-content/uploads/2021/06/illustration_partage_reseaux_sociaux.jpg">
  <meta property="og:image:alt" content="Illustration du site">

  <!-- CSS -->
  <link href="<?php bloginfo('template_directory');?>/dist/assets/css/app.css" rel="stylesheet">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/ef8b87052e.js" crossorigin="anonymous"></script>
	
  <!-- To warn any users that have JavaScript disabled that your page relies on JavaScript -->
	<noscript>
	  <p><strong>Cette page requiert que JavaScript soit activé pour fonctionner correctement. / This web page requires JavaScript to be enabled.</strong></p>
	  <p>JavaScript is an object-oriented computer programming language 
	    commonly used to create interactive effects within web browsers.</p>
	  <p><a href="https://goo.gl/koeeaJ">How to enable JavaScript?</a></p>
	</noscript>

  <!-- Head généré par WP -->
  <!-- title -->
  <!-- jquery -->
  <?php wp_head(); ?>

</head>
