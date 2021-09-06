
<?php
$err=array();//define an blank array to store the error message

session_start();
	if(isset($_POST['login']))
	{
		$err=array();
		if(isset($_POST['username']) && !empty($_POST['username'])&& trim($_POST['username'])!='')
		{
			if(strlen($_POST['username'])<4)
			{
				$err['username']= "Username must be 4 character";
				echo '<br>';
			}
			else
			{
			$username=$_POST['username'];
			//echo '<br>';
		    }
		}
		else
		{
			$err['username']= "Enter Username";
			echo '<br>';
		}
		
		if(isset($_POST['password']) && !empty($_POST['password'])&& trim($_POST['password'])!='')
		{
			if(strlen($_POST['password'])<6)
			{
				$err['password']="Password must be 6 character";
				echo '<br>';
			}
			else
			{
			$password= md5($_POST['password']);
			
		    }
		}
		else
		{
			$err['password']= "Enter Password";
			echo '<br>';
		}
		//check for the both name and password
	if (isset($username) && isset($password)) 
	{
		//connection database
		require "connection.php";

	echo $sql = "Select * from tbl_admin where status=1 and username='$username' and
		password='$password'";
		$result = mysqli_query($conn,$sql);
		//fetch array
		$data = mysqli_fetch_array($result);
		if($data)
		{
			//start Session
			session_start();
			//store varriable in  session
			$_SESSION['username']=$username;
			//assign time for session
			$_SESSION['time()']=time()+600;

			if(isset($_POST['remember']))
			{
				setcookie('username',$username,time()+24*60*60);
			}
			//redirect to another page
			header('location:welcome.php');
		}
		else
		{
			echo "Login Failed";
		}
	}
}
	if (isset($_SESSION['username'])) 
	{
		$_SESSION['time']=time()+600;
		header('location:welcome.php');
	}

	if (isset($_COOKIE['username'])&& !empty($_COOKIE['username'])) 
	{
		$_SESSION['username']=$_COOKIE['username'];
		$_SESSION['time']=time()+600;
		header('location:welcome.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form </title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<?php
	if (isset($_GET['msg'])&& $_GET['msg']==1) {
		echo "Please Login To Continue";
	}
	?>
	<div id="login-box">
		<!--<img src="avatar.png" id="avtar">-->
		<div id="loginform">	
			<form action="" method="post">
				<h2>Login Form</h2>
				<label>Username:</label>
				<div>
					<input type="text" name="username" id="username"><br>
					<div id="usernamestyle">
						<?php if(isset($err['username']))
						{
							echo $err['username'];
						}
						?>
					</div>
				</div>
				<label>Password:</label>
				<div>
					<input type="password" name="password" id="password"><br>
					<div id="passwordstyle">
						<?php if(isset($err['password']))
						{
							echo $err['password'];
						}
						?>
					</div>
				</div>
					<br>
					<input type="checkbox" name="remember" value="remember">Remember me
					<input type="submit" name="login" id="login" value="Login">
				</div>

				<div id="frgpass">
					<a href="">Forgot password?</a>
				</div>
				<div>

			</form>
		</div>
	</div>

</body>
</html>