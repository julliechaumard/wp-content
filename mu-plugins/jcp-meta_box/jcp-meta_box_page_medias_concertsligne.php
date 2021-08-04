<?php

/************************************************************************
* Déclarer les box Metadata
*************************************************************************/

function jcp_declare_metabox_page_medias_concertsligne() {
    global $post;
    if ( 'page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box(
            'metabox_page_medias_concertsligne',
            'LES CONCERTS EN LIGNE',
            'metabox_page_medias_concertsligne',
            'page',
            'normal',
            'default'
        );
    }
}

/************************************************************************
* Ajouter les champs de saisie
*************************************************************************/


function metabox_page_medias_concertsligne($post) {
    /************************************************************************
    //Variables pour récupérer les valeurs existantes (s'il y en a)
    *************************************************************************/

    $metadata_720 = get_post_meta( $post->ID, 'metadata_720', true );
    $metadata_721 = get_post_meta( $post->ID, 'metadata_721', true );
    for ($i = 1; $i <= 15; $i++) {
        $metadata_722_[$i] = get_post_meta( $post->ID, 'metadata_722_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_723_[$i] = get_post_meta( $post->ID, 'metadata_723_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_724_[$i] = get_post_meta( $post->ID, 'metadata_724_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_725_[$i] = get_post_meta( $post->ID, 'metadata_725_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_726_[$i] = get_post_meta( $post->ID, 'metadata_726_'.$i.'', true );
    }
    for ($i = 1; $i <= 15; $i++) {
        $metadata_727_[$i] = get_post_meta( $post->ID, 'metadata_727_'.$i.'', true );
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
                        <label for="metadata_720">Accroche - Mots ligne1</label>
                        <input type="text" name="metadata_720" id="metadata_720" placeholder='1 à 3 mots en MAJUSCULE' value="<?php echo $metadata_720; ?>"/>
                    </div>     
            </div>
            <div class='metagroup_sub_items grid_3fr_simple'>
                    <div class="pinput">
                        <label for="metadata_721">Accroche - Mots ligne2+</label>
                        <textarea name="metadata_721" id="metadata_721" cols="50" rows="4" placeholder="276 caractères MAX avec espaces en tout  en MAJUSCULE"><?php echo $metadata_721; ?></textarea>
                    </div>     
            </div>
        </div>

    </section>


    <!-- --------------------- -->
    <!-- LES DIFFUSIONS -->
    <!-- --------------------- -->

        <section class='metagroup'>
            
            <!-- YOU TUBE -->

            <div class='metagroup'>
                <h2>VIDÉOS YOU TUBE</h2>
                <p><code>Commencer par remplir le concert 1.</code></p>
                <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($i = 1; $i <= 15; $i++) : ?>
                        <!-- TITRE CONCERT -->
                        <div class="pinput">
                            <label for="metadata_725_<?php echo $i; ?>">TITRE DU CONCERT <?php echo $i; ?></label>
                            <input type="text" name="metadata_725_<?php echo $i; ?>" id="metadata_725_<?php echo $i; ?>" placeholder='en MAJUSCULE' value="<?php echo $metadata_725_[$i]; ?>"/>
                        </div>
                        <!-- CODE YOUTUBE -->
                        <div class=''>
                            <div class="pinput">
                                <label for="metadata_722_<?php echo $i; ?>">Code vidéo You tube <?php echo $i; ?></label>
                                <input type="text" name="metadata_722_<?php echo $i; ?>" id="metadata_722_<?php echo $i; ?>" placeholder='' value="<?php echo $metadata_722_[$i]; ?>"/>
                            </div>     
                        </div>
                    <?php endfor; ?>
                </div>
                
            </div>
            
            <!-- POST FACEBOOK -->

            <div class='metagroup'>
                <h2>POSTS FACEBOOK</h2>
                <p><code>Pour récupérer l'URL d'un post Facebook, cliquez sur la date du post, puis copier l'URL qui se trouve dans la barre d'adresse du navigateur.</code></p>
                <p><code>Commencer par remplir le concert 1.</code></p>
                <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($i = 1; $i <= 15; $i++) : ?>
                        <!-- TITRE CONCERT -->
                        <div class="pinput">
                            <label for="metadata_726_<?php echo $i; ?>">TITRE DU CONCERT <?php echo $i; ?></label>
                            <input type="text" name="metadata_726_<?php echo $i; ?>" id="metadata_726_<?php echo $i; ?>" placeholder='en MAJUSCULE' value="<?php echo $metadata_726_[$i]; ?>"/>
                        </div>
                        <!-- URL DU POST FACEBOOK -->
                        <div class=''>
                            <div class="pinput">
                                <label for="metadata_723_<?php echo $i; ?>">URL du post Facebook <?php echo $i; ?></label>
                                <input type="text" name="metadata_723_<?php echo $i; ?>" id="metadata_723_<?php echo $i; ?>" placeholder='' value="<?php echo $metadata_723_[$i]; ?>"/>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                
            </div>

            <!-- LIENS INTERNET -->

            <div class='metagroup'>
                <h2>Liens page internet</h2>
                <p><code>Commencer par remplir le concert 1.</code></p>
                <div class='metagroup_sub_items grid_4fr_simple'>
                    <?php for ($i = 1; $i <= 15; $i++) : ?>
                        <!-- TITRE CONCERT -->
                        <div class="pinput">
                            <label for="metadata_727_<?php echo $i; ?>">TITRE DU CONCERT <?php echo $i; ?></label>
                            <input type="text" name="metadata_727_<?php echo $i; ?>" id="metadata_727_<?php echo $i; ?>" placeholder='en MAJUSCULE' value="<?php echo $metadata_727_[$i]; ?>"/>
                        </div>
                        <!-- URL DU SITE -->
                        <div class=''>
                            <div class="pinput">
                                <label for="metadata_724_<?php echo $i; ?>">URL page    internet <?php echo $i; ?></label>
                                <input type="text" name="metadata_724_<?php echo $i; ?>" id="metadata_724_<?php echo $i; ?>" placeholder='' value="<?php echo $metadata_724_[$i]; ?>"/>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                
            </div>

        </section>


    <?php
}



/************************************************************************
* Save datas
*************************************************************************/

function jcp_metabox_save_page_medias_concertsligne($post_id) {
    
    if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_720', $_POST)) { update_post_meta( $post_id, 'metadata_720', $_POST['metadata_720']);};
    if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_721', $_POST)) { update_post_meta( $post_id, 'metadata_721', $_POST['metadata_721']);};

    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_722_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_722_'.$i.'', $_POST['metadata_722_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_723_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_723_'.$i.'', $_POST['metadata_723_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_724_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_724_'.$i.'', $_POST['metadata_724_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_725_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_725_'.$i.'', $_POST['metadata_725_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_726_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_726_'.$i.'', $_POST['metadata_726_'.$i.'']);};
    }
    for ($i = 1; $i <= 15; $i++) {
        if ('page-templates/page-mediatheque_concertsenligne.php' == get_post_meta( $post_id, '_wp_page_template', true ) && array_key_exists('metadata_727_'.$i.'', $_POST)) { update_post_meta( $post_id, 'metadata_727_'.$i.'', $_POST['metadata_727_'.$i.'']);};
    }

}

?>