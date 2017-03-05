<div class="container" style="width: auto;">
  <p class="bg-success">

  <?php if($_SESSION["username"]!=="admin"):?>
  <?php header("Location:../home");?> 
  <?php echo $this->session->flashdata('admin_failed')?> 
  <?php endif; ?>
  </p>

  <h2>Users Administration</h2>
  <p>Here you can manage your users.</p>

  <p class="bg-success">
  <?php if($this->session->flashdata('create_success')):?>
  <?php echo $this->session->flashdata('create_success') ?>	
  <?php endif; ?>
 
   
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>button</th>
        <!--<th>Update</th>
        <th>Delete</th>-->
       <!-- <th>number of created news</th>-->
      </tr>
    </thead>
    <tbody>  
      <?php foreach ($users as $row) :?>

        <tr class="info">
      	
        <?php echo '<td>'.$row['username'].'</td>'?>
        <?php echo '<td>'.$row['email'].'</td>'?>
        <?php echo '<td>'.$row['password'].'</td>'?>
        <?php echo '<td>';
              echo '<a href="'.site_url('userc/delete').'/'.$row['id_user'].'">';
              echo '<button class ="btn btn-danger">delete</button>';
              echo '</a>&nbsp';
            
      // Edit button
              echo '<a href="'.site_url('userc/Edit_user').'/'.$row['id_user'].'">';
              echo '<button class ="btn btn-warning">Edit</button>';
              echo '</a>';
              echo "</td>"?>
       </tr>
        <?php endforeach;?>
         <tr class="info">
           <?php echo form_open('userc/create');?>
         <td>
          <?php
             $data=array(
             'class'=> 'form-control',
             'name'=> 'username',
             'placeholder'=> 'Enter username',
    
 	              );?>
 	          
 	       <?php echo form_input($data);?>
 	     </td>
          <td>
          	<?php
             $data=array(
             'class'=> 'form-control',
             'name'=> 'email',
             'placeholder'=> 'Enter email',
    
 	              );?>
 	        <?php echo form_input($data);?>
          </td>
          <td>
          	<?php
             $data=array(
             'class'=> 'form-control',
             'name'=> 'password',
             'placeholder'=> 'Enter password',
    
 	              );?>
 	        <?php echo form_input($data);?>
          </td>
          <td>
          <?php
             $data=array(
             'class'=> 'btn btn-primary',
             'name'=> 'submit',
             'value'=> 'Create User',
    
 	              );?>
 	        <?php echo form_submit($data);?>
          </td>
          </tr>
           <?php echo form_close();?>
         </tr>
    <!--  echo '<tr><td>'.$row['fname'].'</td>';
        echo '<td>'.$row['lname'].'</td></tr>';    
    }-->
     
    </tbody>
  </table>
</div>