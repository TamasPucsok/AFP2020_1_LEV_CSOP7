<?php

session_start();
$con = mysqli_connect('localhost', 'root','123456');

mysqli_select_db($con, 'news portal');

$title=$_POST['title'];
$url=$_POST['url'];

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

$s = " select * from news where title = '$title'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
	echo '<script type="text/javascript">'; 
	echo 'alert("Ez a hír már szerepel az adatbázisban, próbáld meg egy másik hírrel.");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
	exit();
	
}else
{
	$reg= " insert into news(title, url, life, business, culture, sport, tech, economy) values ('$title', '$url', '$life', '$business', '$culture', '$sport', '$tech', '$economy')";
	mysqli_query($con, $reg);
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikeres feltöltés!");'; 
	echo 'window.location.href = "adminsite.php";';
	echo '</script>';
	
}
?>