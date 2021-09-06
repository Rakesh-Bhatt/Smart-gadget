<?php
session_start();
//check login state of user using username index
if (!isset($_SESSION['username'])) {
	header('location:loginfrm.php?msg=1');
}
if (isset($_SESSION['time'])&& $_SESSION['time']< time())
 {
	header('location:loginfrm.php?msg=1');
}
else
{
	$_SESSION['time']=time()+600;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome come</title>
</head>
<body>

<?php require 'menu.php';?>

HI WELCOME <?php echo $_SESSION['username'];?>,<br>
<a href="logout.php">Logout</a>

<?php require 'footer.php';?>
</body>
</html>