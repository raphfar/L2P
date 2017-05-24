<?php  

    require("config/db.php");
    include("header.php");
    include("head.php");
        
    $request = $db->query('SELECT user_id, team_name, elo, line_up, path FROM Team');

    while ($data = $request->fetch()) {
     
?>
   <div class="row">
        <div class=" col-md-3">
        
    <p><?php echo $data['team_name']; ?></p>

    <p><?php echo $data['elo']; ?></p>

    <p><?php echo $data['line_up']; ?></p>

    
            </div>
        </div>
        
 <?php  } ?>
