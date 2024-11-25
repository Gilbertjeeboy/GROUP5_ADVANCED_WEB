<!DOCTYPE html>
<?php
	require 'connection.php';
	if ($_SERVER['REQUEST_METHOD']=='POST')
	 {
		$usr=$_POST['user'];
		$email=$_POST['email'];
		$pwd=$_POST['pswd'];

		$sql="SELECT * FROM users WHERE email='$email' AND username='$usr' AND password='$pwd' ";
		if(mysqli_query($con,$sql))
		{
			echo "welcome";
			session_start();
			$data=mysqli_fetch_assoc(mysqli_query($con,$sql));
			$_SESSION['user']=$data['username'];
			$_SESSION['email']=$email;
			$user_id=$_SESSION['id']=$data['user_id'];
			setcookie("user_id",$data['$user_id'],time()+3600,"/");
			echo $_COOKIE["n"];
			header("location:index.php");
		}
			else{
				die("Registration failed".mysqli_connect_error($sql));	
			}
	}
?>
<html>
<head>
	<title>MIXED MARKETING-CONTACT</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<header>
		<ol>
			<li>| (782)824-186|</li>
			<li>| support@mixedmarketing.com</li>
			<li class="h">We are open: Mon-Sat 9.00-16.00</li>
		</ol>
</header>
<nav>
	<ul>	
		<li class="logo"><h3>MIXED MARKETING</h3></li>
		<li><a href="index.php">HOME</a></li>
		<li class="hm"><a href="products.php">PRODUCTS</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li class="hnn"><a href="contact.php"> CONTACT</a></li>
			
			
		</ul>
</nav>
<main class="login">
	<form  method="POST"><br><br>
		<fieldset>
			<legend><h2>LOGIN TO MIXED WEBSITES</h2></legend>
		<input type="text" name="user" placeholder="Enter username" required><br><br>
		<input type="email" name="email" placeholder="Email" required><br><br>
		<input type="password" name="pswd" placeholder="Enter password" required><br><br>
		<input type="submit" name="" value="LOGIN"><br><br><br>
	</fieldset>
	</form>
</main>
<footer>
			<br>
		&copy;2024  <b style="color: seagreen;cursor: pointer;">SHINE BAKERY</b> || All right reserved
</footer>
</body>
</html>