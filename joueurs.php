<?php  
    
   require("config/db.php")

    $request = $db->query('SELECT user_id, pseudo, elo, role, email path FROM Users');

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
        
 <?php  } ?>
