<html>
<head>
	<title> Adminisztrációs felület </title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
	<link rel="stylesheet" type ="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
     <div class="container">
	 <div class="details-box">
     <div class="row">
     
	 <div class="col-md-10 details">
     <h2>Add meg a hír adatait</h2>
     <form action="upload.php" method="post">
     
	 <div class="form-group">
     <label> Cím </label>
     <input type="text" name="title" class="form-control" required>
     </div>
	 
	 <div class="form-group">
     <label> Link </label>
     <input type="text" name="url" class="form-control" required>
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
     <label> Gazdaság </label>
     <input type= "checkbox" name= "economy" class="form-control">
     </div>
		
	<button type="submit" class="btn btn-primary"> Mentés </button>
    </form>
	<form action="logout.php" method="post">
	<button type="submit" class="btn btn-primary"> Kilépés </button>
	</div>
    </div>
	</div>

</body>
</html>