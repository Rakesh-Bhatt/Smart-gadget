<?php
if(isset($_POST['login'])){
	$err = array();

	if(isset($_POST['nid']) && !empty($_POST['nid']) && trim($_POST['nid']) !='')
	{
		$nid=$_POST['nid'];
	}
	else
	{
		$err['nid']="Enter newsID";
	}
	if(isset($_POST['description']) && !empty($_POST['description']) && trim($_POST['description']) !='')
	{
		$description=$_POST['description'];
	}
	else{
		$err['description']="Enter description";
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
		<label>NewsId</label>
		<input type="number" name="nid">
			<?php if(isset($err['nid'])){
				echo $err['nid'];
			} ?> <br> 
		<label>Description</label>
		<input type="text" name="description">
			<?php if(isset($err['description'])){
				echo $err['description'];
			} ?> <br> 	
		<input type="submit" name="login" value="Sign In">

	</form>
</body>
</html>