﻿<?php
session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'news portal');
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from user where username ='$username' && password = '$password'";
$rank="select * from properties where username='$username'";
$result = mysqli_query($con, $s);
$result2=mysqli_query($con,$rank);
$num = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result2);
		
if($num==1 && $row['rank']=="user")
{
			$_SESSION['username']=$username;
			echo '<script type="text/javascript">'; 
			echo 'alert("A bejelentkezés sikeres volt!");'; 
			echo 'window.location.href = "home.php";';
			echo '</script>';
			exit();
}elseif($num==1 && $row['rank']=="admin")
{
			echo '<script type="text/javascript">'; 
			echo 'alert("A bejelentkezés sikeres volt!");'; 
			echo 'window.location.href = "adminsite.php";';
			echo '</script>';
}else
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Sikertelen bejelentkezés, a felhasználó név vagy jelszó nem megfelelő. Próbálja újra!");'; 
	echo 'window.location.href = "index.html";';
	echo '</script>';
}