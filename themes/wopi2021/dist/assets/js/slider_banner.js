/* JAVASCRIPT DU SLIDER PAGE ACCUEIL
CHANGEMENT DE DIAPO AUTOMATIQUE
FLÈCHE DROITE ET GAUCHE
*/
/*

RESPONSIVE
Pour gérer l'affichage du header sur les écrans desktop et smartphone, j'ai utilisé le CSS avec "display:none" sur media queries pour afficher/cacher les éléments selon que l'on soit sur un tel ou tel écran.
Selon plusieurs considération (notemment la désactivation par l'utilisateur du JS) j'ai choisi cette méthode.
Du coup dans le Script ici je gère les commandes pour desktop et pour mobile.
Cela donne 2 commandes, par ex :
- slideid_courante_diapo = document.getElementsByClassName('slide_active_diapo')[0].id;
- slideid_courante_diapo_mob = document.getElementsByClassName('slide_active_diapo_mob')[0].id;

FONCTIONS
changeDiapoauto() = lance l'exécution d'une fonction toutes les 5 secondes
ChangeSlidediapoauto() = Fait déflié la diapo. Fonction pour le défilement auto
ChangeSlidediapo(sens_diapo,compteur_diapo) = ces variables sont données quand on appelle la fonction dans le HTML. Fonction qui change la diapo quand on clique sur la flèche "suivant" ou "précédent".

VARIABLES
compteur = Nombre de slide (Slides comptées en PHP au moment de l'écriture des balises HTML. Compteur récupéré dans le HTML via un dataset). C'est utile dans la fonction automatique car on n'appelle pas la fonction via le HTML et du coup on ne peut pas passer d'argument.
slideid_courante_diapo / slideid_courante_diapo_mob = ID de la balise qui contient la class qui affiche la contenu.
id_slide_diapo / id_slide_diapo_mob = substring du numéro de slide du nom de l'ID
sens_diapo = pour savoir si l'utilisateur a cliqué sur la flèche "suivante" ou "précedente"
compteur_diapo = Nombre de slides (Slides comptées en PHP au moment de l'écriture des balises HTML).

*/

    // Compteur de slide récupéré par le dataset
    var compteur = document.getElementById('precedent');
    compteur = compteur.dataset.compteur

    // LANCEMENT DU CHANGEMENT DE DIAPO AUTOMATIQUE TOUTES LES 5 secondes
    changeDiapoauto();
    function changeDiapoauto() {
        nIntervId = setInterval(ChangeSlidediapoauto, 3000);
    }

    // FONCTION DEFILEMENT AVEC LES FLÈCHES
        // Arrêter le défilement automatique
        // récupérer le numéro de slide en cours
        // cacher la slide en cours
        // afficher la slide suivante ou précédente
    function ChangeSlidediapo(sens_diapo,compteur_diapo) {
        
        // STOPPER LE DÉFILLEMENT AUTO QUAND ON CLIQUE SUR UNE FLÈCHE
        clearInterval(nIntervId);

        // QUELLE SLIDE EST EN COURS d'AFFICHAGE ? 
            // La slide en cours est la slide qui a la classe 'slide_active_diapo'
            // on récupère le id du div de la slide qui a cette classe.
        slideid_courante_diapo = 0;
        slideid_courante_diapo_mob = 0;
        
        // Extraction du numéro de slide en cours d'affichage par son ID récupéré
        // L'ID se nomme "slide_diapo_x", ou x est le numéro de slide, donc on extrait x.
        id_slide_diapo = 0;
        id_slide_diapo_mob = 0;

        // CLIC SUR LA FLÈCHE SLIDE "SUIVANTE"
        if (sens_diapo === 'droite') {
            
            // CACHER LA SLIDE COURANTE
                // A partir de l'ID récupéré de la slide, on va chnager sa class.
                // remplacer le classe active par une classe qui cache son contenu
            slideid_courante_diapo = document.getElementsByClassName('slide_active_diapo')[0].id;
            slideid_courante_diapo_mob = document.getElementsByClassName('slide_active_diapo_mob')[0].id;
            document.getElementById(slideid_courante_diapo).classList.replace("slide_active_diapo", "slide_hidden_diapo");
            document.getElementById(slideid_courante_diapo_mob).classList.replace("slide_active_diapo_mob", "slide_hidden_diapo_mob");

            // AFFICHER LA SLIDE SUIVANTE
                // Extraction du numéro de slide en cours d'affichage par son ID récupéré
                // L'ID se nomme "slide_diapo_x", ou x est le numéro de slide, donc on extrait x.
            id_slide_diapo = slideid_courante_diapo.substr(12,1);
            id_slide_diapo_mob = slideid_courante_diapo_mob.substr(12,1);
    
            // Si numéro de slide = dernière slide, alors on revient au début en mettant le compteur à 0 (slide 1)
            if (id_slide_diapo >= compteur_diapo) {
                id_slide_diapo = 0;
                compteur_diapo = 0;
            }
            if (id_slide_diapo_mob >= compteur_diapo) {
                id_slide_diapo_mob = 0;
                compteur_diapo = 0;
            }

            // on incrémente le numéro de slide pour afficher la slide suivante
            // remplacer le classe qui cache son contenu par une classe active
            id_slide_diapo++;
            id_slide_diapo = 'slide_diapo_' + id_slide_diapo;
            document.getElementById(id_slide_diapo).classList.replace("slide_hidden_diapo", "slide_active_diapo");

            id_slide_diapo_mob++;
            id_slide_diapo_mob = 'slide_diapm_' + id_slide_diapo_mob;
            document.getElementById(id_slide_diapo_mob).classList.replace("slide_hidden_diapo_mob", "slide_active_diapo_mob");
        }

        // CLIC SUR LA FLÈCHE SLIDE "PRÉCÉDENTE"
        if (sens_diapo === 'gauche') {
            
            // CACHER LA SLIDE COURANTE
                // A partir de l'ID récupéré de la slide, on va chnager sa class.
                // remplacer le classe active par une classe qui cache son contenu
            slideid_courante_diapo = document.getElementsByClassName('slide_active_diapo')[0].id;
            slideid_courante_diapo_mob = document.getElementsByClassName('slide_active_diapo_mob')[0].id;

            document.getElementById(slideid_courante_diapo).classList.replace("slide_active_diapo", "slide_hidden_diapo");
            document.getElementById(slideid_courante_diapo_mob).classList.replace("slide_active_diapo_mob", "slide_hidden_diapo_mob");

            // AFFICHER LA SLIDE SUIVANTE

            // Extraction du numéro de slide en cours d'affichage par son ID récupéré
            // L'ID se nomme "slide_diapo_x", ou x est le numéro de slide, donc on extrait x.
            id_slide_diapo = slideid_courante_diapo.substr(12,1);
            id_slide_diapo_mob = slideid_courante_diapo_mob.substr(12,1);

            // on décrémente le numéro de slide pour afficher la slide précédente
            id_slide_diapo--;
            id_slide_diapo_mob--;

            // Si numéro de slide = dernière slide, alors on revient au début en mettant le compteur à 0 (slide 1)
            if (id_slide_diapo === 0) {
                id_slide_diapo = compteur_diapo;
            }
            if (id_slide_diapo_mob === 0) {
                id_slide_diapo_mob = compteur_diapo;
            }
            
            // remplacer le classe qui cache son contenu par une classe active
            id_slide_diapo = 'slide_diapo_' + id_slide_diapo;
            id_slide_diapo_mob = 'slide_diapm_' + id_slide_diapo_mob;

            document.getElementById(id_slide_diapo).classList.replace("slide_hidden_diapo", "slide_active_diapo");
            document.getElementById(id_slide_diapo_mob).classList.replace("slide_hidden_diapo_mob", "slide_active_diapo_mob");

        }
        
    }

    // FONCTION DEFILEMENT AUTOMATIQUE
        // - récupérer le numéro de slide en cours
        // - revenir à la première slide si on est à la fin
        // - cacher la slide en cours
        // - afficher la slide suivante
    function ChangeSlidediapoauto() {

        // QUELLE SLIDE EST EN COURS d'AFFICHAGE ? 
            // La slide en cours est la slide qui a la classe 'slide_active_diapo'
            // on récupère le id du div de la slide qui a cette classe.
        slideid_courante_diapo = document.getElementsByClassName('slide_active_diapo')[0].id;
        slideid_courante_diapo_mob = document.getElementsByClassName('slide_active_diapo_mob')[0].id;
        
        // Extraction du numéro de slide en cours d'affichage par son ID récupéré
        // L'ID se nomme "slide_diapo_x", ou x est le numéro de slide, donc on extrait x.
        id_slide_diapo = slideid_courante_diapo.substr(12,1);
        id_slide_diapo_mob = slideid_courante_diapo_mob.substr(12,1);

        // CACHER LA SLIDE COURANTE
            // A partir de l'ID récupéré de la slide, on va chnager sa class.
            // remplacer le classe active par une classe qui cache son contenu
        document.getElementById(slideid_courante_diapo).classList.replace("slide_active_diapo", "slide_hidden_diapo");
        document.getElementById(slideid_courante_diapo_mob).classList.replace("slide_active_diapo_mob", "slide_hidden_diapo_mob");

        // AFFICHER LA SLIDE SUIVANTE
        // Si numéro de slide = dernière slide, alors on revient au début en mettant le compteur à 0 (slide 1)
        if (id_slide_diapo == compteur) {
            id_slide_diapo = 0;
        };
        if (id_slide_diapo_mob == compteur) {
            id_slide_diapo_mob = 0;
        };

        // on incrémente le numéro de slide pour afficher la slide suivante
        // remplacer le classe qui cache son contenu par une classe active
        id_slide_diapo++;
        id_slide_diapo = 'slide_diapo_' + id_slide_diapo;
        document.getElementById(id_slide_diapo).classList.replace("slide_hidden_diapo", "slide_active_diapo");

        id_slide_diapo_mob++;
        id_slide_diapo_mob = 'slide_diapm_' + id_slide_diapo_mob;
        document.getElementById(id_slide_diapo_mob).classList.replace("slide_hidden_diapo_mob", "slide_active_diapo_mob");
        
    }

