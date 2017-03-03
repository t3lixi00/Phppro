<div class="container" style="width: auto;">
 
  <table class="table">
    <thead>
      <tr>
        <th>description</th>
        <th>image</th>
        <th>link</th>
      </tr>
    </thead>
    <tbody>  
    <FORM action="<?php echo site_url('mainc/update');?>" method="POST">
      <?php foreach ($news as $row) :?>

        <tr class="info">
      	
        <?php echo '<td><input name ="description" value="'.$row['description'].'"/></td>'?>
        <?php echo '<td><input name ="image" value="'.$row['image'].'"/></td>'?>
        <?php echo '<td><input name ="link" value="'.$row['link'].'"/></td>'?>
        <?php echo '<td><input name ="id_news" value="'.$row['id_news'].'"/></td>'?>
        <?php echo '<td>';
             
              echo '<input type="submit" class ="btn btn-warning" value="Update">';
              
              echo "</td>"?>
       </tr>
 	     <?php endforeach;?>      

      </FORM>
    </tbody>
  </table>


    <!--Back button-->
      <?php echo '<a href="'.site_url('mainc/index').'/">'; 
            echo   '<button class="btn btn-primary">Back</button>';
            echo  '</a>';?>

</div>