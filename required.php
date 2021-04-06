<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>form</title>
</head>
<body>
	<div>
		<?php

		if (isset($_POST['create'])) {
			echo 'submitted';
			
		}
		?>
	</div>

<div>
	<form  action="required.php" method="post">
		<div class="container">
	<h2> Sign up page </h2>
	<div class="row">
		<div class="col-sm-3">
			<hr class="mb-5">

     <label for="First name"> First name </label>
     <input class="form-control" type="text" name="first name" placeholder="enter name " required>
     <label for="last name ">LAst name</label>
     <input class="form-control" type="text" name="last name " placeholder="last name" required>
     <label for="email "> Email address</label>
     <input  class="form-control" type="Email" name="email" required>
     <label for="phone number ">Phone Number </label>
     <input class="form-control" type="text" name="number" required>
     <button class="btn btn-primary" name="create"> Signup</button>

</div>
</form>



</body>
</html>