<?php

include 'p.php';

if(isset($_POST['done']))
{
	$username = $_POST['username'];
    $password = $_POST['password'];
    $q = " INSERT INTO 'table'( 'username', 'password') VALUES ('$username','$password')"

    $query = mysqli_query($p,$q);}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title></title>
	</head>
	<body>

		<div class="col-lg-6 m-auto">
			<form method="post">
				<br>
				<div class="card">
					<div class="card-header bg-dark">
						<h1 class="text-white text-center"> insert operation </h1>
					</div>
					<label> username: </label>
					<input type="text" name="username" class="form-control"><br>

					<label> password </label>
					<input type="text" name="password" class="form-control"><br>

					<button class="btn btn-success" type="submit" name="done">submit</button><br>
				</div>
			</form>
		</div>
	</body>

</html>