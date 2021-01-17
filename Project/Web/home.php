<?php
session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'news portal');
$username=$_SESSION['username'];

$s="select * from interests where username ='$username'";
$result = mysqli_query($con, $s);
$row=mysqli_fetch_assoc($result);

$life = $row['life'];
$business = $row['business'];
$culture = $row['culture'];
$sport = $row['sport'];
$tech = $row['tech'];
$economy = $row['tech'];

if($life==TRUE || $business==TRUE || $culture==TRUE || $sport==TRUE || $tech==TRUE || $economy==TRUE)
	{
		$news="select * from news where life='TRUE'";
		$result2=mysqli_query($con,$news);
		$row1=mysqli_fetch_assoc($result2);
	
		$news2="select * from news where business='TRUE'";
		$result3=mysqli_query($con,$news2);
		$row2=mysqli_fetch_assoc($result3);
	
		$news3="select * from news where culture='TRUE'";
		$result4=mysqli_query($con,$news3);
		$row3=mysqli_fetch_assoc($result4);
	
		$news4="select * from news where sport='TRUE'";
		$result5=mysqli_query($con,$news4);
		$row4=mysqli_fetch_assoc($result5);

		$news5="select * from news where tech='TRUE'";
		$result6=mysqli_query($con,$news5);
		$row5=mysqli_fetch_assoc($result6);

		$news6="select * from news where economy='TRUE'";
		$result7=mysqli_query($con,$news6);
		$row6=mysqli_fetch_assoc($result7);
	}
	else
	{
	echo '<script type="text/javascript">'; 
	echo 'alert("A preferenciának megfelelően 1 hír sincs!");'; 
	echo 'window.location.href = "index.html";';
	echo '</script>';
	}
	
$apiKey = "API KEY";
$cityId = "CITY ID";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

?>
<html>
<head>
<meta charset="UTF-8">
  <title>Bejelentkezés vagy regisztráció</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>

 <body>
<div style="text-align: center">
	<h1>Sikeres bejelentkezés</h1>
</div>

<h2> Üdvözöljük <?php echo $_SESSION['username']; ?> </h2>

<h1> <?php echo $row1['url'] ?> </h1>
<h1> <?php echo $row2['url'] ?> </h1>
<h1> <?php echo $row3['url'] ?> </h1>
<h1> <?php echo $row4['url'] ?> </h1>
<h1> <?php echo $row5['url'] ?> </h1>

<a href="logout.php">Kijelentkezés</a>
</body>
</html>