<?php

include 'p.php';


	$username = $_POST['username'];
    $password = $_POST['password'];
    $q = " select * from table"

    $query = mysqli_query($p,$q);

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
		<div class="container">
			<br>
		<div class="col-lg-12">
			<h1 class="text-warning text-center"> display table data </h1>
			<br>
			<table class=" table table-striped table-hover table-bordered">
				<tr class="bg-dark text-white text-center">
					<th> id</th>
					<th> username</th>
					<th> password</th>
					<th> delete</th>
					<th> update</th>
				</tr>
        <?php

         include 'p.php';

              

	
    $q = " select * from table"

    $query = mysqli_query($p,$q);
 while($res = mysqli_fetch_array($query)){


?>
       <tr class="text-center">

       	        <td><?php echo $res['id']; ?> </td>
       	        <td><?php echo $res['username']; ?> </td>
       	        <td><?php echo $res['password']; ?> </td>
       	        <td>  <button class="btn-danger btn"> <a href="delete.php?id= <?php echo $res['']; ?>" class="text-white"> delete</a> </button> </td>
       	        <td><button class="btn-primary btn"> <a href="update.php?id=  <?php echo $res['id']; ?>" class="text-white"> update</a> </button></td>
					
       </tr>

<?php

   }
?>
			</table>
		</div></div>
		</body>
</html>
