<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');

mysqli_select_db($con, 'news portal');

$username=$_POST['username'];

$life = FALSE;
if(isset($_POST['life'])){
	$life =TRUE;
}

$business = FALSE;
if(isset($_POST['business'])){
	$business =TRUE;
}

$culture = FALSE;
if(isset($_POST['culture'])){
	$culture =TRUE;
}

$sport = FALSE;
if(isset($_POST['sport'])){
	$sport =TRUE;
}

$tech = FALSE;
if(isset($_POST['tech'])){
	$tech =TRUE;
}

$economy = FALSE;
if(isset($_POST['economy'])){
	$economy =TRUE;
}

$s = " select * from interests where username = '$username'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
	echo '<script type="text/javascript">'; 
	echo 'alert("A felhasználó érdeklődési köre már korábban tárolva lett, próbáld meg újra más felhasználónévvel!");'; 
	echo 'window.location.href = "interests.php";';
	echo '</script>';
	exit();
	
}else
{
	$reg= " insert into interests(username, life, business, culture, sport, tech, economy) values ('$username', '$life', '$business', '$culture', '$sport', '$tech', '$economy')";
	mysqli_query($con, $reg);
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres mentés!");'; 
	echo 'window.location.href = "index.html";';
	echo '</script>';
	
}
?>