<?php
include("navbar.php");
?>

    <body>



    <div class="row">
        <div class="col s4 offset-s2">
            <div class="card">
                <div class="card-image">
                    <a href="joueurs.php"><img src="img/equipe.png"></a>
                    <span class="card-title">Joueur</span>
                    <a href="joueurs.php" class="waves-effect waves-light btn">
                        <i class="material-icons">Joueur</i>
                    </a>
                </div>
                <div class="card-content">
                    <a href="joueurs.php">Recherche de joueur</a>
                </div>
            </div>
        </div>

        <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <a href="teams.php"><img src="img/joueur.png"></a>
                    <span class="card-title">Equipe</span>
                    <a href="teams.php" class="center-align waves-effect waves-light btn">
                        <i class="material-icons">Equipe</i>
                    </a>
                </div>
                <div class="card-content">
                    <a href="teams.php">Recherche d'équipe</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card">
                <div class="card-image">
                    <a class="waves-effect waves-light btn">
                        <i class="material-icons">Informations</i>
                    </a>
                </div>
                <div class="card-content">
                    <h3>Explication du site : grace a cette merde vous pouvez trouver de
                        nombreux joueurs de tous niveaux il vous suffit d'entrer en contact avec la
                        personne concernée via son adresse email ou via son pseudo sur league of legend directement.
                        Nous espérons que vous trouverez des coéquipiés adaptés :)</h3>
                </div>
            </div>
        </div>
    </div>

    </body>

<?php
include("footer.php");
?>