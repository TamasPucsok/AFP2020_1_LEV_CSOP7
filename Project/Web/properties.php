<html>
<head>
	<title> Felhasználó adatok </title>
	<link rel="stylesheet" type="text/css" href="prop_style.css">
	<link rel="stylesheet" type ="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
     <div class="container">
	 <div class="details-box">
     <div class="row">
     
	 <div class="col-md-10 details">
     <h2>Felhasználó adatok </h2>
     <form action="push.php" method="post">
     
		<div class="form-group">
		 <label> Korábban megadott felhasználónév </label>
		 <input type="text" name="username" class="form-control" required>
		</div>
		
		<div class="form-group">
		 <label> Vezetéknév </label>
		 <input type="text" name="surname" class="form-control" required>
		</div>
	 
		<div class="form-group">
		 <label> Keresztnév </label>
		 <input type="text" name="lastname" class="form-control" required>
		</div>
		
		<div class="select-block">
			<select name="rank">
				<option value="" disabled selected>Kérjük válasszon</option>
				<option value="user">Felhasználó</option>
				<option value="admin">Adminisztrátor</option>
			</select>
		</div>
		
		<div class="select-block">
			<select name="gender">
				<option value="" disabled selected>Kérjük válasszon</option>
				<option value="male">Férfi</option>
				<option value="female">Nő</option>
				<option value="other">Egyéb</option>
			</select>
		</div>
		
		 <!--
		 <div class="form-group">
		 <label> Date of Birth </label>
		 <input type="date" name="dateofbirth" class="form-control" required>
		 </div>
		-->
		<button type="submit" class="btn btn-primary"> Mentés </button>
		
		</form>
	</div>
    </div>
	</div>
    </div>

</body>
</html>