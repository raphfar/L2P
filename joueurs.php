<?php
session_start();
include("navbar.php");

$request = $db->prepare('SELECT user_id, pseudo, elo, role, email FROM Users');

$request->execute(
    array(
        "user_id" => $_SESSION['user_id']
    )
);
?>

<?php while ($data = $request->fetch()) { ?>

    <div class="row">
        <div class="col s3 offset-s1">
            <div class="card">
                <p class="card-title text-center user">Joueur numéro <?php echo $data['user_id']; ?></p>
                <div class="card-content user-info">
                    Email: <?php echo $data['email']; ?><br>
                    Pseudo : <?php echo $data['pseudo']; ?><br>
                    Elo : <?php echo $data['elo']; ?><br>
                    Rôle : <?php echo $data['role']; ?><br>
                </div>
            </div>
        </div>
    </div>

<?php }
?>

<?php
include("footer.php");
?>
