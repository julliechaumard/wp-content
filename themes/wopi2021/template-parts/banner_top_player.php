<!-- ---------------- -->
<!-- BANNER -->
<!-- banner_top.php -->
<!-- AJOUT D'UN PLAYER DE MUSIQUE -->
<!-- ---------------- -->

<!-- ---------------- -->
<!-- MODE DESKTOP -->
<!-- ---------------- -->



    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX + PLAYER -->
    <!-- ---------------- -->

    <div class="nav_res_soc_cell margint_27_mobile grid_player_banniere grid_column_gap75 marginr_10 marginl_10">

        <nav class="alignself_center">
            <ul class='tx_<?php couleur() ?>'>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">Instajeunes</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a  target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a></li>
            </ul>
        </nav>
        
        <div>

            <!-- PLAYER MUSIC -->
            <audio id="audioPlayer"> loop
                <source src="<?php bloginfo('template_directory');?>/dist/assets/audios/flute_vous_voyez_tous_les_ans_julie.mp3"></source>
                <source src="<?php bloginfo('template_directory');?>/dist/assets/audios/flute_vous_voyez_tous_les_ans_julie.mp3"></source>
            </audio>
            
            <div class="">
                <button class="radio button_player_banniere bg_<?php couleur()?> tx_color_blanc fontsize_11 grid_button_play_banniere" onclick="play('audioPlayer', this)">
                    <p>NOUS ÉCOUTER</p> <i class="fas fa-play"></i>
                </button>
            </div>

            <!-- JavaScript play music -->
            <script>
                function play(idPlayer, radio) {
                    var player = document.querySelector('#' + idPlayer);
                    
                    if (player.paused) {
                        player.play();
                        radio.innerHTML = '<p>NOUS ÉCOUTER</p> <i class="paddingl_8 fas fa-pause"></i>';
                    } else {
                        player.pause();
                        radio.innerHTML = '<p>NOUS ÉCOUTER</p> <i class="paddingl_8 fas fa-play"></i>';
                    }
                }
            </script>

        </div>

    </div>



<!-- ---------------- -->
<!-- MODE MOBILE -->
<!-- ---------------- -->


    
    <!-- ---------------- -->
    <!-- NAV RESEAUX SOCIAUX + PLAYER -->
    <!-- ---------------- -->
    <div class="nav_res_soc_cell margint_27_mobile grid_1col1_1row grid_player_banniere grid_column_gap75 marginr_10">

        <nav class="alignself_center">
            <ul class='tx_<?php couleur() ?>'>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/orchestredepicardie/">Instagram</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.instagram.com/musicodpic/">Instajeunes</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://www.facebook.com/Orchestredepicardie/">Facebook</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a target="_blank" href="https://twitter.com/ORCHESPICARDIE">Twitter</a></li>
                <li class='menu_res_soc_item pipe_<?php menu_pipe_couleur() ?>'><a  target="_blank"href="https://www.youtube.com/channel/UC0K2FgYMFDrYtjudbI-6Tjw/videos">Youtube</a></li>
            </ul>
        </nav>

        <div class="margint_20_500px">

            <!-- PLAYER MUSIC -->
            <audio id="audioPlayer"> loop
                <source src="<?php bloginfo('template_directory');?>/dist/assets/audios/flute_vous_voyez_tous_les_ans_julie.mp3"></source>
                <source src="<?php bloginfo('template_directory');?>/dist/assets/audios/flute_vous_voyez_tous_les_ans_julie.mp3"></source>
            </audio>
            
            <div class="">
                <button class="radio button_player_banniere bg_<?php couleur()?> tx_color_blanc fontsize_11 grid_button_play_banniere" onclick="play('audioPlayer', this)">
                    <p>NOUS ÉCOUTER</p> <i class="fas fa-play"></i>
                </button>
            </div>

            <!-- JavaScript play music -->
            <script>
                function play(idPlayer, radio) {
                    var player = document.querySelector('#' + idPlayer);
                    
                    if (player.paused) {
                        player.play();
                        radio.innerHTML = '<p>NOUS ÉCOUTER</p> <i class="paddingl_8 fas fa-pause"></i>';
                    } else {
                        player.pause();
                        radio.innerHTML = '<p>NOUS ÉCOUTER</p> <i class="paddingl_8 fas fa-play"></i>';
                    }
                }
            </script>

        </div>

    </div>


