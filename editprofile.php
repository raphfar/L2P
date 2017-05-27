<?php
session_start();
include("navbar.php");


if (isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['pseudo']) && !empty($_POST['pseudo'])
) {

    $email = htmlspecialchars($_POST["email"]);
    $pseudo = htmlspecialchars($_POST["pseudo"]);

    $request = $db->prepare('INSERT INTO Team (email, pseudo, password, elo, role) 
          VALUES (:email, :pseudo, :elo, :role, NOW(), :user_id)');

    $request->execute(
        array(
            'email' => $email,
            'pseudo' => $pseudo,
            'elo' => $elo,
            'role' => $role,
            'user_id' => $_SESSION['user_id']
        )
    );

    echo "merci de votre contribution.";
}
?>
    <body>
    <div class="test">
        <div class="row sign">
            <div class="col s6 offset-s3">
                <fieldset>
                    <form class="form-horizontal" action="signin.php" method="post">
                        <form action="editprofile.php" method="post">
                            <h3 style="color: #fff; margin-left: 5%;">Vos informations :</h3>
                            <br>
                            <input style="margin-left: 5%; width: 90%;" class="white-text" id="email"
                                   name="email" type="text" placeholder="votre email">
                            <input style="margin-left: 5%; width: 90%;" class="white-text" id="pseudo"
                                   name="pseudo" placeholder="votre pseudo">
                            <input style="margin-left: 5%; width: 90%;" class="white-text" id="elo"
                                   name="elo" placeholder="votre elo">
                            <input style="margin-left: 5%; width: 90%;" class="white-text" id="role"
                                   name="role" placeholder="votre role">
                            <div class="col-md-12 text-center">
                                <input style="margin-bottom: 5%; margin-top: 5%;"
                                       class="btn btn-primary" type="submit" value="Envoyer"/>
                            </div>
                        </form>
                    </form>
                </fieldset>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <a href="index.php">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Retour</button>
            </a>
        </div>
    </div>
    </body>

<?php
include("footer.php");
?>