<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<center>
	
	<div class="container">
		<form class="form-control" action="vilidation.php" method="POST">
			<div class="form-group">
				<div class="col">
		<label>user Name</label>
    <input type="text" name="username" placeholder="enter your name" class="form-control">
	</div>
	</div>
		<div class="form-group">
		<label>Password</label>
		<input type="Password" name="password" placeholder="Enter Password" class="form-control">
		</div>
		
          <br>
          <button type="submit" class="btn btn-primary">Login</button>
          <a href="register.php">Register</a>
      
	</form>
	</div>

	</center>

</body>
</html>
