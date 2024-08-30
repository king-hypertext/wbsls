<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['username'] = $user_data['username'];
						header("Location: logform.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login</title>
</head>
<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid ;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
                }

	#box{

		background-color: black;
		margin: auto;
		width: 300px;
		padding: 10px;
	}
header {
   display: flex;
   justify-content: space-between;
   align-items: right;
   background-color: black;
   color: #fff;
   padding: 0.5px;
  }
  header a {
   color: #fff;
   text-decoration: none;
   margin-right: 10px;
  }
body{
background-color: black;
background-size:158px 150px;
height:660px;}
 #button {
    display: block;
    margin: 0 auto;
  }
 .container {
    display: flex;
    justify-content: center;
  }
#text::placeholder {
    text-align: center;
}
form{border: none;}
	</style>
<body>
<header>
  <nav>
   <a href="index.php" style="font-size:16px;">Home</a>
   </nav> 
</header>
	

	<div id="box"><br><br><br><br><br><br>
		
		<form method="post">
<div style="text-align: center;">
  <img src="../img/img/admin.png" alt="User Icon" width="180" height="100" />
</div>
                <div style="font-size: 14px;margin: 10px;color: red;text-align:center;">Login</div>

			<input id="text" type="text" name="username" placeholder="Enter your Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter your Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<div class="container">
  
</div><br><br>
		</form>
	</div>
</body>
</html>