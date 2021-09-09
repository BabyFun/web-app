<?php
require "includes/tools/functions.php";
require "includes/tools/pickGages.php";
$gages = getGages();
$choixBonus = pickGages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section id="thesection">
        <h1>Bienvenue sur BabyFun !</h1>
        <div class="container_slide">
            <div class="slide slide_active">
                <h2>Attends ton tour en t'amusant !</h2>
                <p>C'est toi le qui contrôle la partie, à tous moments un vote pour attribuer un malus ou un bonus aux équipes</p>
            </div>
            <div class="slide">
                <h2>Choisissez les <span class="jaune">malus</span> et les <span class="bleu">bonus</span></h2>
                <div class="intervention">
                    <div class="bonus">Jouer les mains dans le dos</div>
                    <div class="bonus">Jouer les mains croisées</div>
                </div>
                <div class="intervention">
                    <div class="bonus" style="background-color: #0098ff;">But compte double</div>
                    <div class="bonus" style="background-color: #0098ff;">Un joueur supplémentaire</div>
                </div>
            </div>
            <div class="slide">
                <h2>Attention le temps tourne</h2>
                <div class="time">
                    <span>10s</span>
                </div>
            </div>
        </div>
        <div class="slider_dotte">
            <div class="dotted dotted_active"></div>
            <div class="dotted"></div>
            <div class="dotted"></div>
        </div>
        <button class="button_slide" id="button_slide">Suivant</button>
        <p class="foot">Un jeu créé par une équipe de l'EPSI Bordeaux</p>
    </section>



    <!------------------------   AJOUT ANTO    --------------------------->


    <section class="scoregame" style="display: none;">
        <h1>BabyFun</h1>
        <p class="foot">Un jeu créé par une équipe de l'EPSI Bordeaux</p>
        <div class="blue_window"><p><span id="minutes">00</span>:<span id="seconds">00</span></p><p>Temps de jeu</p></div>
        <div class="scoreboard">
            <div id="score1">0</div>
            <div id="score2">0</div>
        </div>
        <div class="sharegame">Partage la partie</div>

        <button id="change" style="position: absolute; top: 10px">Change la taille</button>

    <?php if($choixBonus[0]['bonus'] == 1) {

    ?>
        <div class="malus_popup">
            <div class="middle_text_bonus">
                <p>à toi de voter</p>
                <p>Bonus</p>
            </div>
            <div class="pledges_bonus">
                <div><?= $choixBonus[0]['nom'] ?></div>
                <div><?= $choixBonus[1]['nom'] ?></div>
            </div>
            <div class="gauge_container">
                <div class="gauge1_bonus">
                    <div><img src="assets/media/images/person.svg"></div>
                    <div>10 personnes</div>
                </div>
                <div class="gauge2_bonus">
                    <div><img src="assets/media/images/person.svg"></div>
                    <div>3 personnes</div>
                </div>
            </div>
            <div class="time_small_bonus">
                <span id="bar-value">&nbsp;</span>
            </div>

        </div>


        <div class="middle_text_bonus malus_popup_result">
            <p>Pour l'équipe *</p>
            <p>*gage*</p>
        </div>
    <?php } else { ?>
        <div class="malus_popup">
            <div class="middle_text_malus">
                <p>à toi de voter</p>
                <p>Malus</p>
            </div>
            <div class="pledges_malus">
                <div><?= $choixBonus[0]['nom'] ?></div>
                <div><?= $choixBonus[1]['nom'] ?></div>
            </div>
            <div class="gauge_container">
                <div class="gauge1_malus">
                    <div><img src="assets/media/images/person.svg"></div>
                    <div>10 personnes</div>
                </div>
                <div class="gauge2_malus">
                    <div><img src="assets/media/images/person.svg"></div>
                    <div>3 personnes</div>
                </div>
            </div>
            <div class="time_small_malus">
                <span id="bar-value">&nbsp;</span>
            </div>

        </div>


        <div class="middle_text_malus malus_popup_result">
            <p>Pour l'équipe *</p>
            <p>*gage*</p>
        </div>
    <?php } ?>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>