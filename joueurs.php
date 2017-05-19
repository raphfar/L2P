<?php  
    
   require("conf/db.php")

    $request2 = $db->query('SELECT user_id, pseudo, elo, role, email path FROM user');

    while ($data = $request2->fetch()) {
     
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
