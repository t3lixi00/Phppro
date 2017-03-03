<div class="container" style="width: auto;">
  <h2>Users Administration</h2>
  <p>Here you can manage your users.</p>

   
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        
        <!--<th>Update</th>
        <th>Delete</th>-->
       <!-- <th>number of created news</th>-->
      </tr>
    </thead>
    <tbody>  
    <FORM action="<?php echo site_url('userc/update');?>" method="POST">
      <?php foreach ($user as $row) :?>

        <tr class="info">
      	
        <?php echo '<td><input name ="username" value="'.$row['username'].'"/></td>'?>
        <?php echo '<td><input name ="email" value="'.$row['email'].'"/></td>'?>
        <?php echo '<td><input name ="password" value="'.$row['password'].'"/></td>'?>
        <?php echo '<td><input name ="id_user" value="'.$row['id_user'].'"/></td>'?>
        <?php echo '<td>';
             // echo '<a href="'.site_url('userc/update').'/'.$row['id_user'].'">';
              echo '<input type="submit" class ="btn btn-warning" value="Update">';
              
              echo "</td>"?>
       </tr>
 	     <?php endforeach;?>      
 	      
        <!--id ="'.$row['id_user'].'" 
      echo '<tr><td>'.$row['fname'].'</td>';
        echo '<td>'.$row['lname'].'</td></tr>';    
    }-->

      </FORM>
    </tbody>
  </table>


    <!--Back button-->
      <?php echo '<a href="'.site_url('userc/show').'/">'; 
            echo   '<button class="btn btn-primary">Back</button>';
            echo  '</a>';?>

</div>