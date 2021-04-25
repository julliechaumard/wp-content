<?php
/*
Template Name: page_collaborations
*/
?>
<?php

 get_header();

?>
<main>
<?php

$pagename = get_post_meta($post->ID, '_wp_page_template', true);
echo $pagename;
$identifiant = get_post_type($post->ID);
echo '<br>';
echo $identifiant;
echo '<br>';
if ( 'page-templates/page-agenda.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
    echo 'true';
}
echo '<br>';
echo $post->ID;
echo '<br>';
print_r ($_POST);

?>


</main>


<?php
 get_footer();
?>
