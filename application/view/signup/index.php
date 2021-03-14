
<?php
	error_reporting(0);

?>
<?php
	if($_GET['mode']=="signup"){
		echo '<div class="alert alert-success alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;right:205px;width:270px;">
    <a href="' . URL . 'signup" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  You have successfully signed up.
  </div>';
	}
?>

<?php
	if($_GET['mode']=="wrong1"){
		echo '<div class="alert alert-info alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;right:205px;width:270px;">
    <a href="' . URL . 'signup" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Password did not matched or check your Id.
  </div>';
	}
?>

<?php
	if($_GET['mode']=="wrong2"){
		echo '<div class="alert alert-info alert-dismissable fade in" style="z-index:999;position:fixed;top:185px;right:205px;width:270px;">
    <a href="' . URL . 'signup" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong>  Username or Password incorrect.
  </div>';
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Wendy+One" rel="stylesheet">
	</head>

	<body style="background-image: url(./img/library.jpg);background-repeat: no-repeat;">
		<div class="container" style="border-radius:5px;background-color:black;opacity:0.7;color:white;min-height:120px;border: 1px solid black;margin-top: 50px">
			<div class="row">
			<div class="col-sm-5" style="font-family:Luckest Guy;padding-left:40px;margin-top: 15px;"><h1>WELCOME TO LIBRA</h1></div>
			<div class="col-sm-7" style="margin-top: 40px;">
			<form  action="<?php echo URL; ?>signup/login" method="POST" class="form-inline">
				<div class="form-group">
					<label>Username</label>
					<input  style="max-width:200px" type="text" class="form-control" name="username" value="" autofocus required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input  style="max-width:200px" type="password" class="form-control" name="password" value="" required>	
				</div>
				<input type="submit" class="btn btn-primary" name="submit_checklogin" value="Login"><br><br>
			</form>
			</div>
			</div>
		</div>

		<br/>
		<br/>

		<div style="position: fixed;top:260px;right: 100px;border: 1px solid black;padding:0 10px 0 10px;background-color: white">
			<h5><strong>Note:</strong> You must enter your registered student id and name.</h5>
		</div>


	
		<div class="container" style="padding-top:10px;">
			

			<div class="col-sm-8" style="text-align:right;min-width:200px;">
			<h2>Sign Up</h2>
			<p style="font-size: 16px">It's for you and always will be.<br><br>
			</div>
		

			<form class="form-horizontal"  method="post" action="<?php echo URL; ?>signup/sign" >
			
			<div class="form-group">
				<label style="font-size:16px" class="control-label col-sm-8">Student Id:</label>
				<div class="col-sm-4"> 
					<input style="max-width:210px" type="text" class="form-control" name="student_id" autofocus required>
				</div>
			</div>
			<div  class="form-group">
				<label style="font-size:16px" class="control-label col-sm-8">Username:</label>
				<div class="col-sm-4"> 
					<input style="max-width:230px" type="text" class="form-control"  name="name" required>
				</div>
			</div>
			<div  class="form-group">
				<label style="font-size:16px" class="control-label col-sm-8">Password:</label>
				<div class="col-sm-4"> 
					 <input style="max-width:200px" class="form-control"  type="password" name="pass1" required>
				</div>	
			</div>
			<div  class="form-group">
				<label style="font-size:16px" class="control-label col-sm-8">Confirm Password:</label>
				<div class="col-sm-4"> 
					<input style="max-width:200px" type="password" class="form-control" name="pass2" required>
				</div>
			</div>
			<div  class="form-group">
				<label style="font-size:16px" class="control-label col-sm-8"></label>
				<div class="col-sm-4" style="max-width:100px;"> 
					<input style="float: right;" type="submit" class="btn btn-success" name="submit_signup" value="sign up">
				</div>
				<br><br><br>
			</div>
			
		</div>
	</body>
</html>
