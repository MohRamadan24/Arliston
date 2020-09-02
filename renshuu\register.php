<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("Location:Home.php");
		exit;
	}
	require "function.php";
	if (isset($_POST['submit'])) {
		if ( registrasi($_POST) > 0) {
			echo "<script>
				alet('Akun berhasil dibuat')
			</script>";
			header("Location:login.php");
		}
		else{
			mysqli_error($conn);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log/Reg</title>
	<link rel="stylesheet" type="text/css" href="css&gambar/register.css">
</head>
<body>
	<header>
		<div class="BoxNav">
			<ul>
				<li><a href="Guest.php">Home</a></li>
			</ul>
		</div>
		<div class="Box">
			<div class="Button-Box">
				<div id="btn"></div>
				<button type="button"  class="LogReg">Log In</button>
				<button type="button" id="color" class="LogReg" >Register</button>
			</div>

			<form id="Register" class="input" action="" method="post">
				<input type="text" name="id" class="input-field" placeholder="User Id" required min="5" max="20">
				<input type="Password" name="pass1" class="input-field" placeholder="Enter Password" required min="3" max="30">
				<input type="Password" name="pass2" class="input-field" placeholder="Confirm Password" required min="3" max="30">
				<input type="checkbox" class="chech-box"> <span>I agree to the terms & condition</span>
				<button type="submit" class="submit-btn" name="submit">Register</button>
				<p>Do you have an account?<a href="Login.php">Sign In</a></p>
			</form>
		</div>
	</header>
</body>
</html>