<?php
session_start();
include("header.php");

if (isset($_POST["pseudo"])
    && isset($_POST["password"])
) {
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $password = htmlspecialchars($_POST["password"]);

    $request = $db->prepare("SELECT user_id FROM users WHERE pseudo LIKE :pseudo AND password = :password");
    $request->execute(
        array(
            "pseudo" => $pseudo,
            "password" => $password
        )
    );

    $users = $request->fetchAll();

    if (sizeof($users) > 0) {

        $user_id = $users[0]["id"];
        $_SESSION["user_id"] = $user_id;
        header("Location:joueurs.php");

    } else {
        echo "Try again !";
    }

}

?>

<body>

<div class="row">
    <div class="col s6 offset-s3 sign">
        <form class="form-horizontal" action="signin.php" method="post">
            <fieldset>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label position" for="pseudoinput">Pseudo</label>
                    <div class="col-md-4">
                        <input id="pseudo" name="pseudo" type="text" placeholder="..." class="form-control input-md"
                               required="">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label position" for="passwordinput">Mot de passe</label>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="..."
                               class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4 text-center">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Log in</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<div class="col-md-12 text-center">
    <a href="index.php">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Retour</button>
    </a>
</div>

</body>
