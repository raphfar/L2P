<?php  
    session_start();
   require("config/db.php");
   include("header.php");
   include("head.php");
   


    $request = $db->prepare('SELECT user_id, team_name, elo, line_up FROM team');

    $request->execute(
        array(
          "user_id" => $_SESSION['user_id']
        )
  );

    while ($data = $request->fetch()) {
     
?>
   <div class="row">
        <div class=" col-md-3">
    <p><?php echo $data['team_name']; ?></p>
        
    <p><?php echo $data['elo']; ?></p>

    <p><?php echo $data['line_up']; ?></p>


    
            </div>
        </div>
        
 <?php  }
 ?>