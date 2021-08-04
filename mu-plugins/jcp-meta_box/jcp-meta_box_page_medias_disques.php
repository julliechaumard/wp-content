<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_medias_disques() {
    global $post;
    if ( 'page-templates/page-mediatheque_disques.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_medias_disques',
            'LES VIDÉOS',
            'metabox_page_medias_disques',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_medias_disques($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_780 = get_post_meta( $post->ID, 'metadata_780', true );
    $metadata_781 = get_post_meta( $post->ID, 'metadata_781', true );
    for ($i = 1; $i <= 15; $i++) {
        $metadata_782_[$i] = get_post_meta( $post->ID, 'metadata_782_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_783_[$i] = get_post_meta( $post->ID, 'metadata_783_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_784_[$i] = get_post_meta( $post->ID, 'metadata_784_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_785_[$i] = get_post_meta( $post->ID, 'metadata_785_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_786_[$i] = get_post_meta( $post->ID, 'metadata_786_'.$i.'', true );
    }



    /************************************************************************
    // SAISIE DES INFORMATIONS
    *************************************************************************/

    //Afficher le numéro identifiant de l'article
    echo '<p class="identifiant"> Identifiant article : ', $post->ID, '</p>';
    ?>
    
    <!-- --------------------- -->
    <!-- ACCROCHE -->
    <!-- --------------------- -->
    <section class='metagroup'>
        <!-- ACCROCHE DE LA PAGE -->
        <h2>ACCROCHE BANNIÈRE</h2>
        <div class='metagroup_sub'>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_780">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_780" id="metadata_780" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_780; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_781">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_781" id="metadata_781" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_781; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>


    <!-- --------------------- -->
    <!-- THEME 1 à 5-->
    <!-- --------------------- -->

    <!-- i = thème -->
    <!-- j = photo -->

        <section class='metagroup'>
            
            <h2>LES DISQUES</h2>
            
            <div class='metagroup_sub'>
                
                <?php for ($i = 1; $i <= 15; $i++) : ?>

                    <div class='metagroup_sub_items grid_3fr_simple'>

                            <!-- TITRE DU DISQUE -->
                            <div class="pinput">
                                <label for="metadata_782_<?php echo $i; ?>">TITRE DU DISQUE <?php echo $i; ?></label>
                                <input type="text" name="metadata_782_<?php echo $i; ?>" id="metadata_782_<?php echo $i; ?>" placeholder='en MAJUSCULE' value="<?php echo $metadata_782_[$i]; ?>"/>
                            </div>

                            <!-- ARTISTES DU DISQUE -->
                            <div>
                                <div class="pinput">
                                    <label for="metadata_783_<?php echo $i; ?>">ARTISTES DU DISQUE <?php echo $i; ?></label>
                                    <textarea name="metadata_783" id="metadata_783" cols="50" rows="4" placeholder="<br> pour saut de ligne"><?php echo $metadata_783; ?></textarea>
                                </div>     
                            </div>

                            <!-- PROGRAMMES DU DISQUE -->
                            <div>
                                <div class="pinput">
                                    <label for="metadata_784_<?php echo $i; ?>">PROGRAMMES DU DISQUE <?php echo $i; ?></label>
                                    <textarea name="metadata_784" id="metadata_784" cols="50" rows="4" placeholder="<br> pour saut de ligne"><?php echo $metadata_784; ?></textarea>
                                </div>     
                            </div>

                    </div>
             
                    <div class='metagroup_sub_items grid_3fr_simple'>

                            <!-- EXTRAIT AUDIO -->
                            <div class="pinput">
                                <label for="metadata_786_<?php echo $i; ?>">EXTRAIT AUDIO <?php echo $i; ?></label>
                                <input type="text" name="metadata_786_<?php echo $i; ?>" id="metadata_786_<?php echo $i; ?>" placeholder='' value="<?php echo $metadata_786_[$i]; ?>"/>
                            </div>

                            <!-- INFORMATIONS DIVERSES -->
                            <div>
                                <div class="pinput">
                                    <label for="metadata_785_<?php echo $i; ?>">INFORMATIONS DIVERSES <?php echo $i; ?></label>
                                    <textarea name="metadata_785" id="metadata_785" cols="50" rows="4" placeholder="<br> pour saut de ligne"><?php echo $metadata_785; ?></textarea>
                                </div>     
                            </div>



                    </div>                    

                <?php endfor; ?>
                
            </div>


        </section>


    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_medias_disques($post_id) {
    
    if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_780', $_POST)) { update_post_meta( $post_id, 'metadata_780', $_POST['metadata_780']);};
    if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_781', $_POST)) { update_post_meta( $post_id, 'metadata_781', $_POST['metadata_781']);};

    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_782_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_782_'.$i.'', $_POST['metadata_782_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_783_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_783_'.$i.'', $_POST['metadata_783_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_784_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_784_'.$i.'', $_POST['metadata_784_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_785_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_785_'.$i.'', $_POST['metadata_785_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_disques.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_786_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_786_'.$i.'', $_POST['metadata_786_'.$i.'']);};
    }


}

?>