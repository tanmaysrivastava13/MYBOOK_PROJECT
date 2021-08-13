<?php
session_start();

	include("classes/connect.php");
	include("classes/login11.php");
	//include("classes/user.php");
	$email="";
	$password="";



	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$login = new Login();
		$result =$login -> evaluate($_POST);

		if($result != "")
		{
			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>Te following errors occured:<br><br>";
			echo $result ;
			echo "</div>";
		}
		else
		{
			header("Location:profile1.php" );
			die;
		}
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		


		//echo "<pre>";
		//print($_POST);
		//echo "</pre>";
	}

	



?>

<!DOCTYPE html>
<html>
	<head>
		<title>MyBook |Login</title>
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
				<a href="signup.php" >
					<div id="signup_button">Signup</div> 
				</a>
			</div>


			<div id="bar2"> 
				<form method="post">

					Login to MyBook <br><br>
					<input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="email"><br><br>
					<input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="password"><br><br>
					<input type="submit" id="button" value="Log in">

				</form>


			</div>
	</body>
</html>