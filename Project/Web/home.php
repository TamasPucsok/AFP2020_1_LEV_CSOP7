<?php
session_start();
$con = mysqli_connect('localhost', 'root','123456');
mysqli_select_db($con, 'news portal');
$username=$_SESSION['username'];
mysqli_query($con, "DROP TABLE hirek");
$s="select * from interests where username ='$username'";
$result = mysqli_query($con, $s);
$row=mysqli_fetch_assoc($result);

$life = $row['life'];
$business = $row['business'];
$culture = $row['culture'];
$sport = $row['sport'];
$tech = $row['tech'];
$economy = $row['economy'];
$result1=FALSE;


if($life==TRUE)
	{
		if(!$result1)
		{
			mysqli_query($con,"CREATE TABLE hirek AS SELECT title, url FROM news where life=$life");
			$result1=TRUE;
		}
		else
		{
			mysqli_query($con, "INSERT INTO hirek (title, url) SELECT title, url FROM news where life=$life");
		}
	}
if($business==TRUE)
	{
		if(!$result1)
		{
			mysqli_query($con,"CREATE TABLE hirek AS SELECT title, url FROM news where business=$business");
			$result1=TRUE;
		}
		else{
			mysqli_query($con, "INSERT INTO hirek (title, url) SELECT title, url FROM news where business=$business");
			}
	}
if($culture==TRUE)
	{
		if(!$result1)
		{
			mysqli_query($con,"CREATE TABLE hirek AS SELECT title, url FROM news where culture=$culture");
			$result1=TRUE;
		}
		else{
			mysqli_query($con, "INSERT INTO hirek (title, url) SELECT title, url FROM news where culture=$culture");
			}
	}
if($sport==TRUE)
	{
		if(!$result1)
		{
			mysqli_query($con,"CREATE TABLE hirek AS SELECT title, url FROM news where sport=$sport");
			$result1=TRUE;
		}
		else{
			mysqli_query($con, "INSERT INTO hirek (title, url) SELECT title, url FROM news where sport=$sport");
			}
	}
if($tech==TRUE)
	{
		if(!$result1)
		{
			mysqli_query($con,"CREATE TABLE hirek AS SELECT title, url FROM news where tech=$tech");
			$result1=TRUE;
		}
		else{
			mysqli_query($con, "INSERT INTO hirek (title, url) SELECT title, url FROM news where tech=$tech");
			}
	}
	
if($economy==TRUE)
	{
		if(!$result1)
		{
			mysqli_query($con,"CREATE TABLE hirek AS SELECT title, url FROM news where economy=$economy");
			$result1=TRUE;
		}
		else
		{
			mysqli_query($con, "INSERT INTO hirek (title, url) SELECT title, url FROM news where economy=$economy");
		}
	}
?>


<html>
<head>
<meta charset="UTF-8">
  <title>Bejelentkezés vagy regisztráció</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>

 <body>

<div style="text-align: center">
	<h1>Sikeres bejelentkezés</h1>
</div>

<h2> Üdvözöljük <?php echo $_SESSION['username']; ?> !</h2>

<h3> Az alábbi táblázatban láthatja az Ön preferenciáinak megfelelő híreket!</h3>

<?php

$result2=mysqli_query($con,"select * from hirek group by title");
$num = mysqli_num_rows($result2);
if($num==0)
{echo "Nincs megjelenítendő hír!";}
else{
echo "<table border = '1'>
<tr>

<th>Hír címe</th>

<th>URL</th>
</tr>";

while($row = mysqli_fetch_array($result2))

  {
	  echo "<tr>";
	  echo "<td>" . $row['title'] . "</td>";
	  echo "<td>" . $row['url'] . "</td>";
	  echo "</tr>";

  }

  echo "</table>";
}
?>
<br>
<br>
<br>
<a href="logout.php">Kijelentkezés</a> 


</body>
</html>