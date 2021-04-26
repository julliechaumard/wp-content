<?php
/*
Template Name: page_soutenez_picardissimo
*/
?>
<?php

 get_header();

?>
<main>
<?php

$pagename = get_post_meta($post->ID, '_wp_page_template', true);
echo $pagename;
$identifiant = get_post_type($post->post_title);
echo '<br>';
echo $identifiant;
echo '<br>';
if ( 'page-templates/page-agenda.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
    echo 'true';
}
echo '<br>';
echo $post->post_title;
echo '<br>';
global $post;
echo $post_id;
echo '<br>';
print_r ($post);
echo '<br>';
$juju = $_POST['metadata_100'];
echo 'variable juju = ';
echo $juju;

?>


</main>


<?php
 get_footer();
?>

