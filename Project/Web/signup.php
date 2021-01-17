<?php
session_start();

$con = mysqli_connect('localhost', 'root','123456');

mysqli_select_db($con, 'news portal');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$s = " select * from user where username = '$username'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
	echo '<script type="text/javascript">'; 
	echo 'alert("Ez a felhasználó már foglalt. Kérem próbálja újra!");'; 
	echo 'window.location.href = "index.html";';
	echo '</script>';
	exit();
	
}else
{
	$reg= " insert into user(username, password, email) values ('$username', '$password', '$email')";
	mysqli_query($con, $reg);
	echo '<script type="text/javascript">'; 
	echo 'alert("Felhasználónevét tároltuk, kérem adja meg a további adatokat a következő oldalon.");'; 
	echo 'window.location.href = "properties.php";';
	echo '</script>';

}

?>