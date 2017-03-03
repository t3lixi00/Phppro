
 <style>
   img{
    width: 150px;
    height:150px;
    float: left;
   }

   .list-group-item{
    width: 100%;
    height: 150px;
   }
 </style>
 
  
<div class="list-group">

 <?php foreach($news as $object): ?>
   
   <div class='list-group-item'>

    
      <?php echo 
      "<a  href='".$object->link."'> 
        <img class='img-thumbnail' src='".$object->image."'>
        <h2 class='list-group-item-heading'>".$object->description."</h2>
        <p class='list-group-item-text'> submited: ".$object->creatTime."</p>
      </a>";
      echo'<a href="'.site_url('mainc/delete').'/'.$object->id_news.'">';
      echo '<button class ="btn btn-danger">delete</button>';
      echo '</a>&nbsp';
       // Edit button
       echo '<a href="'.site_url('mainc/Edit_news').'/'.$object->id_news.'">';
       echo '<button class ="btn btn-warning">Edit</button>';
       echo '</a>';
  
      ; ?>
     

      <!--table-->
   </div> 
    <?php endforeach;?>

</div>
 <!--table-->
<div class="table">
 <table>
    <thead>
      <tr>
        <th>description</th>
        <th>image</th>
        <th>link</th>
      </tr>
    </thead>
    <tbody>  
      <tr class="info">
           <?php echo form_open('mainc/insert');?>
         <td>
          <?php
             $data=array(
             'class'=> 'form-control',
             'name'=> 'description',
             'placeholder'=> 'Enter title',
    
                );?>
            
         <?php echo form_input($data);?>
       </td>
          <td>
            <?php
             $data=array(
             'class'=> 'form-control',
             'name'=> 'image',
             'placeholder'=> 'Enter URL',
    
                );?>
          <?php echo form_input($data);?>
          </td>
          <td>
            <?php
             $data=array(
             'class'=> 'form-control',
             'name'=> 'link',
             'placeholder'=> 'Enter link',
    
                );?>
          <?php echo form_input($data);?>
          </td>
          <td>
          <?php
             $data=array(
             'class'=> 'btn btn-primary',
             'name'=> 'submit',
             'value'=> 'Insert News',
    
                );?>
          <?php echo form_submit($data);?>
          </td>
          </tr>
           <?php echo form_close();?>
         </tr>

    </tbody>
  </table>
	</div>		
    

  




 
