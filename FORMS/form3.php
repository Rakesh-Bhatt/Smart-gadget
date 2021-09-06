<?php
if(isset($_POST['submit'])){
	$err = array();

	if(isset($_POST['gadgetID']) && !empty($_POST['gadgetID']) && trim($_POST['gadgetID']) !='')
	{
		$gadgetID=$_POST['gadgetID'];
	}
	else
	{
		$err['gadgetID']="Enter gadgetID";
	}
	if(isset($_POST['Brand']) && !empty($_POST['Brand']) && trim($_POST['Brand']) !=''){
		if(strlen($_POST['Brand']) <4){
			$err['Brand']="Brand must be more than 4 character";
		}
		else{
			echo $Brand=$_POST['Brand'];
		}
	}
	else{
		$err['Brand']="Enter brand";
	}
	if(isset($_POST['Detail']) && !empty($_POST['Detail']) && trim($_POST['Detail']) !='')
	{
		$Detail=$_POST['Detail'];
	}
	else{
		$err['Detail']="Enter detail";
	}














	if (count($err)==0) {
		//database connections
	$conn=mysqli_connect('localhost','root','','smartdb');
	if (!$conn) 
	{
		die('database connection error ');
	}
	
	//print_r($conn);
	//echo '<pre>';
	print_r($conn);
	
	//query to insert
	echo $sql="Insert into gadget(gadgetID,Brand,Details)
	values ('$gadgetId','$b','$Detail')";
	mysqli_query($conn,$sql);
	print_r($sql);

	}

	print_r($_POST['Brand']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
</head>
<body>
	<form action="" method="post">
		<label>GadgetId</label>
		<input type="number" name="gid">
			<?php if(isset($err['gadgetID'])){
				echo $err['gadgetID'];
			} ?> <br> 
		<label>Brand</label>
		<input type="text" name="Brand">
			<?php if(isset($err['Brand'])){
				echo $err['Brand'];
			} ?> <br> 	
		<label>Detail</label>
		<input type="text" name="Detail">
			<?php if(isset($err['Detail'])){
				echo $err['Detail'];
			} ?> <br> 	
		<input type="submit" name="submit" value="submit">

	</form>
</body>
</html>