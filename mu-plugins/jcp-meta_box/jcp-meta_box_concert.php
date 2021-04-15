<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_concert() {
 
	add_meta_box(
		'metabox_concert',
		'Informations concert',
		'metabox_concert',
		'concert',
		'normal',
		'default'
	);
 
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/




function metabox_concert($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    for ($i = 1; $i <= 10; $i++) {
        $metadata_180_[$i] = get_post_meta( $post->ID, 'metadata_180_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_181_[$i] = get_post_meta( $post->ID, 'metadata_181_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_182_[$i] = get_post_meta( $post->ID, 'metadata_182_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_183_[$i] = get_post_meta( $post->ID, 'metadata_183_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_184_[$i] = get_post_meta( $post->ID, 'metadata_184_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 5; $j++) {  
            ${"metadata_185_[$i]_$j"} = get_post_meta( $post->ID, 'metadata_185_'.$i.'_'.$j.'', true );  
        }
    }
    for ($i = 1; $i <= 30; $i++) {
        $metadata_186_[$i] = get_post_meta( $post->ID, 'metadata_186_'.$i.'', true );
    }
    for ($i = 1; $i <= 30; $i++) {
        $metadata_187_[$i] = get_post_meta( $post->ID, 'metadata_187_'.$i.'', true );
    }
    $metadata_188 = get_post_meta( $post->ID, 'metadata_188', true );
    $metadata_189 = get_post_meta( $post->ID, 'metadata_189', true );
    for ($i = 1; $i <= 15; $i++) {
        $metadata_190_[$i] = get_post_meta( $post->ID, 'metadata_190_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_191_[$i] = get_post_meta( $post->ID, 'metadata_191_'.$i.'', true );
    }
    for ($i = 1; $i <= 10; $i++) {
        $metadata_192_[$i] = get_post_meta( $post->ID, 'metadata_192_'.$i.'', true );
    }
    $metadata_193 = get_post_meta( $post->ID, 'metadata_193', true );
    for ($i = 1; $i <= 20; $i++) {
        $metadata_194_[$i] = get_post_meta( $post->ID, 'metadata_194_'.$i.'', true );
    }
    for ($i = 1; $i <= 20; $i++) {
        $metadata_195_[$i] = get_post_meta( $post->ID, 'metadata_195_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_196_[$i] = get_post_meta( $post->ID, 'metadata_196_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_197_[$i] = get_post_meta( $post->ID, 'metadata_197_'.$i.'', true );
    }
    for ($i = 1; $i <= 3; $i++) {
        $metadata_198_[$i] = get_post_meta( $post->ID, 'metadata_198_'.$i.'', true );
    }
    $metadata_199 = get_post_meta( $post->ID, 'metadata_199', true );
    $metadata_200 = get_post_meta( $post->ID, 'metadata_200', true );
    $metadata_201 = get_post_meta( $post->ID, 'metadata_201', true );

    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    
    <!-- --------------------- -->
    <!-- GROUPE DATES ET LIEUX -->
    <div class='metagroup'>
        <h2>DATES ET LIEUX</h2>

        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <div class='metagroup_sub'>
                <h3>REPRÉSENTATION <?php echo $i; ?></h3>
                <div class='metagroup_sub_items'>
                    <!-- DATE -->
                    <div class="date pinput">
                        <label for="metadata_180_<?php echo $i; ?>">Date</label>
                        <input type="date" name="metadata_180_<?php echo $i; ?>" id="metadata_180_<?php echo $i; ?>" value="<?php echo $metadata_180_[$i]; ?>"/>
                    </div>
                
                    <!-- HEURE -->
                    <div class="heure pinput">
                        <label for="metadata_181_<?php echo $i; ?>">Heure</label>
                        <input type="text" name="metadata_181_<?php echo $i; ?>" id="metadata_181_<?php echo $i; ?>" value="<?php echo $metadata_181_[$i]; ?>"/>
                    </div>

                    <!-- VILLE -->
                    <div class="ville pinput">
                        <label for="metadata_182_<?php echo $i; ?>">Choisir la salle de concert</label>
                        <input type="text" name="metadata_182_<?php echo $i; ?>" id="metadata_182_<?php echo $i; ?>" value="<?php echo $metadata_182_[$i]; ?>"/>
                    </div>

                    <!-- CONCERT ANNULÉ -->
                    <div class="pinput annule">
                        <label for="metadata_183_<?php echo $i; ?>">Concert annulé (saisir "annul")</label>
                        <input type="text" name="metadata_183_<?php echo $i; ?>" id="metadata_183_<?php echo $i; ?>" value="<?php echo $metadata_183_[$i]; ?>"/>
                    </div>

                    <!-- CONCERT REPORTÉ -->
                    <div class="pinput report">
                        <label for="metadata_184_<?php echo $i; ?>">Concert reporté (saisir "report")</label>
                        <input type="text" name="metadata_184_<?php echo $i; ?>" id="metadata_184_<?php echo $i; ?>" value="<?php echo $metadata_184_[$i]; ?>"/>
                    </div>

                    <!-- TARIF-->
                    <div class='metagroup_sub_sub tarif'>
                        <?php for ($j = 1; $j <= 5; $j++) { ?>
                            <p class=" tarif_item_<?php echo $j; ?> pinput">
                                <label for="metadata_185_<?php echo $i; ?>_<?php echo $j; ?>">Tarif <?php echo $j; ?></label>
                                <input type="text" name="metadata_185_<?php echo $i; ?>_<?php echo $j; ?>" id="metadata_185_<?php echo $i; ?>_<?php echo $j; ?>" value="<?php echo ${"metadata_185_[$i]_$j"}; ?>"/>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>




    </div>


    <?php


}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_concert($post_id) {

    // metadata_001
    if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_001', $_POST)) { update_post_meta( $post_id, 'metadata_001', $_POST['metadata_001']);};
    if (isset($_POST['metadata_001'])) {if (empty($_POST['metadata_001'])) {delete_post_meta($post_id, 'metadata_001');}}

    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_180_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_180_'.$i.'', $_POST['metadata_180_'.$i.'']);};
        if (isset($_POST['metadata_180_'.$i.''])) {if (empty($_POST['metadata_180_'.$i.''])) {delete_post_meta($post_id, 'metadata_180_'.$i.'');}}
    }
    for ($i = 1; $i <= 10; $i++) {
        if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_181_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_181_'.$i.'', $_POST['metadata_181_'.$i.'']);};
        if (isset($_POST['metadata_181_'.$i.''])) {if (empty($_POST['metadata_181_'.$i.''])) {delete_post_meta($post_id, 'metadata_181_'.$i.'');}}
    }



    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <=5; $j++) {  

            if (get_post_type($post_id) == 'concert' && array_key_exists('metadata_185_'.$i.'_'.$j.'', $_POST)) { update_post_meta( $post_id, 'metadata_185_'.$i.'_'.$j.'', $_POST['metadata_185_'.$i.'_'.$j.'']);};
            if (isset($_POST['metadata_185_'.$i.'_'.$j.''])) {if (empty($_POST['metadata_185_'.$i.'_'.$j.''])) {delete_post_meta($post_id, 'metadata_185_'.$i.'_'.$j.'');}}


        }
    }

}

?>