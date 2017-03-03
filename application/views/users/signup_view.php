<h2>Sign up</h2>

<p class="bg-success">
<?php if($this->session->flashdata('signup_success')):?>
<?php echo $this->session->flashdata('signup_success') ?>    
<?php endif; ?>
</p>

<?php $attributes=array('id'=>'signup_form','class'=>'form_horizontal');?>

<?php echo form_open('userc/signup',$attributes);?>

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
<?php echo form_label('Email');?>

<?php
 $data=array(
    'class'=> 'form-control',
    'name'=> 'email',
    'placeholder'=> 'Email',
    
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
    'value'=> 'Sign up',
 	);
?>

<?php echo form_submit($data); ?>

</div>

<?php echo form_close();?>
