<?php 
	require 'connect.php';
	if ($_SERVER['REQUEST_METHOD']=='POST')
	 {
		$nm=$_POST['nms'];$usr=$_POST['user'];
		$tel=$_POST['phn'];$email=$_POST['email'];
		$pwd=$_POST['pswd'];
		$role=$_POST['role'];

		$sql="INSERT INTO users (names,email,telephone,username,password,role_id)   VALUES ('$nm','$email','$tel','$usr','$pwd',$role)";
		if(mysqli_query($con,$sql))
		{
			echo "Registered success!";
		}
			else{
				die("Registration failed".mysqli_connect_error($sql));	
			}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div class="container">
	<nav><br>
			<h1>WELCOME TO MIXED MARKETING</h1>
		</nav>
		<center>	
		<form method="POST">
			<h2>SIGNUP to MIXED MARKETING</h1>
			<input type="text" name="nms" placeholder="Enter your Fullnames...." required><br><br>		
			<input type="tel" name="phn" placeholder="&phone;Enter your Phonenumber..." required><br><br>
			<label>Choose a role</label><select name="role">
				<?php
				$sl="SELECT * FROM roles";
				$ql=mysqli_query($con,$sl);
				while($data=mysqli_fetch_assoc($ql)){
					?>
					<option value="<?php echo$data['role_id']?>"><?php echo$data['role_name']?></option>
				<?php 
				}
				?>
			</select><br><br>		
			<input type="text" name="user" placeholder="Enter your username..." required><br><br>		
			<input type="email" name="email" placeholder="Enter your email...." required><br><br>		
			<input type="password" name="pswd" placeholder="Enter your password.." required><br><br>
			<input type="password" name="pswd" placeholder="Re-Enter password..." required><br><br>	
			<button type="submit">Signup</button>
			<h3 id="signup" onclick="login()">I have account</h3>
			<h3 id="home" onclick="back()">Back to Home</h3>
		</form>
	</center>
	</div>
		<footer><br>
		<strong>COPYRIGHT &copy; <?php
		 $t=date("m");
		 echo date('Y'); ?> MIXED MARKETING
		 </strong>
	</footer>
</body>
<script src="js/script.js">

	</script>
</html>