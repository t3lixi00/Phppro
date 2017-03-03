
 <style>
   img{
    width: 100px;
    height:100px;
    float: left;
    margin-right: 10px;

   }

   .list-group-item{
    width: 100%;
    height: 120px;
   }
 </style>
 
    <div class="list-group">

 <?php foreach($ad as $object): ?>
   
   <div class='list-group-item'>

    
      <?php echo 
      "<a  href='".$object->link."'> 
        <img class='img-thumbnail' src='".$object->image."'>  
        <h2 class='list-group-item-heading'> ".$object->content."</h2> <br>
        <p class='list-group-item-text'> promoted by : ".$object->company_name."</p>
      </a>"
      ; ?>

      </div>    
      <?php endforeach;?>
    
    </div>
  




 
