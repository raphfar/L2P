<?php  
    session_start();
   require("config/db.php");
   include("header.php");
   include("head.php");
   


    $request = $db->prepare('SELECT user_id, pseudo, elo, role, email FROM Users');

    $request->execute(
        array(
          "user_id" => $_SESSION['user_id']
        )
  );

    while ($data = $request->fetch()) {
     
?>
   <div class="row">
        <div class=" col-md-3">
    <p><?php echo $data['email']; ?></p>
        
    <p><?php echo $data['pseudo']; ?></p>

    <p><?php echo $data['elo']; ?></p>

    <p><?php echo $data['role']; ?></p>

    
            </div>
        </div>
        
 <?php  }
 ?>