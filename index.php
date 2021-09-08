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
    <section>
        <h1>Bienvenue sur BabyFun !</h1>
        <div class="container_slide">
            <div class="slide ">
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
                    <div class="bonus" style="background-color: #0098ff;">Un jour supplémentaire</div>
                </div>
            </div>
            <div class="slide slide_active">
                <h2>Attention le temps tourne</h2>
                <div class="time">
                    <span>13s</span>
                </div>
            </div>
        </div>
        <div class="slider_dotte">
            <div class="dotted dotted_active"></div>
            <div class="dotted"></div>
            <div class="dotted"></div>
        </div>
        <button class="button_slide">Suivant</button>
        <p class="foot">Un jeu créé par une équipe de l'EPSI Bordeaux</p>
    </section>

    <section class="scoregame">
        <h1>BabyFun</h1>
        <p class="foot">Un jeu créé par une équipe de l'EPSI Bordeaux</p>
        <div class="blue_window"><p>03:56</p><p>Temps de jeu</p></div>
        <div class="scoreboard">
            <div>5</div>
            <div>3</div>
        </div>
        <div class="sharegame">Partage la partie</div>

        <button id="change" style="position: absolute; top: 10px">Change la taille</button>



        <div class="malus_popup">
            <div class="middle_text">
                <p>à toi de voter</p>
                <p>Malus</p>
            </div>
            <div class="pledges">
                <div>Jouer les mains dans le dos</div>
                <div>Jouer les mains croisées</div>
            </div>
            <div class="gauge_container">
                <div class="gauge1">
                    <div><img src="assets/media/images/person.svg"></div>
                    <div>10 personnes</div>
                </div>
                <div class="gauge2">
                    <div><img src="assets/media/images/person.svg"></div>
                    <div>3 personnes</div>
                </div>
            </div>
            <div class="time_small">
                <span>13s</span>
            </div>


        </div>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>