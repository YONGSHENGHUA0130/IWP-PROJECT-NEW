<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.html");
						die;
					}
				}
			}
		}
		
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		width: 300px;
	background: #fff;
	margin: 10px auto;
	border-radius: 10px;
	box-sizing: border-box;
	padding: 15px;
	transform: scale(1.2);
	box-shadow: 0px 0px 0px 0px #cdcdcd;
	}

	#button{

		padding: 15px;
		width: 150px;
		color: white;
		background-color:burlywood ;
		border: none;
	}

	#box{
        
    text-align: center;
	height: 100vh;
	width: 100%;
	float: left;
	background-image: url("../images/Genting.png");
	background-size: 100% 100% ;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 30px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php"  style="font-size: 20px;margin: 10px;color: black;">Click to Register</a><br><br>
		</form>
	</div>
</body>
</html>