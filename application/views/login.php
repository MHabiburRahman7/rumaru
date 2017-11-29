<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / login</span>
    <h2>Login</h2>
</div>
</div>
<!-- banner -->

<?php
	if(isset($_SESSION['success'])){
		echo '<div class = "alert alert-success">';
		echo $_SESSION['success'].'</div>';
	}
	echo validation_errors('<div class = "alert alert-danger">', '</div>');
?>

<div class="container">
<div class="spacer">
<div class="row register">
	<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
		<form action="" method="post">
            <input type="text" class="form-control" placeholder="Full Name" name="name">
            <input type="password" class="form-control" placeholder="Password" name="password">
			<!--
			<input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
			-->
			<input type="submit" class="btn btn-success" name="loginSubmit"></button>
		</form>
	</div>
  
</div>
</div>
</div>

<?php include'footer.php';?>