<?php if($this->session->userdata('logged_in')):?>
	<h2>Hello, welcome to phppro!</h2>
    
	<?php echo form_open('userc/logout');?>

	<h3>
	<?php if($this->session->userdata('username')):?>

	<?php echo "You are logged in as " . $this->session->userdata('username'); ?>

     <?php endif; ?>
     </h3>

  <?php 
	$data =array(
		'class'=>'btn btn-primary',
		'name' =>'submit',
		'value'=>'Logout'
		);

  ?>
	<?php echo form_submit($data);?>

	<?php echo form_close();?>

<?php else: ?>


<h2>login</h2>

<?php $attributes=array('id'=>'login_form','class'=>'form_horizontal');?>

<?php echo form_open('userc/login',$attributes);?>

<!-- to create input -->

<div class="form-group">
<?php echo form_label('username');?>

<?php
 $data=array(
    'class'=> 'form-control',
    'name'=> 'username',
    'placeholder'=> 'Enter username',
    
 	);
?>

<?php echo form_input($data);?>

</div>

<div class="form-group">
<?php echo form_label('Password');?>

<?php
 $data=array(

    
    'class'=> 'form-control',
    'name'=> 'password',
    'placeholder'=> 'Enter password',
    
 	);
?>

<?php echo form_password($data);?>

</div>


<div class="form-group">

<?php
 $data=array(

    
    'class'=> 'btn btn-primary',
    'name'=> 'submit',
    'value'=> 'Login',
 	);
?>

<?php echo form_submit($data); ?>

</div>

<?php echo form_close();?>
<?php endif; ?>