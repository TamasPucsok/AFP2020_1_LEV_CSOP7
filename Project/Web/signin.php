<?php
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