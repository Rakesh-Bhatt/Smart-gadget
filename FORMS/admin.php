<?php
if(isset($_POST['login'])){
	$err = array();

	if(isset($_POST['aid']) && !empty($_POST['aid']) && trim($_POST['aid']) !=''){
		$aid=$_POST['aid'];
	}
	else{
		$err['aid']="Enter adminID";
	}

	if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password']) !=''){
		if(strlen($_POST['password']) <8){
			$err['password']="Password must be more than 8 character";
		}
		else{
			echo $password=$_POST['password'];
		}
	}
	else{
		$err['password']="Enter password";
	}

	if(isset($username) && isset($password)){
		if($username == 'admin' && $password == 'admin123'){
			echo "Login success";
		}
		else{
			echo "Login failed";
		}
	}
//print_r($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
</head>
<body>
	<form action="" method="post">
		<label>AdminID</label>
		<input type="number" name="aid">
			<?php if(isset($err['aid'])){
				echo $err['aid'];
			} ?> <br> 
		<label>Password</label>
		<input type="password" name="password">
			<?php if(isset($err['password'])){
				echo $err['password'];
			} ?> <br> 
		<input type="submit" name="login" value="Sign In">
	</form>
	</div>
</body>
</html>