<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');

mysqli_select_db($con, 'news portal');

$username=$_SESSION['username'];

$surname=$_POST['surname'];
$lastname=$_POST['lastname'];
$rank=$_POST['rank'];
$gender=$_POST['gender'];

$s = " select * from user where username = '$username'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==0){
	echo '<script type="text/javascript">'; 
	echo 'alert("HIBA: Nincs az adatbázisban a felhasználó!");'; 
	echo 'window.location.href = "index.html";';
	echo '</script>';
	exit();
	
	
}elseif($rank=="admin")
{
	$reg= "insert into properties(surname, lastname, gender, username, rank) values ('$surname', '$lastname', '$gender', '$username', '$rank')";
	mysqli_query($con, $reg);
	$_SESSION['username']=$username;
	echo '<script type="text/javascript">'; 
	echo 'alert("Köszönjük! Lépjen be a hírek feltöltéséhez.");'; 
	echo 'window.location.href = "index.html";';
	echo '</script>';
}elseif($rank=="user")
{
	$reg= "insert into properties(surname, lastname, gender, username, rank) values ('$surname', '$lastname', '$gender', '$username', '$rank')";
	mysqli_query($con, $reg);
	$_SESSION['username']=$username;
	echo '<script type="text/javascript">'; 
	echo 'alert("Adja meg a preferenciáit!");'; 
	echo 'window.location.href = "interests.php";';
	echo '</script>';
}


?>