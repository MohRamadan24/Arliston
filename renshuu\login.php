<?php 
	session_start();
	if(isset($_SESSION['login'])){
		header("Location:Home.php");
		exit;
	}
	require "function.php";
	if (isset($_POST['submit'])) {
		if ( login($_POST) > 0) {
			echo "<script>
				alet('Akun berhasil dibuat')
			</script>";
			$_SESSION['login']=true;	
			header("Location:Home.php");
		}else{
			mysqli_error($conn);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log/Reg</title>
	<link rel="stylesheet" type="text/css" href="css&gambar/Login.css">
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
				<button type="button" id="color" class="LogReg">Log In</button>
				<button type="button" class="LogReg" >Register</button>
			</div>
			
			<form id="Login" class="input" action="" method="post">
				<input name="id" type="text" class="input-field" placeholder="User Id" required>
				<input name="pass" type="Password" class="input-field" placeholder="Enter Password" required>
				<input type="checkbox" class="chech-box"> <span>Remember Password</span>
				<button type="submit" class="submit-btn" name="submit">Log In</button>
				<p>Do you have an account?<a href="register.php">Sign Up</a></p>
			</form>
		</div>
	</header>
</body>
</html>