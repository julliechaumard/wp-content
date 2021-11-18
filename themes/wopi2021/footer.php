<?php
/**
* FOOTER
*/
?>



<footer>
  <?php wp_footer(); ?>

  <!-- --------------------------------- -->
  <!-- NEWSLETTER -->
  <!-- --------------------------------- -->
  <section class="plainbox grid align_center justify_center bg_color_newsl margint_20 margin_section_botton">

    <div>
      <p class='titre_plainbox_container fontsize_33'>
          <span class='titre_leger'>ABONNEZ-VOUS</span>
          <br>
          <span class='titre_gras'>À NOTRE LETTRE</span>
          <br>
          <span class='titre_gras'>D'INFORMATION</span>
          
      </p>
    </div>

    <div>
      <button class="button_grand button_newsl"><a target="_blank" href="http://eepurl.com/dhF3sv">JE M’INSCRIS !</a></button></p>
    </div>

  </section>

  <!-- --------------------------------- -->
  <!-- LOGOS INSTITUTIONNELS -->
  <!-- --------------------------------- -->
  <div class='flex flex_justify_center'>
  <section class="grid_2col1111_2row align_center mod_footer_logos margin_section_botton">

    <div class="footer_logos_1 justifys_center">
      <img class='height_max_84' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_aisne_100.jpeg" alt="Logo Aisne">
      <img class='height_max_84' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_somme.jpg" alt="Logo Somme">
      <img class='height_max_84' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_amiens_metropole_100.jpg" alt="Logo Amiens Metropole">
    </div>
    <div class="footer_logos_2 justify_end justifyself_start_mobilexs">
      <img class='img_svg max_width_300' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_prefet_hdf.svg" alt="Logo partenaire">
    </div>
    <div class="footer_logos_3 justifys_start">
      <img class='img_svg max_width_300' src="<?php bloginfo('template_directory');?>/dist/assets/images/logos/logo_region_hdf.svg" alt="Logo partenaire">
    </div>

  </section>
  </div>



  <!-- --------------------------------- -->
  <!-- CONTACTS + RÉSEAUX SOCIAUX -->
  <!-- --------------------------------- -->
  <section class="plainbox_footer grid_2col12 bg_color_footer tx_color_blanc ubuntu_fin">

    <!-- NOTRE ADRESSE -->
    <div class="paddingl_100 paddingl_35_mobile paddingb_20_mobile">
      <!-- TITRE -->
      <div class="titre_paragraphe_size paddingt_20 paddingb_20">
        <p><span class="paddingr_8 ubuntu_leger">NOTRE</span><span class="ubuntu_bold">ADRESSE</span></p>
      </div>
      <!-- ADRESSE -->
      <div class="paddingb_20">
        <p>Orchestre de Picardie</p>
        <p>45 rue Pointin</p>
        <p>80000 Amiens</p>
      </div>
      <!-- TELEPHONE -->
      <div class="paddingb_20">
        <p>Téléphone : 03.22.92.15.84</p>
      </div>
    </div>

    <!-- NOUS CONTACTER -->
    <div class="paddingl_100 paddingl_35_mobile paddingb_20_mobile borderl_white">
      <!-- TITRE -->
      <div class="titre_paragraphe_size paddingt_20 paddingb_20">
        <p><span class="paddingr_8 ubuntu_leger">NOUS</span><span class="ubuntu_bold">CONTACTER</span></p>
      </div>
      <!-- Button MAIL ORCHESTRE -->
      <div class="paddingb_36">
        <!-- Button MAIL -->  
        <button class="button_grand button_newsl"><a target="_blank" href="mailto:communication@orchestredepicardie.fr?subject=Contact Informations depuis le site internet de l'Orchestre">ENVOYER UN MESSAGE</a></button></p>
      </div>
      <!-- LES RESEAUX SOCIAUX -->
      <div>
        <div class="paddingb_20">
          <p>Rejoignez-nous sur :</p>
        </div>
        <div class="grid_10col">
          <div>
            <img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/insta_icone.png" alt="icone instagram">
          </div>
          <div>
            <a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a>
          </div>
          <div>
            <img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/insta_icone.png" alt="icone instagram">
          </div>
          <div>
            <a target="_blank" href="https://www.instagram.com/musicodpic/">@musicodpic</a>
          </div>
          <div>
           <img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/facebook_icone.png" alt="icone facebook">
          </div>
          <div>
           <a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a>
          </div>
          <div>
           <img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/twitter_icone.png" alt="icone twitter">
          </div>
          <div>
            <a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a>
          </div>
          <div>
           <img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/icone_linkedin_blanc.png" alt="icone twitter">
          </div>
          <div>
            <a target="_blank" href="https://www.linkedin.com/company/orchestredepicardie/">LinkedIn</a>
          </div>
          <div>
            <img class='img_ajust' src="<?php bloginfo('template_directory')?>/dist/assets/images/icones/youtube_icone.png" alt="icone youtube">
          </div>
          <div>
            <a target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- --------------------------------- -->
  <!-- MENU FOOTER -->
  <!-- --------------------------------- -->
  <section class="margint_20 paddingb_15 nopagemarge_desk nopagemarge_mob bg_color_footer tx_color_blanc ubuntu_fin">

    <nav class="paddingt_15 paddingb_10">
      <ul class="flex marginl_35">
          <li class="block_inline encoche_white"></li>
          <li class='menu_res_soc_item marginr_10'><a href="<?php echo get_permalink(get_page_by_title('Mentions légales')) ?>">mentions légales</a></li>
          <li class="block_inline encoche_white"></li>
          <li class="menu_res_soc_item"><a href="#">espace presse</a></li>
      </ul>
    </nav>


  </section>



</footer>

<!-- script Xiti -->
<?php $slug = basename(get_permalink());?>

  <a href="http://www.xiti.com/xiti.asp?s=602095" title="WebAnalytics" target="_top">
  <script type="text/javascript">
  <!--
  Xt_param = 's=602095&p=<?php echo $slug; ?>';
  try {Xt_r = top.document.referrer;}
  catch(e) {Xt_r = document.referrer; }
  Xt_h = new Date();
  Xt_i = '<img width="0" height="0" border="0" alt="" ';
  Xt_i += 'src="http://logv2.xiti.com/oco.xiti?'+Xt_param;
  Xt_i += '&hl='+Xt_h.getHours()+'x'+Xt_h.getMinutes()+'x'+Xt_h.getSeconds();
  if(parseFloat(navigator.appVersion)>=4)
  {Xt_s=screen;Xt_i+='&r='+Xt_s.width+'x'+Xt_s.height+'x'+Xt_s.pixelDepth+'x'+Xt_s.colorDepth;}
  document.write(Xt_i+'&ref='+Xt_r.replace(/[<>"]/g, '').replace(/&/g, '$')+'" title="Internet Audience">');
  //-->
  </script>
  <noscript>
  Mesure d'audience ROI statistique webanalytics par <img width="80" height="15" src="http://logv2.xiti.com/oco.xiti?s=602095&p=" alt="WebAnalytics" />
  </noscript></a>
<!-- FIN script Xiti -->

<!-- JS -->
<!-- JS bootstrap dans cet ordre -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</div>
<!-- </div> -->
</body>

</html>
