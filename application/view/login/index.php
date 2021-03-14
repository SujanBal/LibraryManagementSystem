<?php
	error_reporting(0);

?>
<?php
	if($_GET['mode']=="wrong"){
		echo '<div class="alert alert-info alert-dismissable fade in" style="z-index:999;position:fixed;top:275px;right:205px;width:270px;">
    <a href="' . URL . 'login" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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
	</head>

	<body style="background-image: url(./img/books.jpg);background-repeat: no-repeat;background-size: cover">
		<div style="background-color:white;opacity:0.8;box-shadow: 0px 2px 10px black;border-radius:7px;border: 2px solid black;height: 400px;width: 400px;margin: 0 auto;margin-top: 130px;">
			<div style="width:100%;border-bottom: 2px solid black;height: 90px;padding-top: 5px">
				<h2 style="text-align:center;padding-left: 18px"> Staff  <span style="font-weight:bold;font-size: 40px;color:green">Login</span> Form</h2>
			</div>
			<div style="margin:18px;">
				<form action="<?php echo URL; ?>login/checklogin" method="POST">
					<div class="form-group">
						<label style="font-size: 22px">Username</label><br>
						<input style="height:50px" class="form-control" type="text" name="username" value="" autofocus required>
					</div>
					<div class="form-group">
						<label style="font-size: 22px">Password</label>
						<input style="height:50px" class="form-control" type="password" name="password" value="" required>
					</div><br>
					<input style="width:100px;height:40px;float: right" class="btn btn-success" type="submit" name="submit_checklogin" value="Login">
				</form>
			</div>
		</div>
	</body>
</html>