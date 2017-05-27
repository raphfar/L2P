<?php
session_start();
include("header.php");

if (isset($_POST["pseudo"])
    && isset($_POST["password"])
    && isset($_POST["email"])
    && isset($_POST["elo"])
    && isset($_POST["role"])
) {
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST["email"]);
    $elo = htmlspecialchars($_POST["elo"]);
    $role = htmlspecialchars($_POST["role"]);


    //preparation de la requete : est ce que ce pseudo ou cet imal existe?
    $request = $db->prepare("SELECT user_id FROM users WHERE pseudo LIKE :pseudo OR email LIKE :email");
    //execution de la requete : on remplace :pseudo et :email par les valeurs entrees dans le formulaire
    $request->execute(
        array(
            "pseudo" => $pseudo,
            "email" => $email
        )
    );
    //on reupere tous les membres correspondant a la requete
    $members = $request->fetchAll();

    //si il y en a 0, c'est qu'aucun membres avec ces identifiants exist, on peut le creer
    if (sizeof($members) == 0) {

        //ici on fera l'insertion
        $request = $db->prepare("INSERT INTO users (pseudo, password, email, elo, role)
      VALUES (:pseudo, :password, :email, :elo, :role)");
        $request->execute(
            array(
                "pseudo" => $pseudo,
                "password" => $password,
                "email" => $email,
                "elo" => $elo,
                "role" => $role,
            )
        );
        header("Location:login.php");

    } // sinon on ne veut pas de doublon donc on ne creait pas
    else {
        echo "Cet utilisateur est déjà existant dans la base de données";
    }

} else {
    //echo "salut !";
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

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label position" for="emailinput">Email</label>
                    <div class="col-md-4">
                        <input id="email" name="email" type="email" placeholder="..." class="form-control input-md"
                               required="">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label position" for="passwordinput">Password</label>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="..."
                               class="form-control input-md" required="">
                    </div>
                </div>

                <!-- elo input-->
                <div class="form-group">
                    <label class="col-md-4 control-label position" for="eloinput">Elo</label>
                    <div class="col-md-4">
                        <input id="elo" name="elo" type="text" placeholder="..." class="form-control input-md"
                               required="">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label position" for="roleinput">Rôle</label>
                    <div class="col-md-4">
                        <input id="role" name="role" type="text" placeholder="..." class="form-control input-md"
                               required="">
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4 text-center">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Sign in</button>
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