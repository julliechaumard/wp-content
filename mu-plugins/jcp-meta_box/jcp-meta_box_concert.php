<?php

/************************************************************************
* Ajouter les champs de saisie
* Pour le type de POST "concert"
*************************************************************************/




function metabox_concert($post) {

//Variables pour récupérer les valeurs existantes (s'il y en a)
$metadata_001 = get_post_meta( $post->ID, 'metadata_001', true );
$metadata_002 = get_post_meta( $post->ID, 'metadata_002', true );
$metadata_003 = get_post_meta( $post->ID, 'metadata_003', true );
$metadata_004 = get_post_meta( $post->ID, 'metadata_004', true );
$metadata_005 = get_post_meta( $post->ID, 'metadata_005', true );

//Afficher le numéro identifiant de l'article
echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>'

// metadata_001
?>
<p class="pinput">
  <label for="metadata_001" class="label">Information_1</label>
  <input type="text" name="metadata_001" id="metadata_001" value="<?php echo $metadata_001; ?>" class="input"/>
</p>
<?php

// metadata_002
?>
<p class="pinput">
  <label for="metadata_002" class="label">Information_2</label>
  <input type="text" name="metadata_002" id="metadata_002" value="<?php echo $metadata_002; ?>" class="input"/>
</p>

<?php


}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_concert($post_id) {

    // metadata_001
    if (get_post_type($post_id) == 'artiste' && array_key_exists('metadata_001', $_POST)) { update_post_meta( $post_id, 'metadata_001', $_POST['metadata_001']);};
    if (isset($_POST['metadata_001'])) {if (empty($_POST['metadata_001'])) {delete_post_meta($post_id, 'metadata_001');}}

    // metadata_002
    if (get_post_type($post_id) == 'artiste' && array_key_exists('metadata_002', $_POST)) { update_post_meta( $post_id, 'metadata_002', $_POST['metadata_002']);};
    if (isset($_POST['metadata_002'])) {if (empty($_POST['metadata_002'])) {delete_post_meta($post_id, 'metadata_002');}}

}

?>