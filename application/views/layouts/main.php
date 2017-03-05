<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>

</style>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('home');?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('/userc/signup');?>">Signup<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('/mainc/index');?>">News<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('/advertisement/index');?>">Advertisement<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url('/userc/show');?>">Users<span class="sr-only">(current)</span></a></li>
       
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div clas="container">
	<div class="col-xs-3" >
		<?php $this->load->view('users/log_view');
		?>
	</div>

	<div class="col-xs-9">
		<?php $this->load->view($main_view);?>
	</div>
   

</div>

</body>
</html>