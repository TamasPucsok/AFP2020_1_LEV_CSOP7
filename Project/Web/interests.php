<html>
<head>
	<title> Felasználó érdeklődési köre </title>
	<link rel="stylesheet" type="text/css" href="prop_style.css">
	<link rel="stylesheet" type ="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
     <div class="container">
	 <div class="newsupload-box">
     <div class="row">
     
	 <div class="col-md-12 data-field">
     <h2>Add meg az érdeklődési köröd!</h2>
     <form action="upload2.php" method="post">
     
	 <div class="form-group">
     <label> Felhasználónév </label>
     <input type="text" name="username" class="form-control" required>
     </div>
	 
	 <div class="form-group">
     <label> Életmód </label>
     <input type ="checkbox" name="life" class="form-control">
     </div>
	 
	  <div class="form-group">
     <label> Üzlet </label>
     <input type="checkbox" name="business" class="form-control">
     </div>
	  
	  <div class="form-group">
     <label> Kultúra </label>
     <input type="checkbox" name="culture" class="form-control">
     </div>
	 
	 <div class="form-group">
     <label> Sport </label>
     <input type= "checkbox" name= "sport" class="form-control">
     </div>
	 
	 <div class="form-group">
     <label> Technológia </label>
     <input type= "checkbox" name= "tech" class="form-control">
     </div>
	 
	 <div class="form-group">
     <label> Pénzügy </label>
     <input type= "checkbox" name= "economy" class="form-control">
     </div>

		<button type="submit" class="btn btn-primary"> Mentés </button>

    </div>
	</div>
    </div>

</body>
</html>