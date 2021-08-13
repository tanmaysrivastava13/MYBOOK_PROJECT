<?php
	include("classes/connect.php");
	include("classes/signup.php");


	$first_name="";
	$last_name="";
	$gender="";
	$email="";




	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$signup = new Signup();
		$result =$signup -> evaluate($_POST);
		if($result != "")
		{
			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>Te following errors occured:<br><br>";
			echo $result ;
			echo "</div>";
		}
		else
		{
			header("Location:login11.php" );
			die;
		}
		
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];


		//echo "<pre>";
		//print($_POST);
		//echo "</pre>";
	}

	



?>
<html>
	<head>
		<title>MyBook |signUp</title>
	</head>
	<style>
	input:focus{
		outline: none;
	}
	#bar{
		height:100px;
		background-color:#3c5a99;
		color:#d9dfeb;
		padding: 4px;
	}
	#signup_button{
		background-color: #42b72a;
		width: 70px;
		text-align: centre;
		padding: 4px;
		border-radius: 4px;
		float: right;
	}
	#bar2{
		background-color:white;
		width:800px;
		margin:auto;
		margin-top: 100px;
		padding: 10px;
		padding-top: 100px;
		text-align: center;
		font-weight: bold;

	}
	#text{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #ccc; 
		padding: 4px;
		font-size: 14px;
	}
	#button{
		width: 300px;
		height: 40px;
		border-radius: 4px;
		font-weight: bold;
		border: none;
		background-color:#3c5a99;
		color: white;
	}



	</style>
	<body style="font-family:tahoma;background-color: #e9ebee;">
			<div id="bar">
				<div style="font-size:40px;">MyBook</div> 
				<a href="login11.php">
				<div id="signup_button">Log in</div> 
			</a>
			</div>


			<div id="bar2"> 
				SignUp to MyBook <br><br>
					<form method="post" action=""> 
						<input value="<?php echo $first_name ?>"  name="first_name"   type="text" id="text" placeholder="First name"><br><br>
						<input value="<?php echo $last_name ?>" name="last_name"  type="text" id="text" placeholder="Last name"><br><br>
						
						<span style="font-weight:normal;">Gender:</span><br>
						<select name="gender" id="text">	


						<option><?php echo $gender ?></option>
						<option>Male</option>	
						<option>Female</option>	

						</select><br><br>
						<input value="<?php echo $email ?>" name= "email"   type="text" id="text" placeholder="email"><br><br>
						<input name="password" type="password" id="text" placeholder="password"><br><br>
						<input name="password1" type="password" id="text" placeholder="confirm password"><br><br>

						<input type="submit" id="button" value="SignUp">


					</form>

			</div>
	</body>
</html>