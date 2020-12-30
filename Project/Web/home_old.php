<?php
session_start();
$con = mysqli_connect('localhost', 'root','123456');
$database ="news portal";
$db_found=mysql_select_db($con, $database);
$username=$_POST['username'];
if($db_found){
	
	$s = " select * from user where username = '$username'";
	$result = mysqli_query($con, $s);
	$db_field=mysql_fetch_assoc($result)
	$life=$db_field['life'];
	$business=$db_field['business'];
	$culture=$db_field['culture'];
	$sport=$db_field['sport'];
	$tech=$db_field['tech'];
	$economy=$db_field['economy'];
	
	$s= " select * from news where life = '$life'";
	
	}

else{
	echo " Database NOT FOUND";
}
	echo $life;
	echo $business;
	echo $culture;
	echo $sport;
	echo $tech;
	echo $economy;
	
mysql_close($con);
?>

<html>
<head>
<title> News </title>

</head>
<body>
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>

</body>

</html>