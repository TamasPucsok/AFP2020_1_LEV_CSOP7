<?php
session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'news portal');
$username=$_POST['username'];
$password=$_POST['password'];
		
