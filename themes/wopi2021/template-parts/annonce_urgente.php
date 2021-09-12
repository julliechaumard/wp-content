<?php
//// ANNONCE URGENTE EN HAUT DE PAGE

?>

<!-- ---------------- -->
<!-- ANNONCE URGENTE -->
<!-- ---------------- -->
<!-- SITE DE DEV & DE PROD -->
<!-- Post Data du post ID 31 (page d'accueil) -->
<?php if (!empty(get_post_meta(31, 'metadata_017', true))) :  ?>

    <section class="height_min_150 flex flex_align_center bg_color_gris_clair border_radius marginb_30_890px marginb_30_889px paddingt_20 paddingr_40 paddingb_20 paddingl_40_nomobile paddingl_20_mobile ubuntu_leger">

        <p><?php echo get_post_meta(31, 'metadata_017', true); ?></p>

    </section>

<?php endif; ?>

<!-- SITE LOCAL -->
<!-- Post Data du post ID 5 (page d'accueil) -->
<?php if (!empty(get_post_meta(5, 'metadata_017', true))) :  ?>

<section class="height_min_150 flex flex_align_center bg_color_gris_clair border_radius marginb_30_890px marginb_30_889px paddingt_20 paddingr_40 paddingb_20 paddingl_40_nomobile paddingl_20_mobile ubuntu_leger">

    <p><?php echo get_post_meta(5, 'metadata_017', true); ?></p>

</section>

<?php endif; ?>

